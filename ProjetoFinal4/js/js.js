$(document).ready(function() {
    var max_fields      = 999; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input class="campo" type="text" name="mytext[]" placeholder="Ex: Marcelo Ferreira"/><a href="#" class="remove_field">Remover</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
});

$(document).ready(function() {
    var max_fields      = 999; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap_passo"); //Fields wrapper
    var add_button      = $(".add_field_button_passo"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><hr><label class="">Nome ou título deste passo</label><br><input  class="campo" type="text" id="nome_aluno" name="mytext[]" placeholder="Ex: Bruno Borges" required><br><label class="">Instruções</label><br><input  class="campo" type="text" id="descricao" name="mytext[]" placeholder="Consiga um amigo disposto a te ajudar" required><br><label class="">Escolha uma imagem para representar esse passo. (.jpg, .png ou .jpeg)</label><br><input type="file" id="thumb_passo" required><a href="#" class="remove_field">Remover passo</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
});