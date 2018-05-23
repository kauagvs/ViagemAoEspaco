

      $(document).ready(function(){

    // Atualização de comentarios
      function atualizarComentarios(){
         $.ajax({
           url:"../model/get_comentario_adm.php",
           success: function(data) {
             $('#todos_comentarios').html(data);
           }
         });
       }
       atualizarComentarios()
       });
