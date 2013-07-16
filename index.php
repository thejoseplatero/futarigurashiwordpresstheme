<?php get_header(); ?>

     <div class="contentWrapper upContentWrapper">
        <?php 
          while(have_posts()):
            the_post();
            //display content from the post

        ?>
 
        <div class="content">
                <div class="post preview">
        
                 <div class="featuredImageContainer">
                    <?php 
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                      } 
                     ?>
                  </div>

                  <div class="categoryLabel"><?php the_category(', '); ?></div>
               

                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                    <span class="timeStamp">
                     <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
                    </span> 
                    

                  </h2>

               
                   
                 
                <?php the_content(); ?>
<!-- 
                  <?php the_excerpt(); ?> -->
           <!--       
                 <a href="<?php the_permalink(); ?>" class="button"> Read More <span class="arrow"></span> </a> -->

                  <div class="iconContainer clearfix">
                 
                    <a href="http://twitter.com/futarigurashi/"> <img src=
                    "<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" title="twitter" /></a>

                    <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src=
                    "<?php bloginfo('template_directory'); ?>/images/rss.svg" alt="RSS Feed" title="RSS Feed" /></a>
 
               
                 </div>
                    
                    
                    <div class="fb-comments" data-href="http://futarigurashi.com" data-width="470" data-num-posts="2"></div> 
   
                       
                    
                 
                </div>
         </div>
        
        <?php
          endwhile;
        ?>
      </div>
<?php get_footer(); ?>  