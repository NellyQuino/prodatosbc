$('.check').change(function() {
    var estatus = $(this).prop('checked') == true ? 1 : 0; 

    if(estatus == 1){
        var valorSelect = $(this).val(); 
    }
    console.log(estatus);
   
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
                console.log(valorSelect);
            }
        }); 
});