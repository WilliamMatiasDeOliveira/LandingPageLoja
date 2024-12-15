@extends('layouts.main_layout')
@section('title', 'Registre-se')

@section('content')

    <style>
        body {
            background-color: #171923;
        }

        .form {
            background-color: #252a37;
            color: white;
        }
    </style>

    @if (session('msg'))
        <div class="alert alert-danger text-center">
            {{ session('msg') }}
        </div>
    @endif

    <div class="container mt-md-2">
        <div class="row justify-content-center">
            <div class="col-md-5 card py-1 px-5 form">
                <form action="{{ route('register.store') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">NOVA CONTA</p>
                    <div class="mb-2">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" class="form-control"required>
                    </div>
                    <div class="mb-2">
                        <label for="email">E-mail</label>
                        <input type="mail" name="email" id="email" class="form-control"required>
                    </div>
                    <div class="mb-2 d-flex justify-content-between">
                        <div class="col-7">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control"required>
                        </div>

                        <div class="col-4">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado" class="form-control"required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control"required>
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation">Confirmação da senha</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"required>
                    </div>

                    <div class="mt-4 d-flex justify-content-between mb-2">
                        <div>
                            <a href="{{ route('login') }}">Já tenho conta?</a>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-warning btn-sm px-2 px-md-5 ">Criar conta</button>
                        </div>
                    </div>
                    <div class="col-12">
                        <a href="{{route('home')}}"class="btn btn-danger btn-sm px-3">Sair</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
