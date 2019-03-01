document.addEventListener("DOMContentLoaded", function () {

var submenu = document.getElementById('submenu')
var nav = document.getElementsByClassName("link");
var sandwich = document.getElementById('hmt');
var header = document.getElementById('header');

for (i=0; i < nav.length; i++) {
  nav[i].onclick =  function(){
    submenu.style.display = 'none';
    sandwich.checked=false;
    header.style.minHeight = 'auto';
  }
  };
sandwich.onclick = function(){
  if (submenu.style.display != 'block'){
    submenu.style.display = 'block';
    header.style.minHeight = '100vh';
  }
  else{
    submenu.style.display = 'none';
    header.style.minHeight = 'auto';
  }
};


var updownElem = document.getElementById('updown');
var pageYLabel = 0;
updownElem.onclick = function() {
  var pageY = window.pageYOffset || document.documentElement.scrollTop;

  switch (this.className) {
    case 'up':
      pageYLabel = pageY;
      window.scrollTo(0, 0);
      this.className = 'down';
      break;

    case 'down':
      window.scrollTo(0, pageYLabel);
      this.className = 'up';
  }

};

window.onscroll = function() {
  var pageY = window.pageYOffset || document.documentElement.scrollTop;
  var innerHeight = document.documentElement.clientHeight;

  switch (updownElem.className) {
    case '':
      if (pageY > innerHeight) {
        updownElem.className = 'up';
      }
      break;

    case 'up':
      if (pageY < innerHeight) {
        updownElem.className = '';
      }
      break;

    case 'down':
      if (pageY > innerHeight) {
        updownElem.className = 'up';
      }
      break;

  }
};

// var form = document.getElementById("form1");

// form.addEventListener('submit', function(evt) {
//   evt.preventDefault();

//   var formData = {
//     name: document.getElementById("name_phone").value,
//     phone: document.getElementById("tel_phone").value
//   };

//   var request = new XMLHttpRequest();

//   request.addEventListener('load', function() {
//     alert('Ваша заявка успешно отправлена!');
//     form.innerHTML = '<h2>Спасибо за заявку!</h2>';
//   });

//   request.open('POST', '../mail_phone.php', true);
//   request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
//   request.send('name=' + encodeURIComponent(formData.name) + " \n" + "Телефон отправителя: " + encodeURIComponent(formData.phone));
// });







});

















