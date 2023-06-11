<?php
  get_header();
/*Template name: About-Us*/
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?><hr></h1>

				<!-- Social share icons-->
				<?php $enable_in_article = get_field('on_article','option');?>
				<?php if($enable_in_article):?>
					<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->

          <br>
   
          <div class="container-fluid">
          <?php the_field('about_us_text');?>
          </div>


          <?php
$user_id = get_current_user_id();
$avatar_url = get_avatar_url($user_id); // Get the user's avatar URL
$biographical_info = get_user_meta($user_id, 'description', true); // Get the user's biographical info

?>

<div class="card mb-3" style="">
  <div class="row g-0">
    <div class="col-md=3">
      <img src="<?php echo $avatar_url; ?>" class="img-fluid rounded-start" alt="Profile Picture">
    </div>
    <div class="col-md">
      <div class="card-body">
        <h5 class="card-title"><?php the_author_meta('display_name', $user_id); ?></h5>
        <p class="card-text"><?php echo $biographical_info; ?></p>
      </div>
    </div>
  </div>
</div>


          </div>

                        <div class="sidebar col-lg-4 col-md-4">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/generic_sidebar' );?>
		   <!-- End of posts sidebar related posts-->                        

	</div>




      </div>               

</div>




<?php get_footer(); ?>