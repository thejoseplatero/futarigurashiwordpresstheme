<div class="sidebar">
<!-- 
  <ul id="search" class="side-list-box search">
    <h3>サイト内検索</h3>
   
  </ul> -->

  <ul id="subscribe" class="side-list-box menu">
    <h3>このブログを購読する</h3>
      <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"> RSS </a>
  </ul>

  <ul id="profile" class="side-list-box menu">
    <?php wp_nav_menu(array('menu' => 'main' )); ?> 
  </ul>


  <ul id="recent-posts" class="side-list-box">  
    <h3>最新記事</h3>
    <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
  </ul>

  <ul id="category-list" class="side-list-box cat-list">
    <h3>カテゴリー</h3>
    <?php wp_list_categories('title_li='); ?> 
  </ul>

</div>