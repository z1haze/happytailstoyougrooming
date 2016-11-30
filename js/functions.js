// remap jQuery to $
(function($){})(window.jQuery);

$(document).ready(function (){

/*-----------------------------------------------------------------------------------*/
/*  CONTACT FORM
/*-----------------------------------------------------------------------------------*/

/*
  START STRICT MODE
*/
  'use strict';

/*-----------------------------------------------------------------------------------*/
/*  FOOTER COPYRIGHT YEAR
/*-----------------------------------------------------------------------------------*/
  var currentYear = (new Date).getFullYear();
  $('span.date').text(currentYear);

/*-----------------------------------------------------------------------------------*/
/*  NAV
/*-----------------------------------------------------------------------------------*/
  /* The target nav */
  var responsiveNav = document.getElementById('js-responsive-nav');

  /* Insert <a> element for toggle button inside the <nav> element */
  var toggleBtn = document.createElement('a');
  toggleBtn.setAttribute('href', '#');
  toggleBtn.setAttribute('class', 'responsive-nav__toggle');
  responsiveNav.insertBefore(toggleBtn, responsiveNav.firstChild);

  /* Has Class Function */
  function hasClass(e,t){return(new RegExp(' '+t+' ')).test(' '+e.className+' ')}

  /* Toggle Class Function */
  function toggleClass(e,t){var n=' '+e.className.replace(/[\t\r\n]/g,' ')+' ';if(hasClass(e,t)){while(n.indexOf(' '+t+' ')>=0){n=n.replace(' '+t+' ',' ')}e.className=n.replace(/^\s+|\s+$/g,'')}else{e.className+=' '+t}}

  /* Toggle 'responsive-nav--open' when button is clicked */
  toggleBtn.onclick = function() {
      toggleClass(this.parentNode, 'responsive-nav--open');
  }

  /* Add a class of 'js' to the HTML element */
  var root = document.documentElement;
  root.className = root.className + ' js';



  $("a.responsive-nav__toggle").click(function(e) {
     e.preventDefault();
  });

  $('input, textarea').placeholder();


});