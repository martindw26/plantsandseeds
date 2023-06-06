<div class="container mobile_padding">
	<?php $BlockTitle = get_sub_field ( 'block_title' );?>
	<h2 class="post_block_title text-dark display-5 fw-bold"> <i><?php echo $BlockTitle;?></i></h2>
</div>
<div class="container pt-lg-4 pb-lg-4">
	<div class="row">
	<div class="col-lg-6">



<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>

<?php // Right small block posts projects loop begins here
$large_post_featured_post = get_sub_field ( 'large_post_featured_post' );
$block_posts_left = get_sub_field ( 'block_posts_left' );
$tags_exclude = get_sub_field ( 'tags_exclude' );

    $condition = array(
        "post_type"           	=> "post",
        "post_status"         	=> "publish",
        "posts_per_page"      	=> 1,
        'p'                   	=> $large_post_featured_post,
        'tag__not_in' 			=> array( $tags_exclude )
    );

$block1 = new WP_Query ($condition);
if ($block1->have_posts()) :
while ($block1->have_posts()) : $block1->the_post();
?>

<div class="right-card card rounded rounded-0 border border-0 shadow-sm p-lg-3 mb-2 bg-body rounded"><!-- non-fetured block-->
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-1 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
				}elseif ($catarrayrated == 3 || $catarrayrated == 84){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
						<p class="mb-3">&#34;<?php echo excerpt(35);?>&#34;</p>
    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div>

<?php

$show_ad = get_field('landing_page_block_ad'); // Check if the field value is 'yes'

if (have_rows('home_page_blocks')) {
    while (have_rows('home_page_blocks')) {
        the_row();
        if ($show_ad === 'yes') {
            get_template_part('landing_page_ads/homepage_header_top');
        } elseif (get_row_layout() === 'ad_code') {
            $ad_code = get_sub_field('script');
            echo $ad_code;
        }
    }
}
?>




<?php endwhile;  else :  endif; wp_reset_postdata();?>

<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
      
		$small_posts_category = get_sub_field('small_posts_category');
		$block_offset = get_sub_field('block_right_offset');
		$block_post_exclusion = get_sub_field('block_post_right_exclude');
		$block_orderby = get_sub_field('orderby');
		$block_orderby_asc_desc = get_sub_field('block_order_asc_desc');
		
		$condition2 = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => $block_orderby_asc_desc,
			'orderby' => $block_orderby,
			'offset' => $block_offset,
			'posts_per_page' => 3,
			'post__not_in' => array($block_post_exclusion),
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'term_id',
					'terms' => $small_posts_category
				)
			)
		);
	  
	
                                $block2 = new WP_Query ($condition2);
                                if ($block2->have_posts()) :
                                while ($block2->have_posts()) : $block2->the_post();
                                ?>
<div class="non_featured_block_home_page">


<div class="container shadow-sm p-3 mb-2 bg-body rounded" style="height:195px;"><!-- small non-fetured block-->

<div class="row">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  <div class="col"><img class="img-fluid featured rounded rounded-1" src="<?php echo $url ?>" style="height:150px";>
</div>
    <div class="col-6">
    <h4 class="card-title fw-bold"><?php echo get_the_title();?></h4>
	<h5 class="mb-4" style="height:25px";>	
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
                }elseif ($catarrayrated == 3 || $catarrayrated == 84){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
				</h5>
	<a href="<?php the_permalink() ?>" class="btn btn-sm btn-dark text-white m-0">Read More</a></div>
  </div>
</div>
</div>
		<?php endwhile;  else :  endif; wp_reset_postdata();wp_reset_query();?>
				</div>



<div class="col-lg-6">

<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Left block posts projects loop begins here
        $small_posts_category = get_sub_field('small_posts_category');
		$block_offset = get_sub_field('block_right_offset');
		$block_post_exclusion = get_sub_field('block_post_right_exclude');
		$block_orderby = get_sub_field('orderby');
		$block_orderby_asc_desc = get_sub_field('block_order_asc_desc');
		
		$condition2 = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'order' => $block_orderby_asc_desc,
			'orderby' => $block_orderby,
			'offset' => $block_offset,
			'posts_per_page' => 3,
			'post__not_in' => array($block_post_exclusion),
			'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field' => 'term_id',
					'terms' => $small_posts_category
				)
			)
		);

						 $block3 = new WP_Query ($condition3);
						 if ($block3->have_posts()) :
						 while ($block3->have_posts()) : $block3->the_post();
						 ?>
<div class="non_featured_block_home_page_mobile pb-2">
<div class="card rounded rounded-0 border border-0 shadow-sm">
<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
<img class="card-img-top rounded rounded-0 featured" src="<?php echo $url ?>" alt="Card image cap" style=" object-fit: cover; height:300px">  <div class="card-body">
    <h5 class="card-title"><?php echo get_the_title();?></h5>
		<div class="card-text text-muted small">
							Article by: <i><?php echo get_the_author();?></i>,  Posted: <i><?php echo get_the_date();?></i><?php if($read_time):?> | <?php echo $read_time ?><?php endif ?></i>
						</div><br>

    <a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
  </div>
</div>
</div>
		<?php endwhile;  else :  endif; wp_reset_postdata();?>
				
				</div>
				</div>
			</div>
		</div>
	</div>
</div><hr class="d-sm-block d-md-none">
<div class="d-flex justify-content-center">
<?php $BlockMoreURL = get_sub_field( 'block_more_url' );?>
<?php $more_button_text = get_sub_field( 'more_button_text' );?>
<a href="<?php echo $BlockMoreURL;?>" class="btn btn-white text-black border border-2 border-dark pb-sm-2 fs-5 text"><?php echo $more_button_text;?></a>
</div>


