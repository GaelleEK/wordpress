// la prévisulaisation de la couleur ne s affiche à corriger
(function ($) {

    wp.customize('header_background', function (value) {
        value.bind(function (newVal) {
            $('.navbar').attr('style', 'background:' + newVal + '!important')
        });
    });

})(jQuery);