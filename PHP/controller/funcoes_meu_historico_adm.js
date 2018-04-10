
      $(document).ready(function(){

    // Atualização de comentarios
      function atualizarComentarios(){
         $.ajax({
           url:"../model/get_historico_adm.php",
           success: function(data) {
             $('#lista_historico').html(data);

           }
         });
       }
       atualizarComentarios();
       });
