const form = document.querySelector('.form');
const lid = document.querySelector('.lid');

form.style.display = 'none';

lid.addEventListener('click', function() {
  if(form.style.display == 'none') form.style.display = 'block';
  else form.style.display = 'none';
});