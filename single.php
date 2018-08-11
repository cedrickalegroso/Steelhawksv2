<?php
/**
 * The template for displaying all single posts.
 *
 * @package magazine-newspaper
 */

get_header(); ?>


<?php
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
 ?>
<div class="page-title">
  <div class="post-steel"  style=" background-image: url(<?php echo $url; ?>) ; background-attachment: fixed; background-repeat: no-repeat; background-position: center; background-size: cover; " >
    <div class="container ">

         <h1 class="post-title"><?php the_title(); ?></h1>


           <div class="info steel-info">
             <ul class="list-inline">
             <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
               <li>
                 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
               <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 60 ); ?>
               <?php if( $avatar ) : ?>
                 <div class="author-image">
                   <?php echo $avatar; ?>
                 </div>
               <?php endif; ?>
                <?php echo esc_html( get_the_author() ); ?></a></li>
               <li><i class="fa fa-clock-o"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo esc_attr(get_the_date()); ?></a></li>
               <li><i class="fa fa-comments-o"></i> <?php comments_popup_link( __( 'zero comment', 'magazine-newspaper' ), __( 'one comment', 'magazine-newspaper' ), __( '% comments', 'magazine-newspaper' ) ); ?></li>
             </ul>
           </div>

         </div>

    </div>
  </div>



<div class="inside-page">
  <div class="container">
    <div class="row">
          <div class="col-sm-8">


  <section class="page-section">

        <div class="detail-content">

        	<?php while ( have_posts() ) : the_post(); ?>
    	      <?php get_template_part( 'template-parts/content', 'single' ); ?>


          <?php endwhile; // End of the loop. ?>


          <?php comments_template(); ?>


                    </div><!-- /.end of deatil-content -->

  </section> <!-- /.end of section -->
  </div>
      <div class="col-sm-4"><?php get_sidebar(); ?>
      </div>
      </div>
  </div>
  </div>
<?php get_footer(); ?>
