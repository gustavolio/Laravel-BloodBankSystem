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
    <div class="page-container">
        <div class="menu">
            <div class="logo">
            
                <h1 class="logo-title">
                    Doe Sangue
                </h1>
            </div>

            <div class="logo-frame">
                <img class="logo-frame">
            </div>
        </div>


        <div class="content-page">
            <h2 class="title item-entrada active-item">Pessoa</h2>

            <p for="nome-pessoa">Nome</p>
            <p>{{ $pessoaAtual->nome }}</p>

            <p for="cpf-pessoa">CPF</p>
            <p>{{ $pessoaAtual->cpf }}</p>

            <p for="nasc-pessoa">Data Nasc.</p>
            <p>{{ $pessoaAtual->datanasc }}</p>

            <p for="nasc-pessoa">Tipo Sanguíneo</p>
            <p>{{ $pessoaAtual->tiposanguineo }}</p>

            <a id="cancelar" class="btn-cadastrar" href="{{route('pessoas.listAll')}}">cancelar</a>
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