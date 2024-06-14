
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css"/>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"> </script>
</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educa.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="<?php bloginfo("template_directory") ;?>/images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Muhammad Usman</h3>
         <p class="role">Studentt</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.html" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <?php $Logoimg=get_header_image(); ?>
     <a href="<?php site_url(); ?>"> <img src="<?php echo$Logoimg;?>" class="image" alt="">
     </a>
     
      <h3 class="name">Muhammad Usman</h3>
      <p class="role">Student</p>
      <a href="<?php echo get_template_directory_uri(); ?>/component/profile.php" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <!-- <a href="<?php echo site_url(); ?>"><i class="fas fa-home"></i><span>home</span></a>
      <a href="<?php echo the_title(); ?>"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a> -->
     
     <?php wp_nav_menu(array(

'theme_location'=>'primary-menu' ,'menu_class'=>'navbar'
)

);?>
   </nav>

</div>