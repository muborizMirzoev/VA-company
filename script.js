const form = document.querySelector('.form');
const lid = document.querySelector('.lid');

form.style.display = 'none';

lid.addEventListener('click', function() {
  if(form.style.display == 'none') form.style.display = 'block';
  else form.style.display = 'none';
});


// Страница спасибо после отравки формы

$(document).ready(function() {
  var $form = $("#form");
  $form.submit(function() {
    $.ajax({
      type: "POST",
      url: "send.php",
      data: $(this).serialize()
    //}).done(function() {
    }).fail(function() {
      $form.css("display", "none");
      $(".center").css("display", "none");
      $(".thanks").css("display", "block");
    });
    return false;
  });
});