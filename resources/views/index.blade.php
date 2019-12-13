<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dor sangue</title>
    <style>
        body,
        html {
            margin: 0;
            height: 100%;
        }


        /* ------- Page Container------- */

        .page-container {
            display: flex;
            flex-wrap: nowrap;
            height: 100%;
        }

        .menu {
            width: 30%;
            background-color: red;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-content: center;
        }

        .logo-title {
            font-family: fantasy;
            color: white;
            display: flex;
            justify-content: center;
        }

        .logo {
            height: 80px;
            width: 100%;
        }

        .nav-menu {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .nav-menu-btn {
            width: 100%;
            background-color: transparent;
            border: 1px solid white;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            height: 35px;
            margin-bottom: 20px;
            text-align: initial;
            padding-top: 5px;
            padding-bottom: 5px;
            margin-left: 5px;
            margin-right: 5px;
            display: flex;
            justify-content: center;
        }

        .nav-menu-btn:hover {
            background-color: white;
            color: black;
        }

        .content-page {
            width: 70%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .title {
            font-family: monospace;
            text-transform: uppercase;
            font-size: 31px;
        }

        .search-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-bar {
            width: 300px;
            height: 20px;
        }

        .search-button {
            margin-right: 28px;
        }

        .list-container {
            width: 80%;
            border: 1px solid darkgray;
            border-radius: 10px;
            background-color: #e4e4e4;
            padding: 15px;
            box-sizing: border-box;
        }

        .item {
            display: flex;
            align-items: center;
        }

        .btn-item {
            display: flex;
            justify-content: flex-start;
            background: transparent;
            width: 100%;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        .btn-item:hover {
            color: red;
        }

        .txt-btn {
            font-size: 16px;
            margin-right: 20px;
        }


        /* ------- Modal Cadastar Chamado ------- */

        .mascara {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(52, 73, 94, 0.8);
            z-index: 50;
            visibility: hidden;
            opacity: 0;
            transition: 0.7s;
        }

        .modal-cadastrar-pessoa,
        .modal-ver-pessoa {
            position: fixed;
            top: 25%;
            left: 50%;
            width: 400px;
            height: 300px;
            margin-left: -200px;
            margin-top: -150px;
            background: #bdc3c7;
            z-index: 100;
            visibility: hidden;
            opacity: 0;
            transition: 0.5s ease-out;
            transform: translateY(45px);
            border-radius: 10px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 25px;
        }

        .modal-ver-pessoa.active,
        .modal-cadastrar-pessoa.active,
        .mascara.active {
            visibility: visible;
            opacity: 1;
        }

        input.btn-cadastrar {
            width: 100%;
            text-transform: uppercase;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .cad-input {
            margin-bottom: 10px;
            width: 100%;
            border-radius: 5px;
            min-height: 20px;
        }


        /* Form Doação Entrada */

        .form-part {
            width: 100%;
            display: flex;
            align-items: center;
            height: 35px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .form-doacao-entrada {
            width: 50%;
        }

        .text-box {
            padding-left: 10px;
        }


        /* ------- Abas ------- */

        .item-entrada,
        .item-saida {
            display: none;
        }

        .item-entrada.active-item,
        .item-saida.active-item {
            display: block;
        }

        .esconder-aba {
            display: none;
        }
    </style>


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
                <button id="entrada" class="nav-menu-btn">* Registrar Doação (Entrada)</button>
                <button id="saida" class="nav-menu-btn">* Registrar Doação (Saída)</button>
            </div>

            <div class="logo-frame">
                <img class="logo-frame">
            </div>
        </div>


        <div class="content-page reg-entrada aba-ativa">
            <div class="header">
                <h2 class="title item-entrada active-item">Registrar Doação (Entrada)</h2>
                <h2 class="title item-saida">Registrar Doação (Saída)</h2>
            </div>

            <div class="list-container">
                @foreach($pessoas as $pessoa)
                <div class="item">
                    #
                    <button class="btn-item">
                        <p class="txt-btn nome">
                            {{ $pessoa->nome }}
                        </p>

                        <p class="txt-btn space">
                            /
                        </p>

                        <p class="txt-btn">
                            {{ $pessoa->tipo_sanguineo }}
                        </p>

                        <form action="{{ route('pessoa.destroy', ['pessoa' => $pessoa->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="pessoa" value="{{ $pessoa->id }}">
                            <input type="submit" value="Remover">
                        </form>


                        <!-- <button class="ver-pessoa">Editar</button>
                        <button class="ver-pessoa">Remover</button> -->
                    </button>
                </div>
                @endforeach
            </div>
        </div>

        <div class="content-page doacao-entrada esconder-aba">
            <div class="header">
                <h2 class="title item-entrada active-item">Doação (Entrada)</h2>
                <h2 class="title item-saida">Doação (Saída)</h2>
            </div>

            <form class="form-doacao-entrada">
                <div class="form-part">
                    <label for="nome">Nome:</label>
                    <p> Gustavo Lima </p>
                </div>

                <div class="form-part">
                    <label for="tipo">Tipo Sanguineo:</label>
                    <p> B+ </p>
                </div>

                <input class="form-part text-box" type="text" placeholder="Data" />

                <input class="form-part text-box" type="text" placeholder="Quantidade" />

                <input class="form-part" type="submit" value="Registrar" />

                <button class="form-part">Cancelar</button>
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