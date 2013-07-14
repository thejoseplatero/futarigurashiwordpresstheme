
<!doctype html>
<html lang="en">
<head>
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  
  <link rel="icon" href="favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    
    <!-- website meta -->
    <meta name="description" content="futarigurashi"/>
    <meta name= "keywords" content=""/>
    <meta name="author" content="futarigurashi"/>
    
    <!-- open graph meta -->
    <meta property="og:title" content"<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="http://www.futarigurashi.com"/>
    <meta property="og:description" content="..."/>
    <meta property="og:image" content="http://www.futarigurashi.com/assets/ian.jpg"/>
    
    <!-- facebook comments integration -->
    <meta property='fb:app_id' content='297600557043316' />  

    <!-- twitter meta -->
    <meta name="twitter:card" content=".... ">
    <meta name="twitter:site" content="@i">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="futarigurashi">
    <meta name="twitter:description" content="...">
    <meta name="twitter:image" content="http://www.futarigurashi.com/assets/logo.jpg">

    <!-- responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


</head>
  <body <?php body_class(); ?>>
    <div class="wrapper">

      <div class="nav">
       
         <div id="logo">
            <a href="#"> <?php bloginfo('name'); ?></a>
          </div>
       
        <div class="nav-inner">
     

          <?php wp_nav_menu(array('menu' => 'main' )); ?> 
      
           <div class="navIconContainer">
          
             <a href="http://twitter.com/futarigurashi/"> <img src=
             "<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="twitter" title="twitter" /></a>

             <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><img src=
             "<?php bloginfo('template_directory'); ?>/images/rss.svg" alt="RSS Feed" title="RSS Feed" /></a>

                
           
          </div>
        
        </div>
   
      
      </div><!-- navigation -->


      <?php if( is_front_page() ) { ?>
        <div class="header" id="header">


        </div><!-- header -->

        
      <?php } ?>
  
   
  
     </div>





