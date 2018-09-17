$(function(){
    $(".carregando").hide();
    $(".select-marca").change(function () {
        if ($(this).val()){
            var elemPai = $(this).parent();
            elemPai.find(".select-modelo").hide();
            elemPai.find(".carregando").show();
            var url = 'modelos.json';
            $.getJSON(url, function(j){

                var options = '<option value="">Selecione...</option>';
                for (var i = 0; i < j.length; i++) {
                    options += '<option value="' +
                        j[i].id + '">' +
                        j[i].name + '</option>';
                }
                elemPai.find(".select-modelo").html(options);
                elemPai.find(".select-modelo").show();
                elemPai.find(".carregando").hide();
            });

        }else {
            $('.select-modelo').html(
                '<option value="">-- Escolha uma montadora --</option>'
            );
        }
    });

    $('.select-modelo').change(function(){
        if( $(this).val() ) {
            var elemPai = $(this).parent();
            var marca = elemPai.find('.select-marca').val();
            elemPai.find('.select-ano').hide();
            elemPai.find('.carregando').show();
            $.getJSON(
                'http://fipeapi.appspot.com/api/1/carros/veiculo/'+marca+'/'+$(this).val()+'.json', function(j){
                    var options = '<option value="">Selecione...</option>';
                    for (var i = 0; i < j.length; i++) {
                        options += '<option value="' +
                            j[i].id + '">' +
                            j[i].name + '</option>';
                    }
                    elemPai.find('.select-ano').html(options).show();
                    elemPai.find('.carregando').hide();
                });
        } else {
            $('.select-ano').html(
                '<option value="">-- Escolha um modelo --</option>'
            );
        }
    });

});