
  $(document).ready(function(){

// Atualização de comentarios
  function atualizarComentarios(){
     $.ajax({
       url:"../model/get_comentario_geral.php",
       success: function(data) {
         $('#lista_comentarios').html(data);

       }
     });
   }

 atualizarComentarios();

//Função para envio de novos comentários
    $("#btn_comentario").click(function(){

      if($("#comentario").val().length > 0){
          $.ajax({
            url: '../model/inclui_comentario.php',
            method: 'POST',
            data: $('#form_comentario').serialize(),
            success: function(data){
              $('#comentario').val("");
              atualizarComentarios();
            }
          });
      }
    });

  });
