@extends('layouts.main_layout')
@section('title', 'Depoimentos')

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

    @guest
        @include('layouts.nav')
    @endguest

    @auth
        @include('layouts.authNav')
    @endauth

    <div class="container">

        @if (session('msg'))
            <div class="alert alert-info text-center">
                {{session('msg')}}
            </div>
        @endif

        @if (session('sucPost'))
            <div class="alert alert-success text-center">
                {{session('sucPost')}}
            </div>
        @endif

        <div class="row mb-3 text-end">
            <div class="col">
                <a href="{{route('depoimento.store')}}"class="btn btn-primary btn-sm">Deixe seu depoimento</a>
            </div>
        </div>
        <div class="row">
            @if ($depoimentos->isEmpty())
                <h1 class="text-secondary">Ainda não temos nenhum depoimento :(</h1>
            @endif
            @foreach ($depoimentos as $message)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body"style="height:200px;">
                            {{date('d/m/Y', strtotime($message->created_at))}}
                            <h5 class="card-title">{{ $message->user->name }}</h5>
                            <h6 class="card-text">{{$message->user->cidade}} - {{$message->user->estado}}</h6>
                            <p class="card-text"></p>
                            <p class="card-text">{{ $message->message }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>





@endsection
