@extends('layouts.main_layout')
@section('title', 'Comprar')

<style>

.container {
    height: 100vh;
}
</style>


@section('content')

@auth
    @include('layouts.authNav')
@endauth

@guest
    @include('layouts.nav')
@endguest

<div class="container ">
    <div class="row justify-content-center">
        <h1 class=" mt-3 text-center text-secondary opacity-50">FAÇA SEU PEDIDO EM UMA DE NOSSAS REDES SOCIAIS</h1>
        <!-- Redes sociais -->
        <div class="col-12 col-md-4 mt-md-5">
            <ul class="list-unstyled" data-aos="fade-right">
                <li class="d-flex align-items-center justify-content-center mb-3">
                    <i class="fab fa-instagram fa-2x text-danger me-3"></i>
                    <a href="https://www.instagram.com/mjorgaoseletronicos/" class="text-decoration-none text-danger"
                        target="_blank">Instagram</a>
                </li>
                <li class="d-flex align-items-center justify-content-center mb-3">
                    <i class="fab fa-facebook fa-2x text-primary me-3"></i>
                    <a href="https://www.facebook.com/p/MJ-%C3%93rg%C3%A3os-Eletr%C3%B4nicos-61550793930110/?locale=pt_BR" class="text-decoration-none text-primary"
                        target="_blank">Facebook</a>
                </li>
                <li class="d-flex align-items-center justify-content-center mb-3">
                    <i class="fab fa-whatsapp fa-2x text-success me-3"></i>
                    <a href="https://wa.me/5519991521900" class="text-decoration-none text-success" target="_blank">WhatsApp</a>
                </li>
            </ul>

            <div class="col-12 col-md-12 text-center text-light order-md-1 mb-3 mb-md-0">
                <h6 class="mb-2 mt-5">
                    Avenida Manoel Conceição, 317, Piracicaba, SP, Brazil
                </h6>
                <h6 class="mb-0">
                    CNPJ : 123-456-789
                </h6>
            </div>
        </div>

    </div>
</div>
</div>

@endsection
