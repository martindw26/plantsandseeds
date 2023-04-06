<?php
  get_header();
 /* Template Name: Multi Review Post repeater*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <<h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?><hr></h1>

              <?php
            $featured_post_label_text = get_field('featured_post_label_text');
            $featured_post_label = get_field('featured_post');
            if ($featured_post_label == 'yes') {
            echo '<div class=" col-lg-4 col-sm-3 pt-2">
              <div class="alert alert-success text-center p-1">
                <strong>' . $featured_post_label_text . '</strong>
              </div>
            </div>';
            }
            ?>

             <!-- header image block-->
                                                
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

             <!-- SEO text-->

             <div class=" bg-secondary text-light p-4 mb-4 border-dark lead">
             <?php the_field('seo_paragraph');?> 
             </div>

             <!-- Article content blocks -->
             <?php get_template_part('includes/section','multiproductjump');?>
             <!-- End Article content blocks-->


       
             <!-- Article content blocks -->
             <?php get_template_part('includes/section','multiproduct3');?>
             <!-- End Article content blocks-->
            

             <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <!-- Start of posts related posts-->
             <?php get_template_part( 'template-parts/related_new' );?>
             <!-- End of posts related posts-->

          </div>

                        <div class="sidebar col-lg-4 col-md-4">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts related posts-->      
                        </div>




      </div>               

</div>

    

<?php get_footer(); ?>