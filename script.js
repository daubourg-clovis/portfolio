const toggleOne = document.querySelector('.toggle-1');
const toggleTwo = document.querySelector('.toggle-2');
const toggleThree = document.querySelector('.toggle-3');


toggleOne.addEventListener('click', function(e){
  e.preventDefault();
  const logoFront = document.querySelector('.logo-front');
  logoFront.classList.toggle('logo-open');
  
});

toggleTwo.addEventListener('click', function(e){
  e.preventDefault();
  const logoBack = document.querySelector('.logo-back');
  logoBack.classList.toggle('logo-open-2');
  
});

toggleThree.addEventListener('click', function(e){
  e.preventDefault();
  console.log(toggleThree, 'clicué');
  const logoPersonal = document.querySelector('.logo-personal');
  logoPersonal.classList.toggle('logo-open');
  
});
