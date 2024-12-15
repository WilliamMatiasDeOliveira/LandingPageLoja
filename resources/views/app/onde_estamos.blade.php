@extends('layouts.main_layout')
@section('title', 'Onde Estamos')

@section('content')

<style>
    body {
        background-color: #171923;
    }

</style>

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <!-- Redes sociais -->
        <div class="col-12 col-md-4 mt-md-5">
            <ul class="list-unstyled" data-aos="fade-right">
                <li class="d-flex align-items-center justify-content-md-center mb-3">
                    <i class="fab fa-instagram fa-2x text-danger me-3"></i>
                    <a href="https://www.instagram.com/mjorgaoseletronicos/" class="text-decoration-none text-danger"
                        target="_blank">Instagram</a>
                </li>
                <li class="d-flex align-items-center justify-content-md-center mb-3">
                    <i class="fab fa-facebook fa-2x text-primary me-3"></i>
                    <a href="https://www.facebook.com/p/MJ-%C3%93rg%C3%A3os-Eletr%C3%B4nicos-61550793930110/?locale=pt_BR" class="text-decoration-none text-primary"
                        target="_blank">Facebook</a>
                </li>
                <li class="d-flex align-items-center justify-content-md-center mb-3">
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

        <!-- Mapa -->
        <div class="col-12 col-md-8 mt-md-4">
            <div class="ratio ratio-4x3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3680.453149164209!2d-47.65859382622948!3d-22.711392530914125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c633ddd37339e1%3A0x8b15a52b6baf3fb4!2zTUogw5NyZ8Ojb3MgRWxldHLDtG5pY29z!5e0!3m2!1spt-BR!2sbr!4v1733742831356!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>

@endsection
