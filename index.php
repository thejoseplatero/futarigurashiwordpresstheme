<?php get_header(); ?>

     <div class="contentWrapper upContentWrapper">


  <div class="top-list-box-wrapper ">

      <ul id="category-list" class="top-list-box">
      <?php wp_list_categories('title_li=&hierarchical=0&depth=1');?>
      </ul>

      <ul id="recent-posts" class="top-list-box">
      
     <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
      </ul>
      

      <ul id="popular-posts" class="top-list-box">
        <?php wpp_get_mostpopular(); ?>
  
      </ul>


        
     
  </div> 
          
 


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

             <?php the_content('More'); ?>
                   
           
                                      
                 
                </div>
         </div>
        
        <?php
          endwhile;
        ?>
      

      </div>
       <?php get_sidebar() ?>
<?php get_footer(); ?>  