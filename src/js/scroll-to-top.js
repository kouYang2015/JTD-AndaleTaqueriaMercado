// Script from https://www.w3schools.com/howto/howto_js_scroll_to_top.asp
let mybutton = document.getElementById("myBtn");
let navbar = document.getElementById("sticky-nav");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
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
document.addEventListener("DOMContentLoaded", function (e) {
  document.addEventListener("scroll", function (e) {
    let documentHeight = document.body.scrollHeight;
    let currentScroll = window.scrollY + window.innerHeight;
    // When the user is [modifier]px from the bottom, fire the event.
    let modifier = 50;
    if (currentScroll + modifier > documentHeight) {
      navbar.style.top = "8%";
    } else {
      navbar.style.top = "25%";
    }
  });
});
