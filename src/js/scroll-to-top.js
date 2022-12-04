// Script from https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
let mybutton = document.getElementById("myBtn");
let navbar = document.getElementById("sticky-nav");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop <= 6900) {
    navbar.style.zIndex = "1";
  } else {
    navbar.style.zIndex = "-1";
  }
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
