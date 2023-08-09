<div>

<h2>You may also <i>like</i></h2>

<?php

$post_id = get_field('post_id');
$related_order_by = get_field('related_order_by', 'option');

$related_post_override = get_field('related_post_override');  // Assuming you're using ACF

$args = array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'orderby'        => $related_order_by,
    'post__not_in'   => array($post_id)   // To exclude the current post
);

if (empty($post_id) && $related_post_override == 'yes') {
    $categories = get_the_category($post_id);
    if (!empty($categories)) {
        $category_id = $categories[0]->term_id;
        $args['cat'] = $category_id;
    }
} else {
    $args['post__in'] = $post_id;
}

$relatedPosts = new WP_Query($args);

if ($relatedPosts-> have_posts()) :

    while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
?>

    <div class="container p-2 bg-dark text-white">
        <div class="row">
            <div class="col-lg-9"><h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink();?>'/></><?php the_title(); ?></a></h5></div>
            <div class="col-lg-4"><?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" /></div>
            <div class="col-lg-6 mb-3 mt-4 mt-md-0"><p class="text-white">&ldquo;<?php echo get_the_excerpt();?>&rdquo;</p><br><a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a></div>
        </div>
    </div><br>

    <?php
    endwhile; 
    wp_reset_postdata();

else :

    echo "<p>No related posts found.</p>";

endif;
?>

</div>
