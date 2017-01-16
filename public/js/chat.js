$(document).ready(function(){

  $('form').submit(function(){
    $.ajax({
      type: 'post',
      url: 'chats',
      data: {
        '_token' : $('input[name=_token]').val(),
        'msg' : $('input[name=msg]').val()
      },
      success: function(data){
      console.log(data);
      }

    });
  });
});
