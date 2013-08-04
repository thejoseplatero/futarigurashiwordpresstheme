  <?php get_header(); ?>
  <div class="header mainHeader" id="header">
  </div><!-- header -->
    

  <div class="contentWrapper upContentWrapper">
    <?php get_sidebar() ?>   
     <div class="content clearfix">
       <?php 
          while(have_posts()):
            the_post();
            //display content from the post
        ?>
          <div class="post preview">
              <div class="featuredImageContainer">
                <?php 
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                  } 
                 ?>
              </div>

              <div class="categoryLabel">
                <?php the_category(', '); ?>
              </div>
                 

              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>

              <div class="timeStamp">
                <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> 
               </div> 


              <?php the_content('続きを読む'); ?>
                     
        </div>
          
          <?php
            endwhile;
          ?>
      

        </div> 
      </div>



<?php get_footer(); ?>
