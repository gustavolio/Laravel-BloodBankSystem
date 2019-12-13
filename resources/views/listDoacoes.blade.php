<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dor sangue</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> 


</head>

<body>

    <div class="mascara"></div>
    <div class="modal-cadastrar-pessoa">


    </div>

    <div class="page-container">
        <div class="menu">
            <div class="logo">
                <!-- <img class="img-logo" /> -->
                <h1 class="logo-title">
                    Doe Sangue
                </h1>
            </div>

            <div class="nav-menu">
                <button id="entrada" class="nav-menu-btn">Registrar Doação</button>
                <a id="addPessoa" class="nav-menu-btn" href="{{ route('pessoas.formAddPessoa') }}">Adicionar Pessoa</a>
                <a id="listarDoacao" class="nav-menu-btn" href="">Listar Doações</a>
            </div>

            <div class="logo-frame">
                <img class="logo-frame">
            </div>
        </div>


        <div class="content-page reg-entrada aba-ativa">
            <div class="header">
                <h2 class="title item-entrada active-item">Doações</h2>
            </div>

            <div class="list-container">
                @foreach($doacoes as $doacao)
                <div class="item">
                    #
                    <button class="btn-item">
                        <p class="txt-btn nome">
                            {{ $doacao->id }}
                        </p>

                        <p class="txt-btn space">
                            /
                        </p>

                        <p class="txt-btn">{{ $doacao->tipo_sanguineo }}</p>
                        <p class="txt-btn space">/</p>
                        <p class="txt-btn">{{ $doacao->quantidade }}</p>
                        <p class="txt-btn space">/</p>
                        <p class="txt-btn">{{ $doacao->tipo }}</p>
                    </button>
                </div>
                @endforeach
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                // Botões de cadastro de pessoas
                $('#cadastrar-novo').click(function() {
                    $('.mascara').addClass(function() {
                        return "active";
                    });

                    $('.modal-cadastrar-pessoa').addClass(function() {
                        return "active";
                    });
                });

                $('#cancelar').click(function() {
                    $('.mascara').removeClass(function() {
                        return "active";
                    });

                    $('.modal-cadastrar-pessoa').removeClass(function() {
                        return "active";
                    });
                });

                // Botões de ver de pessoas
                $('.ver-pessoa').click(function() {
                    $('.mascara').addClass(function() {
                        return "active";
                    });

                    $('.modal-ver-pessoa').addClass(function() {
                        return "active";
                    });
                });

                $('#fechar').click(function() {
                    $('.mascara').removeClass(function() {
                        return "active";
                    });

                    $('.modal-ver-pessoa').removeClass(function() {
                        return "active";
                    });
                });

                // Botões de trocar de aba
                $('#entrada').click(function() {
                    $('.item-entrada').addClass(function() {
                        return 'active-item';
                    });

                    $('.item-saida').removeClass(function() {
                        return 'active-item';
                    });
                });

                $('#saida').click(function() {
                    $('.item-saida').addClass(function() {
                        return 'active-item';
                    });

                    $('.item-entrada').removeClass(function() {
                        return 'active-item';
                    });
                });
            });
        </script>
</body>

</html>