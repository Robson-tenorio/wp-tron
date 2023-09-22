jQuery(document).ready(function($) {
    // Oculta todas as subcategorias inicialmente
    $('.subcategoria').hide();

    // Mostra as subcategorias ao clicar em uma categoria
    $('input[type="radio"]').change(function() {
        $('.subcategoria').hide();
        var categoriaSelecionada = $(this).val();
        $('#' + categoriaSelecionada).show();
    });
});