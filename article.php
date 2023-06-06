<?php
  get_header();
 /* Template Name: Article Post*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">
	
          <div class="col-lg-8 p-lg-2 bg-white text-dark">

          <h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?><hr></h1>


            <!-- Social share icons-->
            <?php $enable_in_article = get_field('on_article','option');?>
            <?php if($enable_in_article):?>
              <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
            <?php else:?>
              <?php echo '<style>{ display:none;}</style>';?>
            <?php endif;?>
            <!-- End Social share icons-->


             <!-- header image block-->
                                                
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

              <?php
              $featured_post_label_text = get_field('featured_post_label_text');
              $featured_post_label_alt_text = get_field('featured_post_label_alt_text');
              $featured_post_label_logo = get_field('featured_post_label_logo');
              $featured_post_label = get_field('featured_post');

              if ($featured_post_label == 'yes') {
                echo '<div class=\'container-fluid text-sm-start\'>
                <div class=\'row row-cols-lg-2 row-cols-sm-2 alert alert-success text-sm-start rounded-0 border-0 p-1 m-1\'>
                  <div class=\'col fs-5 d-flex align-items-center justify-content-end\'>
                    <?php echo $featured_post_label_text; ?>
                  </div>
                  <div class=\'col d-flex align-items-center\'>
                    <img class=\'img-fluid\' src=\'<?php echo $featured_post_label_logo; ?>\' alt=\'<?php echo $featured_post_label_alt_text; ?>\' style=\'max-height: 100px;\'>
                  </div>
                </div>
              </div>';
  
              }
              ?>



             <!-- Article content blocks -->
             <?php get_template_part('includes/section','article');?>
             <!-- End Article content blocks-->

            <!-- Article content disclaimer block -->
            <?php get_template_part('includes/section','disclaimer');?>
            <!-- End content disclaimer block-->

              <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <!-- Social share icons-->
             <?php $enable_in_article = get_field('on_article','option');?>
             <?php if($enable_in_article):?>
             <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
             <?php else:?>
             <?php echo '<style>{ display:none;}</style>';?>
             <?php endif;?>
              <hr>
             <!-- End Social share icons-->

              	
             <!-- Start of posts related posts-->
             <?php get_template_part( 'template-parts/related_new' );?>
             <!-- End of posts related posts-->

          </div>

                        <div class="sidebar col-lg-4 col-md-4">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts sidebar related posts-->                         
	     </div>




      </div>               

</div>






<?php get_footer(); ?>