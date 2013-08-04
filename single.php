<?php get_header(); ?>
<div class="header mainHeader" id="header">




</div><!-- header -->

<div class="contentWrapper upContentWrapper">
  <?php get_sidebar() ?>  
  <div class="content clearfix">
    <?php 
    while(have_posts()): the_post(); //display content from the post
    ?>
  <div class="post preview">
    <div class="categoryLabel"><?php the_category(', '); ?></div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <div class="timeStamp">
      <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
    </div> 
    
    <?php the_content(); ?>

    <div class="iconContainer clearfix">

      <a href="http://twitter.com/futarigurashi/"> <img src=
      "<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" title="twitter" /></a>

      <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src=
        "<?php bloginfo('template_directory'); ?>/images/rss.svg" alt="RSS Feed" title="RSS Feed" /> </a>
    
    </div>



    <div class="fb-comments" data-href="http://futarigurashi.com" data-width="640" data-num-posts="2"></div> 
  </div>
    <?php
    endwhile;
    ?>


  </div>  
</div>   


<?php get_footer(); ?>

