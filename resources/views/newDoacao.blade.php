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
            <h2 class="title item-entrada active-item">Registrar Doacao</h2>

            <form action="{{ route('doacao.store') }}" method="post">
                @csrf
                <label for="cpf-pessoa">ID</label>
                <input class="cad-input" type="text" id="id-pessoa" name="id" value="{{ $pessoa->id }}" readonly=“true”/>

                <label for="nome-pessoa">Nome</label>
                <input class="cad-input" type="text" id="nome-pessoa" name="nome" value="{{ $pessoa->nome }}" readonly=“true”/>    

                <label for="tipo-sang">Tipo Sanguíneo</label>
                <input class="cad-input" type="text" id="tipo-sang" name="tipo_sanguineo" value="{{ $pessoa->tipo_sanguineo }}" readonly=“true”/>    

                <label>Tipo Doação</label>
                <select class="cad-input sect-tipo" name="tipo">
                    <option value="entrada">Entrada</option>
                    <option value="saida">Saída</option>
                </select>
                
                <label for="quantidade">Quantidade (em litros)</label>
                <input class="cad-input" type="text" id="quantidade" name="quantidade" />
                
                <label for="data-doa">Data</label>
                <input class="cad-input" type="text" id="data-doa" name="data_doacao" />

                <input id="registrar" class="btn-cadastrar" type="submit" value="registrar" />
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