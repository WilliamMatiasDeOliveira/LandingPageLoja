@extends('layouts.main_layout')
@section('title', 'Post')

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

@auth
@include('layouts.authNav')
@endauth


  <div class="container mt-5 text-light">
    <h2 class="text-center">Deixe seu depoimento</h2>
    <form action="{{route('postSubmit')}}" method="POST">
        @csrf
      <div class="mb-3">
        <textarea class="form-control"name="depoimento" rows="5" placeholder="Digite seu depoimento aqui..." required></textarea>
      </div>
      <div class="row">
        <div class="col text-end">
            <button type="submit" class="btn btn-primary btn-sm text-end">Enviar Depoimento</button>
        </div>
      </div>
    </form>
  </div>

@endsection
