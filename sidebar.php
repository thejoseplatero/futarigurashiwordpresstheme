<div class="sidebar">


      <ul id="category-list" class="side-list-box">
      <?php wp_list_categories('title_li=');?>
      </ul>

      <ul id="recent-posts" class="side-list-box">
      
     <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
      </ul>
      

      <ul id="popular-posts" class="side-list-box">
        <?php wpp_get_mostpopular(); ?>

  	  </ul>
</div>