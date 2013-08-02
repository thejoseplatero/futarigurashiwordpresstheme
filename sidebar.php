<div class="sidebar">

	<ul id="menu-posts" class="side-list-box most-popular">
		<h3>Search</h3>
       <?php wp_nav_menu(array('menu' => 'main' )); ?> 
  	 </ul>

  	 	<ul id="menu" class="side-list-box most-popular">
  	 		<h3>Menu</h3>
  	        <?php wp_nav_menu(array('menu' => 'main' )); ?> 
  	   	 </ul>

	<ul id="popular-posts" class="side-list-box most-popular">
		<h3>人気の記事</h3>
       <?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("range=all&order_by=views&stats_views=0&stats_comments=0&limit=5"); ?>
  	 </ul>

  	 <ul id="recent-posts" class="side-list-box">  
  	 	<h3>最新記事</h3>
  	  <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
  	 </ul>
  	 	
      <ul id="category-list" class="side-list-box">
      	<h3>カテゴリー</h3>
       <?php wp_list_categories('title_li=');?>
      </ul>

     
      

      
</div>