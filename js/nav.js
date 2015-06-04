$( document ).ready(function() {
  //toggle side nav
  $('.menu-btn').click(function(){
    $('.side-nav').toggleClass('open');
  });  

  $('.usernav').hover(function(){
    $('.usernav_links').toggleClass('show_usernav');
  });
  $('.usernav_links').hover(function(){
    $('.usernav_links').toggleClass('show_usernav');
  });
});