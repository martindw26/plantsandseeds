<div>
    <h2>You may also <i>like</i></h2>
    <?php
    $posts_displayed = false;
    $categories = get_the_category($post->ID);
    $category_ids = $categories ? wp_list_pluck($categories, 'term_id') : [];

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'post__not_in' => array($post->ID)  // Exclude current post
    );

    // Define a function to display a post
    function display_post() {
        ?>
        <div class="container p-2 bg-dark text-white">
            <div class="row">
                <div class="col-lg-9">
                    <h5><a class="text-decoration-none link-dark text-white" href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h5>
                </div>
                <div class="col-lg-4">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <img class="img-fluid rounded pb-xs-4" src="<?php echo $url ?>" />
                </div>
                <div class="col-lg-6 mb-3 mt-4 mt-md-0">
                    <p class="text-white">&ldquo;<?php echo excerpt(100); ?>&rdquo;</p>
                    <a class="text-white text-decoration-none align-content-end" href="<?php the_permalink() ?>">Read more →</a>
                </div>
            </div>
        </div>
        <br>
        <?php
    }

    if (get_field('related_post_override', 'option') === 'yes') {
        $related_order_by = get_field('related_order_by', 'option');

        $args['orderby'] = $related_order_by;
        $args['category__in'] = $category_ids;

        $relatedPosts = new WP_Query($args);

        if ($relatedPosts->have_posts()) {
            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
                display_post();
                $posts_displayed = true;
            endwhile;
            wp_reset_postdata();
        }
    } else {
        $post_id = get_field('post_id');
        $related_order_by = get_field('related_order_by', 'option');

        $args['orderby'] = $related_order_by;
        $args['post__in'] = array($post_id);

        $relatedPosts = new WP_Query($args);

        if ($relatedPosts->have_posts()) {
            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
                display_post();
                $posts_displayed = true;
            endwhile;
            wp_reset_postdata();
        }
    }

    // Fallback: If no posts were displayed, show posts from the current post categories
    if (!$posts_displayed) {
        $categoryPosts = new WP_Query(array_merge($args, [
            'orderby' => 'date',
            'category__in' => $category_ids
        ]));

        if ($categoryPosts->have_posts()) {
            while ($categoryPosts->have_posts()) : $categoryPosts->the_post();
                display_post();
            endwhile;
            wp_reset_postdata();
        }
    }
    ?>
</div>
