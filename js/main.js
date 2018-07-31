$("input[type='phone']").mask("(999) 999-99-99");

$(document).ready(function() {
	var requiredForms = $("input:not([type=submit])");
 	var index = requiredForms.length;
  
    $(".formit").on("input blur", function(){
    	var valid = 0;
      requiredForms.each(function(i,e){
        if( $(e).val() != "" ){
					valid++;
        }
      });
      if(valid >= index){
            $(".save").css("color", "#fff");
            $('.save').removeAttr('disabled');
        } else {
            $('.save').attr('disabled', 'disabled');    
        }
    });
    
});


