var count = 1;

        $('#add-campo').click(function() {
            count++;
            $(".hours").append('<div class="form-group" id="campo' + count + '"><label>Inicio</label><input type="time" name="entrada[]" class ="hour_start"> <label>Fim</label><input type="time" name="saida[]" class ="hour_start"><div class="botoes"><button id="' + count + '" class="botao btn-apagar">-</button></div></div>');
        });

        $("form").on("click", ".btn-apagar", function() {
            var button_id = $(this).attr("id");
            $("#campo" + button_id + '').remove();
        });

        $('.form').submit(function() {
            $.ajax({
                url: "tempo.php",
                type: "POST",
                data: $('.form').serialize(),
                success: function(resultado) {
                    $(".resposta").html(resultado);

                }
            });
            return false;

        });




