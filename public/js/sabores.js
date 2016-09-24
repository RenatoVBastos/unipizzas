$(function () {

    var filterList = {

        init: function () {

            $('#divsabores').mixItUp({
                selectors: {
                    target: '.portfolio-item',
                    filter: '.filter'
                },
                load: {
                    filter: '.salgada' // salgada selecionada ao entrar
                }
            });

        }

    };

    filterList.init();

});