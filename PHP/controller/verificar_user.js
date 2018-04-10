
  $(document).ready(function(){

    //Verificar se os campos de usuário e senha foram preenchidos
    $('#btn_login').click(function(){
      var campo_vazio = false;

      if($('#campo_email').val() == ''){
        $('#campo_email').css({'border-color': '#A94442'});
        var campo_vazio = true;
      } else {
        $('#campo_email').css({'border-color': '#CCC'});
      }

      if($('#campo_senha').val() == ''){
        $('#campo_senha').css({'border-color': '#A94442'});
        var campo_vazio = true;
      } else {
        $('#campo_usuario').css({'border-color': '#CCC'});
      }
      if(campo_vazio) return false;
    });
  });
