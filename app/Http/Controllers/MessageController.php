<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depoimento;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function depoimento()
    {
        $depoimentos = Depoimento::with('user')->latest()->get();
        return view('app.depoimento', compact('depoimentos'));
    }

    public function store()
    {
        if (!Auth::check()) {
            $msg = "Para deixar seu depoimento você precisa estar logado";
            return redirect()->route('depoimento')
                ->with('msg', $msg);
        }

        return view('app.post');
    }

    public function postSubmit(Request $request) {
        $user = Auth::user();

        $depoimento = $request->input('depoimento');
        $user_id = $user->id;
        $criado_em = now();

        Depoimento::create([
            'user_id'=>$user_id,
            'message'=>$depoimento,
            'created_at'=>$criado_em
        ]);

        return redirect()->route('depoimento')
        ->with('sucPost', 'Obrigado por deixar seu depoimento !');
        // return view('app.depoimento', ['sucPost'=>'Obrigado por deixar seu depoimento !']);

    }
}
