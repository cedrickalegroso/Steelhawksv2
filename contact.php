<?php  /* Template Name: Contact Full Width Page */
/*
 * Template Name:Contact Full Width Page
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
     <h1 class="m-h-c-head"> Contact </h1>
     <p class="m-h-c-small"> Want to Ask something? shoot us a message!  </p>
    </div>
 </div>


 <section id="contact">
 			<div class="section-content">
 				<h1 class="section-header contacthead">Get in touch.</span></h1>
 			</div>
      <hr>
 			<div class="contact-section">
 			<div class="container">
 				<form method="post" action="<?php echo get_template_directory_uri(); ?>/email.php">
 					<div class="col-md-6 form-line">
 			  			<div class="form-group">
 			  				<label for="exampleInputUsername">Your name</label>
 					    	<input type="text" class="form-control" id="" placeholder=" Enter Name">
 				  		</div>
 				  		<div class="form-group">
 					    	<label for="exampleInputEmail">Email Address</label>
 					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
 					  	</div>
 					  	<div class="form-group">
 					    	<label for="telephone">Mobile No.</label>
 					    	<input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
 			  			</div>
 			  		</div>
 			  		<div class="col-md-6">
 			  			<div class="form-group">
 			  				<label for ="description"> Message</label>
 			  			 	<textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
 			  			</div>
 			  			<div>

 			  				<button  class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
 			  			</div>

 					</div>
 				</form>
 			</div>
 		</section>















 <?php get_footer(); ?>
