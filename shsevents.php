<?php  /* Template Name: Events Full Width Page */
/*
 * Template Name: Events Full Width Page
 *
 * @package WordPress
 * @subpackage Magazine_Newspaper_Wp_Bootstrap_Navwalker
 * @author Dancedrick Alegroso
 */


 get_header();  ?>

 <!-- Events 2nd heading Area -->

 <!-- Councils Area -->
 <?php
    $h = get_template_directory_uri();


  ?>
  <!-- background-image: url(../images/background.jpg); -->



 <div class="main-head-council" style=" background-image: url(<?php echo $h; ?>/images/background.jpg); background-attachment: fixed;">
    <div class="inner-m-h-c">
      <img  id="logo-plain" src="<?php echo $h; ?>/images/logo-plain.png"/>
     <h1 class="m-h-c-head"> Student Council </h1>
     <p class="m-h-c-small"> Meet the students Councils of A.Y 2018 - 2019 </p>
    </div>
 </div>
 
 <!-- Events end here -->




<?php get_footer(); ?>
