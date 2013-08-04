<?php 
  register_nav_menus();
  register_sidebar();
  add_theme_support( 'post-thumbnails' ); 






//more link remove jump to last position
  function remove_more_jump_link($link) { 
    $offset = strpos($link, '#more-');
    if ($offset) {
      $end = strpos($link, '"',$offset);
    }
    if ($end) {
      $link = substr_replace($link, '', $offset, $end-$offset);
    }
    return $link;
  }
  add_filter('the_content_more_link', 'remove_more_jump_link');






 ?>