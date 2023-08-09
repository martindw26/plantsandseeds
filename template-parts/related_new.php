<div>
    <h2>You may also <i>like</i></h2>

    <?php
    $post_id = get_field('post_id');
    $category_id = get_field('category_id');
    $related_order_by = get_field('related_order_by', 'option');

    // Determine query args based on custom fields
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
    );

    if ($post_id) {
        $args['post__in'] = array($post_id);
        $args['orderby'] = $related_order_by;
    } elseif ($category_id) {
        $args['cat'] = $category_id;
        $args['orderby'] = $related_order_by;
    } else {
        $args['orderby'] = 'rand';
    }

    $relatedPosts = new WP_Query($args);

    if ($relatedPosts->have_posts()) :
        while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
    ?>

    <div class="container p-2 bg-dark text-white">
        <div class="row">
            <div class="col-lg-9">
                <h5><a class="text-decoration-none link-dark text-white" href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h5>
            </div>
            <div class="col-lg-4">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <img class="img-fluid rounded pb-xs-4" src="<?php echo esc_url($url); ?>" />
            </div>
            <div class="col-lg-6 mb-3 mt-4 mt-md-0">
                <p class="text-white">&ldquo;<?php echo get_the_excerpt(); ?>&rdquo;</p>
                <a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a>
            </div>
        </div>
    </div><br>

    <?php
        endwhile; wp_reset_postdata();
    else :
        // You can put a message here if no related posts were found.
    endif;
    ?>
</div>
