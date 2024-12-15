@extends('layouts.main_layout')
@section('title', 'Login')

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
        <div class="alert alert-success text-center">
            {{ session('msg') }}
        </div>
    @endif

    @if (session('fail'))
        <div class="alert alert-danger text-center">
            {{ session('fail') }}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-5 card p-5 form">
                <form action="{{ route('login.login') }}" method="post">
                    @csrf
                    <p class="display-6 text-center">LOGIN</p>
                    <div class="mb-3">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="mt-4 d-flex justify-content-between">
                        <div>
                            <div class="mb-4">
                                <a href="{{ route('register') }}"class="mb-2">Ainda não tem conta?</a>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary btn-sm px-2 px-md-5">LOGIN</button>
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
