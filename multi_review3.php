<?php
  get_header();
 /* Template Name: Multi Review Post repeater*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?><hr></h1>

            <p class="card-text" style="color: grey; font-size: small;">
                By <?php the_author_meta('display_name', 1); ?> | Posted <?php echo get_the_date();?>
            </p>

            <?php
              $featured_post_label_text = get_field('featured_post_label_text');
              $featured_post_label_alt_text = get_field('featured_post_label_alt_text');
              $featured_post_label_logo = get_field('featured_post_label_logo');
              $featured_post_label = get_field('featured_post');

              if ($featured_post_label == 'yes') {
              echo '<div class="container-fluid text-sm-start">
              <div class="row row-cols-lg-2 row-cols-sm-2 alert alert-success text-sm-start rounded-0 border-0 p-1 m-1">
              <div class="col fs-5 d-flex align-items-center justify-content-end">' . $featured_post_label_text . '</div>
              <div class="col d-flex align-items-center"><img class="img-fluid" src="' . $featured_post_label_logo . '" alt="'. $featured_post_label_alt_text .'" style="max-height: 100px;"></div>
              </div>
              </div>';
              }
              ?>

            				<!-- Social share icons-->
      				<?php $enable_in_article = get_field('on_article','option');?>
			      	<?php if($enable_in_article):?>
					    <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				      <?php else:?>
					    <?php echo '<style>{ display:none;}</style>';?>
				      <?php endif;?>
				      <!-- End Social share icons-->

             
              <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Horizontal Scroller</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Add your custom CSS file if necessary -->
  <!-- <link href="styles.css" rel="stylesheet"> -->

<style>
/* Custom CSS for the horizontal scroller */
.horizontal-scroll {
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS devices */
  padding-bottom: 15px; /* Optional: Add some padding at the bottom to accommodate the scrollbar */
}

/* Optional: Add styles for individual items */
.horizontal-scroll .col-3 {
  /* Customize styles for each item in the scroller */
  /* For example: */
  padding: 10px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-right: 10px;
}

</style>

</head>
<body>
 <div class="container">
    <div class="row horizontal-scroll">
      <!-- Add your scrollable content here -->
      <div class="col-6 col-sm-3">Item 1</div>
      <div class="col-6 col-sm-3">Item 2</div>
      <div class="col-6 col-sm-3">Item 3</div>
      <div class="col-6 col-sm-3">Item 4</div>
      <div class="col-6 col-sm-3">Item 5</div>
      <!-- Add more items as needed -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
  



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
            
             <!-- Article content disclaimer block -->
             <?php get_template_part('includes/section','post-meta');?>
             <!-- End content disclaimer block-->

             <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <?php
            // Get the value of the custom field 'post_id' for the current post
            $post_id = get_field('post_id');

            // Check if the 'post_id' has data (i.e., it is not empty or null)
            if ($post_id) {
            // If there is data, include the template file to display related posts
            // Assuming the template file is 'related_new.php' located in the 'template-parts' directory
            get_template_part('template-parts/related_new');
            }
            ?>

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