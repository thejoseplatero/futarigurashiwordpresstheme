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
    <meta name= "keywords" content="futarigurashi"/>
    <meta name="author" content="futarigurashi"/>
    
    <!-- open graph meta -->
    <meta property="og:title" content"<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="http://www.futarigurashi.com"/>
    <meta property="og:description" content="futarigurashi"/>
    <meta property="og:image" content="http://www.futarigurashi.com/..."/>
    


    <!-- twitter meta -->
    <meta name="twitter:card" content="futarigurashi">
    <meta name="twitter:site" content="@futarigurashi">
    <meta name="twitter:creator" content="@apuriko">
    <meta name="twitter:title" content="futarigurashi">
    <meta name="twitter:description" content="futarigurashi">
    <meta name="twitter:image" content="http://www.futarigurashi.com/assets/logo.jpg">

    <!-- responsive  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <?php wp_head() ?>

</head>
  <body <?php body_class(); ?>>
    <?php include_once("analyticstracking.php") ?>
<!-- facebook comments integration -->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=587695514607951";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <div class="wrapper">

      <div class="nav">
  
     
          
          <div id="logo">
             <a href='<?php get_site_url(); ?>'> <?php bloginfo('name'); ?></a>
               
          </div>
    
      </div><!-- main navigation -->

       
     

   
   <?php if( is_front_page() ) { ?>
     <div class="header mainHeader" id="header">
     
     


     </div><!-- header -->

     
   <?php } ?> <!-- closing php }  -->
   

        

   
   
  </div>
