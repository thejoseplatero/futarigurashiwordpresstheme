  <div class="footer">
<a href="#" class="go-top">Top</a>
          <div class="flag">
           <img src=
           "<?php bloginfo('template_directory'); ?>/images/flagred.svg" alt="canadian flag" title="canadian flag" />
          </div>
		<div class="jose">
		
		</div>

  </div>

</div> <!-- wrapper -->

  
<!-- top button -->
  

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script>
  $(document).ready(function() {
    //show or hide sticky footer button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
      } else {
        $('.go-top').fadeOut(200);
      }
      
    });
   //animate scroll to top
   $('.go-top').click(function(event){
    event.preventDefault();

    $('html, body').animate({scrollTop: 0}, 300);
   })
  });
    
  </script>

 <?php wp_footer(); ?>  <!-- hook -->

</body>
</html>