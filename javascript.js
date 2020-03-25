$(document).ready(function(){

  
$('#campo').keyup(function(){
  $(this).val( $(this).val().toUpperCase() );
});

    $('#campo').keyup(function(){
       

        $('form').submit(function(){
            var dados = $(this).serialize();

            $.ajax({
                url: 'processa.php',
                method: 'post',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').add().html(data);
                    
                }
            });

            return false;
        });

        $('form').trigger('submit');

    });
});