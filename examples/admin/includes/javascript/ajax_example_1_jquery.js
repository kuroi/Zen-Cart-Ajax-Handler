$(document).ready(function() {
  $('#rand-product a').click(function()
  {
    $.post('ajax.php', 'handler=ajax_sandbox',function(response){
      if (typeof response.error == 'undefined' || response.error == false) {
        $('#rand-product img').attr("src",response.products_image);
        $('#rand-product p').html(response.products_name);
      } else {
        processError(response);
      }
    },'json');
    return false;
  });
});
