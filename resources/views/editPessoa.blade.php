<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doe sangue</title>
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
            <h2 class="title item-entrada active-item">Editar Pessoa</h2>

            <form action="{{ route('pessoas.edit', ['pessoa' => $pessoa->id]) }}" method="post">
                @csrf
                @method('PUT')
                <label class="label-formulario" for="nome-pessoa">Nome</label>
                <input class="cad-input" type="text" id="nome-pessoa" name="nome" value="{{ $pessoa->nome }}" />
    
                <label class="label-formulario" for="cpf-pessoa">CPF</label>
                <input class="cad-input" type="text" id="cpf-pessoa" name="cpf" value="{{ $pessoa->cpf }}"/>
    
                <label class="label-formulario" for="nasc-pessoa">Data Nasc.</label>
                <input class="cad-input" type="text" id="nasc-pessoa" name="nasc" value="{{ $pessoa->datanasc }}"/>
    
                <label class="label-formulario">Tipo Sanguineo</label>
                <select class="cad-input sect-tipo" name="tiposang" value="{{ $pessoa->tipo_sanguineo }}">
                    <option value="A">A</option>
                    <option value="A+">A+</option>
                    <option value="B">B</option>
                    <option value="B+">B+</option>
                    <option value="AB">AB</option>
                    <option value="AB+">AB+</option>
                    <option value="O">O</option>
                    <option value="O+">O+</option>
                </select>
    
                <input id="cadastrar" class="btn-cadastrar" type="submit" value="cadastrar" />
                <a id="cancelar" class="btn-cadastrar" href="{{route('pessoas.listAll')}}">cancelar</a>
            </form>
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