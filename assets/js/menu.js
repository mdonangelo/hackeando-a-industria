var responsiveMenu = document.getElementById("menu-script");

responsiveMenu.onclick = function(){
  var selectMenu = document.getElementById("principal-menu");
  selectMenu.classList.toggle('expand');
}

var hideMenu = document.querySelectorAll("#principal-menu a");
for (var i = 0; i < hideMenu.length; i++) {
  hideMenu[i].onclick = function(){
    var selectMenu = document.getElementById("principal-menu");
    selectMenu.className = '';
  }
}