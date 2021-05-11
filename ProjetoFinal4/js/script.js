$(document).ready(function() {
    var max_fields      = 50; //maximum input boxes allowed
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
    var max_fields      = 50; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap_passo"); //Fields wrapper
    var add_button      = $(".add_field_button_passo"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><label class="">Nome ou título desse passo</label><br><input  class="campo" type="text" name="mytext[]" placeholder="Ex: Bruno Borges" required><br><label class="">Instruções</label><br><input  class="campo" type="text" name="mytext[]" placeholder="Consiga um amigo disposto a te ajudar" required><br><label class="">Escolha uma imagem para representar esse passo. (.jpg, .png ou .jpeg)</label><br><input type="file" required><a href="#" class="remove_field">Remover</a><hr></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    });
});