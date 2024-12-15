@extends('layouts.main_layout')
@section('title', 'Órgãos')

<style>
    /* grade de produtos */
    .card.box {
        background-color: #171923;
    }

    .card-img-top {
        height: 400px;
        object-fit: cover;
        width: 100%;
        display: block;
    }

    .card-title.marca {
        color: #ae9268;
        font-weight: bold;
    }

    .card-text.preco {
        color: #ae9268;
        font-weight: bold;
    }

    .card-img-top.hs-500 {
        max-height: 300px; /* Tamanho máximo uniforme */
        object-fit: cover; /* Mantém o foco na área principal da imagem */
    }

    .card-img-top.mj {
        /*height: 500px;*/
        object-fit: cover;
        width: 100%;
        display: block;
    }

    /* .card-img-top.mj {
        max-height: 700px;
        object-fit: cover;
    } */


</style>

@section('content')

    @include('layouts.nav')

    <div class="container mt-4">
        <div class="row">

            <h1 class="text-center text-secondary opacity-50 mb-5">ÓRGÃOS DIGITAL ACORDES</h1>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_2D_6.832.png') }}"class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES 2D</h5>
                        <p class="card-text preco">R$ 6.832,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_AC450_9.300.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES AC450</h5>
                        <p class="card-text preco">R$ 9.300,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_AC_300_6.499.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES AC 300</h5>
                        <p class="card-text preco">R$ 6.499,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>


            <!-- Produto 5 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_AC_400_8.200.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES AC 400</h5>
                        <p class="card-text preco">R$ 8.200,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Produto 6 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_CLASSIC_5.900.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES CLASSIC</h5>
                        <p class="card-text preco">R$ 5.900,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_COLONIAL_13.890.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES COLONIAL</h5>
                        <p class="card-text preco">R$ 13.890,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_PREMIUM_INFINITY_5.600.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES PREMIUM INFINITY</h5>
                        <p class="card-text preco">R$ 5.600,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card box"data-aos="fade-up">
                    <img src="{{ asset('assets/img_products/acordes/DIGITAL_ACORDES_TOP_ELEGANCE_AC_500_14.500.png') }}"
                        class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title marca">DIGITAL ACORDES TOP ELEGANCE AC 500</h5>
                        <p class="card-text preco">R$ 14.500,00</p>
                        <p>
                            <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>

{{-- ////////////////////////////////////////////////////////////// --}}

    <h1 class="text-center text-secondary opacity-50 mb-5">ÓRGÃOS DIGITAL HARMONIA</h1>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/HARMONIA_HS_200_SUPER_13.400.png') }}"
                class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">HARMONIA HS 200 SUPER</h5>
                <p class="card-text preco">R$ 13.400,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/HARMONIA_HS_45_LUXO_6.200.png') }}"
                class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">HARMONIA HS 45 LUXO</h5>
                <p class="card-text preco">R$ 6.200,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/HARMONIA_HS_500_15.800.png') }}"
                class="card-img-top hs-500 img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">HARMONIA HS 500</h5>
                <p class="card-text preco">R$ 15.800,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/HARMONIA_HS_900_34.900.png') }}"
                class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">HARMONIA HS 900</h5>
                <p class="card-text preco">R$ 34.900,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/HARMONIA_HS_95_LUXO_8.975.png') }}"
                class="card-img-top img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">HARMONIA HS 95 LUXO</h5>
                <p class="card-text preco">R$ 8.975,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

{{-- //////////////////////////////////////////////////////////////////////////////// --}}

    <h1 class="text-center text-secondary opacity-50 mb-5">ÓRGÃOS DIGITAL MJ</h1>


    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/ORGAO_MJ_4.100,.png') }}"
                class="card-img-top mj img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">ÓRGÃO MJ</h5>
                <p class="card-text preco">R$ 4.100,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card box"data-aos="fade-up">
            <img src="{{ asset('assets/img_products/harmonia/ORGAO_MJ_4.100.png') }}"
                class="card-img-top mj img-fluid">
            <div class="card-body">
                <h5 class="card-title marca">ÓRGÃO MJ</h5>
                <p class="card-text preco">R$ 4.100,00</p>
                <p>
                    <a href="{{route('comprar')}}"class="btn btn-primary btn-sm">Comprar</a>
                </p>
            </div>
        </div>
    </div>



        </div>

    </div>



@endsection
