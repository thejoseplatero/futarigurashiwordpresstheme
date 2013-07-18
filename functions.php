<?php 
  register_nav_menus();
  register_sidebar();
  add_theme_support( 'post-thumbnails' ); 




 class Walker_Nav_Pointers extends Walker_Nav_Menu
 {
     function start_lvl( &$output, $depth = 0, $args = array() )
     {
         $indent = str_repeat("\t", $depth);
         $output .= "\n$indent<ul class=\"sub-menu\">\n";
         $output .= "\n<div class=\"pointer\">\n";
     }
     function end_lvl( &$output, $depth = 0, $args = array() )
     {
         $indent = str_repeat("\t", $depth);
         $output .= "$indent</ul>\n".($depth ? "$indent</div>\n" : "");
     }
 } 


 ?>