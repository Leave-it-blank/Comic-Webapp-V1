// menu for nav bar

const burger = document.querySelector('#burger');
const menu = document.querySelector('#menu');

burger.addEventListener('click', (e) => {
  if (menu.classList.contains('hidden')) {
    menu.classList.remove('hidden');
  } else {
    menu.classList.add('hidden');
  }
});



// menu for nav drop down bar

const dropnav = document.querySelector('#dropnav');
const menudrop = document.querySelector('#menudrop');

dropnav.addEventListener('click', (e) => {
  if (menudrop.classList.contains('hidden')) {
    menudrop.classList.remove('hidden');
  } else {
    menudrop.classList.add('hidden');
   
  }

});

// menu for nav drop down bar

const dropnav2 = document.querySelector('#app');
const menudrop2 = document.querySelector('#menudrop');

dropnav2.addEventListener('click', (e) => {
  
    menudrop2.classList.add('hidden');
   
  

});
