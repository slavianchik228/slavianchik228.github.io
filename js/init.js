(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space


document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.scrollspy');
  var instances = M.ScrollSpy.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('.scrollspy').scrollSpy();
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.materialboxed');
  var instances = M.Materialbox.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('.materialboxed').materialbox();
});
      
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, options);
});

// Or with jQuery

$('.dropdown-trigger').dropdown();




document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.tooltipped');
  var instances = M.Tooltip.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('.tooltipped').tooltip();
});



document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('.collapsible').collapsible();
});


document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, options);
});

// Or with jQuery

$(document).ready(function(){
  $('select').formSelect();
});



document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.autocomplete');
  var instances = M.Autocomplete.init(elems, options);
});


// Or with jQuery

$(document).ready(function(){
  $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
  });
});
      


$(document).ready(function() {
  $('input#input_text, textarea#textarea2').characterCounter();
});