
// menu for admin small screen navbar



const adminburger = document.querySelector('#yellowbanana');
const adminmenu = document.querySelector('#banana');

adminburger.addEventListener('click', (e) => {
  if (adminmenu.classList.contains('w-56')) {
    adminmenu.classList.remove('w-56');
  } else {
    adminmenu.classList.add('w-56');
   
  }

});



// logout in dashboard



function mOver(obj) {
  obj.innerHTML = "Logout"
}

function mOut(obj) {
  obj.innerHTML =  user
}