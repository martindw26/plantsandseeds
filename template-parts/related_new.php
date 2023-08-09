<div>
    <h2>You may also <i>like</i></h2>

    <?php
        // Get the post ID and the related order.
        $post_id = get_field('post_id');
        $related_order_by = get_field('related_order_by', 'option');

        // If post_id exists, set the query arguments.
        if (!empty($post_id)) {
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => $related_order_by,
                'post__in' => $post_id
            );
        } else {
            $related_post_override = get_field('related_post_override','option');

            // If related post override is set to 'yes', adjust the query arguments.
            if ($related_post_override === 'yes') {
                $current_category = get_the_category();
                $category_id = $current_category[0]->cat_ID;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => $related_order_by,
                    'category__in' => array($category_id)
                );
            }
        }

        // Perform the query.
        $relatedPosts = new WP_Query($args);

        // Display related posts if available.
        if ($relatedPosts->have_posts()) :
            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
    ?>

    <div class="container p-2 bg-dark text-white">
        <div class="row">
            <div class="col-lg-8">
                <h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h5>
            </div>
            <div class="col-lg-4">
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
                <img class="img-fluid rounded pb-xs-4" src="<?php echo esc_url($url); ?>" alt="<?php the_title(); ?>" />
            </div>
            <div class="col-lg-6 mb-3 mt-4 mt-md-0">
                <p class="text-white">&ldquo;<?php echo esc_html(get_the_excerpt()); ?>&rdquo;</p>
                <a class="text-white text-decoration-none align-content-end" href="<?php the_permalink(); ?>">Read more →</a>
            </div>
        </div>
    </div>
    <br>

    <?php
            endwhile;
            wp_reset_query();
        endif;
    ?>
</div>
