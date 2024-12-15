<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginCheckController extends Controller
{
    public function login(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if(!$user){
            $msg = 'Usuário ou senha incorretos';
            return redirect()->route('login')
            ->with('fail', $msg);
        }

        if(!Hash::check($password, $user->password)){
            $msg = 'Usuário ou senha incorretos';
            return redirect()->route('login')
            ->with('fail', $msg);
        }

        Auth::login($user);

        return view('app.home');

    }

    public function logout(Request $request){
        Auth::logout(); // Encerra a sessão do usuário autenticado
        $request->session()->invalidate(); // Invalida a sessão atual
        $request->session()->regenerateToken(); // Regenera o token CSRF
        return redirect()->route('home');
    }

    public function register(Request $request){

        $request->validate(
            [
                'name'=>'required',
                'email'=>'required',
                'cidade'=>'required',
                'estado'=>'required',
                'password'=>'required|confirmed'
            ]
            );

        $name = strtolower($request->input('name'));
        $email = $request->input('email');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if($user){
            return redirect()->route('register')
            ->with('msg', 'Este usuario já existe');
        }

        $user = User::create([
            'name'=>$name,
            'email'=>$email,
            'cidade'=>$cidade,
            'estado'=>$estado,
            'password'=>Hash::make($password)
        ]);

        return redirect()->route('login')->with('msg', 'Usuário cadastrado com sucesso !');



    }


}
