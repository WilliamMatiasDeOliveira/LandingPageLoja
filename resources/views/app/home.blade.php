@extends('layouts.main_layout')
@section('title', 'Home')

<style>

   .slider-container .img-fluid {
        height: 300px;
        object-fit: cover;
        width: 100%;
        display: block;
   }

       /* Ajustes para telas pequenas (344px - 767px) */
    @media (min-width: 344px) and (max-width: 767px) {
        .slider-container .img-fluid {
            height: auto; /* Ajusta a altura para manter a proporção */
            object-fit: contain; /* Garante que a imagem não seja cortada */
            width: 90%; /* Ajusta a largura para 90% para telas pequenas */
            display: block;
            margin: 0 auto; /* Centraliza a imagem */
        }
    }

    /* Ajustes para telas médias (768px - 991px) */
    @media (min-width: 768px) and (max-width: 991px) {
        .slider-container .img-fluid {
            height: 300px; /* Ajusta a altura para telas médias */
            object-fit: contain; /* Garante que a imagem não seja cortada */
            width: 80%; /* Ajusta a largura para 80% para telas médias */
            display: block;
            margin: 0 auto; /* Centraliza a imagem */
        }
    }

    /* Ajustes para telas grandes (992px - 1199px) */
    @media (min-width: 992px) and (max-width: 1199px) {
        .slider-container .img-fluid {
            height: 350px; /* Aumenta a altura para telas grandes */
            object-fit: contain; /* Garante que a imagem não seja cortada */
            width: 70%; /* Ajusta a largura para 70% para telas grandes */
            display: block;
            margin: 0 auto; /* Centraliza a imagem */
        }
    }

    /* Ajustes para telas extra grandes (1200px ou maior) */
    @media (min-width: 1200px) {
        .slider-container .img-fluid {
            height: 400px; /* Aumenta a altura para telas extra grandes */
            object-fit: contain; /* Garante que a imagem não seja cortada */
            width: 60%; /* Ajusta a largura para 60% para telas extra grandes */
            display: block;
            margin: 0 auto; /* Centraliza a imagem */
        }
    }


</style>


@section('content')

@auth
    @include('layouts.authNav')
@endauth

@guest
    @include('layouts.nav')
@endguest

@if (session('msg'))
    <div class="alert alert-info text-center">
        {{session('msg')}}
    </div>
@endif

<!-- Carrossel de Imagens -->
<div class="container-fluid"data-aos='fade-down'>
    <div class="slider-container text-center d-flex justify-content-center align-items-center">
        <div class="slide active">
            <img src="{{ asset('assets/img/img1.png') }}" alt="Imagem 1" class="img-fluid d-block mx-auto mt-2">
        </div>
        <div class="slide">
            <img src="{{ asset('assets/img/img2.png') }}" alt="Imagem 2" class="img-fluid d-block mx-auto mt-2">
        </div>
        <div class="slide">
            <img src="{{ asset('assets/img/img3.png') }}" alt="Imagem 3" class="img-fluid d-block mx-auto mt-2">
        </div>
        <div class="slide">
            <img src="{{ asset('assets/img/img4.png') }}" alt="Imagem 4" class="img-fluid d-block mx-auto mt-2">
        </div>
        <div class="slide">
            <img src="{{ asset('assets/img/img5.png') }}" alt="Imagem 5" class="img-fluid d-block mx-auto mt-2">
        </div>

    </div>
</div>

@endsection
