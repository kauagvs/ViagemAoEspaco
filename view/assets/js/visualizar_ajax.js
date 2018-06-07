$(document).ready(function(){

  atualizarComentarios();

  // Atualização de comentarios
  function atualizarComentarios(){
     $.ajax({
       url:"/model/comentario/visualizar_comentario.php",
       success: function(data) {
         $('#todos_comentarios').html(data);
       }
     });
   }
});


