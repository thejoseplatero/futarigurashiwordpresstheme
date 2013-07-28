 <?php   /* Template Name: About Template */ ?>

 <?php get_header(); ?>
   <div class="header aboutHeader">
     
   </div>
       <div class="contentWrapper upContentWrapper">
          <div class="content single-post clearfix">
           
           <?php while(have_posts()): the_post();
            //display content from the post
        ?>

            <div class="post">
              <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>


        <?php endwhile; ?>
       </div>
      </div>
       


 <?php get_footer(); ?>  