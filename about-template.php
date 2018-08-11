<?php  /* Template Name: About template full width */
/*
 * Template Name: About template full width
 *
 * @package WordPress
 * @subpackage Magazine_Newspaper_Wp_Bootstrap_Navwalker
 * @author Dancedrick Alegroso
 */


 get_header();  ?>

<!-- Councils Area -->
<?php
   $h = get_template_directory_uri();


 ?>
 <!-- background-image: url(../images/background.jpg); -->



<div class="main-head-council" style=" background-image: url(<?php echo $h; ?>/images/background.jpg); background-attachment: fixed;">
   <div class="inner-m-h-c">
     <img  id="logo-plain" src="<?php echo $h; ?>/images/logo-plain.png"/>
    <h1 class="m-h-c-head"> About </h1>
    <p class="m-h-c-small"> About the Steelhawks website </p>
   </div>
</div>

<Div class="container">
  <div class="conten-about">



    </div>
     <div class="about-lisence">
       <h1> Developer </h1>
       <hr>
       <p> This website is Developed and maintained by Dancedrick Alegroso <br />
         You can view the source code and website documentation at <a href="" > Github. </a></p>

     </div>

</div>



<?php
get_footer();
 ?>
