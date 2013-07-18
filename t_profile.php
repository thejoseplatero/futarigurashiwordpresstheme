 <?php   /* Template Name: Profile Template */ ?>

 <?php get_header(); ?>
   <div class="header profileHeader">
     
   </div>
       <div class="contentWrapper upContentWrapper">
           <?php while(have_posts()): the_post();
            //display content from the post
        ?>
            <div class="post">
              <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>


        <?php endwhile; ?>
       </div>
           
       


 <?php get_footer(); ?>  