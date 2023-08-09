<div>
<h2>You may also <i>like</i></h2>
<?php

$post_id = get_field('post_id');
$related_order_by = get_field('related_order_by', 'option');
$related_post_override = get_field('related_post_override', 'option');

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => $related_order_by,
    'post__in' => $post_id
);

$relatedPosts = new WP_Query($args);

if ($relatedPosts->have_posts()) :

    while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
        ?>
           <div class="container p-2 bg-dark text-white">
  			<div class="row">
	    		<div class="col-lg-9"><h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
	    		<div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
	    		<div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-white">&ldquo;<?php echo excerpt(100);?>&rdquo;</p><br><a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
  			</div>
		</div><br>

        <?php
    endwhile;
    wp_reset_query();

else:

    // This is the new addition for when there are no related posts and the override is set to 'yes'
    if ($related_post_override == 'yes') :
        $current_post_categories = get_the_category(get_the_ID());

        if ($current_post_categories) :
            $category_ids = wp_list_pluck($current_post_categories, 'term_id');

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => $related_order_by,
                'category__in' => $category_ids,
                'post__not_in' => array(get_the_ID()), // Exclude current post
                'posts_per_page' => 5 // Limit number of posts. Adjust as needed.
            );

            $relatedByCategory = new WP_Query($args);
            if ($relatedByCategory->have_posts()) :
                while ($relatedByCategory->have_posts()) : $relatedByCategory->the_post();
                    ?>
                       <div class="container p-2 bg-dark text-white">
  			<div class="row">
	    		<div class="col-lg-9"><h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
	    		<div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
	    		<div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-white">&ldquo;<?php echo excerpt(100);?>&rdquo;</p><br><a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
  			</div>
		</div><br>

                    <?php
                endwhile;
                wp_reset_query();
            endif;
        endif;
    endif;

endif;
?>

</div>
