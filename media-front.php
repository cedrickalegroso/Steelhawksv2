<?php  /* Template Name: Media Full Width Page */
/*
 * Template Name:  Media Full Width Page
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
     <h1 class="m-h-c-head"> Media  </h1>
     <p class="m-h-c-small"> All fun memories is here! </p>
    </div>
 </div>

 <!-- Events end here -->

 <!-- Album Thumbnails -->

  <section id="upper-councils">

    <div class="council-id">

      <div class="card council" >
    <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/images/thumbnail-first.jpg" alt="Card image cap">
    <div class="card-body">
    <p class="card-text position">   Firs day at central SHS</p>
    <h2 class="card-text"> June 4, 2018 </h2>
    <a href="" target="_blank" class="btn btn-primary socmed-but text-center">  View Album </a>
    </div>
    </div>
    </div>

 <div class="council-id">

   <div class="card council" >
<img class="card-img-top" src="<?php echo get_template_directory_uri();?>/images/thumbnail-acq.jpg" alt="Card image cap">
<div class="card-body">
<p class="card-text position">   Senior high School Acquaintance Party</p>
<h2 class="card-text"> July 19, 2018 </h2>
<a href="" target="_blank" class="btn btn-primary socmed-but text-center">  View Album </a>
</div>
</div>
</div>



</section>





 <!-- Album Thumbnails ends here -->




<?php get_footer(); ?>
