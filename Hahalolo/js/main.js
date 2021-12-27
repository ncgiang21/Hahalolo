let btnAddpost = document.getElementById('btnAddpost');

btnAddpost.addEventListener('click', addpost.php);


function menuToggle() {
    const toggleMenu = document.querySelector('.box-logout');
    toggleMenu.classList.toggle('active');
}


function STT() {
  document.getElementById("popupForm").style.display = "block";
}
function Dong() {
  document.getElementById("popupForm").style.display = "none";
}