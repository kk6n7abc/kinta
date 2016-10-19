$(function(){
  $('#contract-form').submit(function() {
    var errors = [];
    $("#contract-form").find("input").each(function(){
      if ($(this).hasClass('required')) {
        if ($(this).val() == '') {
          errors.push($(this).attr('id'));
        }
      }
    });

    $('#validate_errors').empty();
    if (errors.length > 0) {
      var cnt = errors.length;
      $('#validate_errors').append('<p class="error_text">入力されていない必須項目がありますので、ご入力をお願いいたします。<br>エラー件数：'+ cnt +'件</p>');
      $('body, html').animate({ scrollTop: 0 }, 0);
      return false
    }
  })
});