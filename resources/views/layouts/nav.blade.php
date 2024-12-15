<style>

    /* Centraliza o conteúdo principal */
    .col.text-center {
        display: flex;
        flex-direction: column; /* Organiza itens em coluna (logo e título) */
        align-items: center; /* Centraliza horizontalmente */
        justify-content: center; /* Centraliza verticalmente, caso necessário */
    }

    /* Estiliza o logo */
    .logo {
        max-width: 120px; /* Tamanho do logo ajustável */
        margin-bottom: 10px; /* Espaçamento entre o logo e o título */
    }

    /* Estiliza o título */
    .titulo {
        color: #ae9268; /* Cor do título */
        font-size: 2rem; /* Tamanho do texto */
        margin: 0; /* Remove margens padrão */
        text-align: center;
    }

    /* Ajustes responsivos opcionais */
    @media (max-width: 576px) {
        .titulo {
            font-size: 1.2rem; /* Reduz tamanho do título em telas menores */
        }
    }


    </style>
    {{-- header --}}
    <div class="container-fluid navigation">
        <div class="row">
            <!-- Row com os botões Login e Register (visível apenas em telas grandes) -->
            <div class="row d-none d-md-flex justify-content-end mt-1">
                <div class="col-auto"data-aos="fade-right">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
                </div>
                <div class="col-auto">
                    <a href="{{ route('register') }}" class="btn btn-warning btn-sm"data-aos="fade-right">Registre-se</a>
                </div>
            </div>
        <div class="row py-1">
        <!-- Logo e título -->
            <div class="col text-center" data-aos='fade-left'>
                <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid logo" alt="Logo">
                <h1 class="titulo">MJ Órgãos Eletrônicos</h1>
            </div>
        </div>


        <nav class="navbar navbar-expand-md"data-aos='fade-left'>
            <div class="container-fluid">
                <!-- Botão do menu hambúrguer -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-secondary opacity-50"style="border-radius:5px;"></span>
                </button>
                <!-- Links do menu -->
                <div class="collapse navbar-collapse ms-md-5" id="navbarNav">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="btn btn-outline-light mx-2 my-2"><strong>HOME</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('orgaos') }}" class="btn btn-outline-light mx-2 my-2"><strong>ORGÃOS</strong></a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('onde_estamos') }}" class="btn btn-outline-light mx-2 my-2"><strong>ONDE ESTAMOS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('depoimento') }}" class="btn btn-outline-light mx-2 my-2"><strong>DEPOIMENTOS</strong></a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <!-- Botões Login e Registre-se dentro do menu hambúrguer (visíveis apenas em telas pequenas) -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-center">
                <li class="nav-item d-lg-none">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-sm w-100 mb-2">Login</a>
                </li>
                <li class="nav-item d-lg-none">
                    <a href="{{ route('register') }}" class="btn btn-warning btn-sm w-100">Registre-se</a>
                </li>
            </ul>
        </div>
    </div>




