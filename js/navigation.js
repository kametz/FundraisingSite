<script type="text/javascript">
  jQuery(function($){
    $('.menu-btn').click(function(){
      $('.site-nav').toggleClass('open')
    })
  })

  var $basicNav = $('.nav-list').html();
  $('.nav-lg').append($basicNav);
</script>