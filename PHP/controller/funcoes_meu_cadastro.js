
      $(document).ready(function(){

    // Atualização de comentarios
      function atualizarComentarios(){
         $.ajax({
           url:"../model/get_comentario.php",
           success: function(data) {
             $('#lista_meus_comentarios').html(data);

           }
         });
       }
       atualizarComentarios();
       });
