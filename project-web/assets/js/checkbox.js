$('.chk').click(function() {
  var id = $(this).parent().attr('id');
  if ($(this).is(':checked')) {
    document.getElementById(id).style.color = "black";
  }
  else {
    document.getElementById(id).style.color = "#CCCCCC";
  }
});