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