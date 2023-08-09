<div>
    <h2>You may also <i>like</i></h2>
    <?php
    $posts_displayed = false;

    // Fetching the categories of the current post for later use
    $categories = get_the_category($post->ID);
    $category_ids = $categories ? wp_list_pluck($categories, 'term_id') : [];

    if(get_field('related_post_override', 'option') === 'yes') {
        $related_order_by = get_field('related_order_by', 'option');

        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'orderby'       => $related_order_by,
            'category__in'  => $category_ids,
            'post__not_in'  => array($post->ID)  // Exclude current post
        );

        $relatedPosts = new WP_Query($args);

        if($relatedPosts->have_posts()) :
            while($relatedPosts->have_posts()) : $relatedPosts->the_post(); 
                // Display related post content here...
                $posts_displayed = true;
            endwhile;
            wp_reset_postdata();
        endif;

        // If no related posts were displayed, show posts from the current post categories
        if(!$posts_displayed) {
            $categoryPosts = new WP_Query(array(
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'orderby'       => 'date',
                'category__in'  => $category_ids,
                'post__not_in'  => array($post->ID)
            ));

            if($categoryPosts->have_posts()) :
                while($categoryPosts->have_posts()) : $categoryPosts->the_post();
                    // Display posts from the current post categories...
                endwhile;
                wp_reset_postdata();
            endif;
        }

    } else {
        $post_id = get_field('post_id');
        $related_order_by = get_field('related_order_by', 'option');

        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'orderby'       => $related_order_by,
            'post__in'      => array($post_id)
        );

        $relatedPosts = new WP_Query($args);

        if($relatedPosts->have_posts()) :
            while($relatedPosts->have_posts()) : $relatedPosts->the_post();
                // Display post content based on post_id criteria here...
                $posts_displayed = true;
            endwhile;
            wp_reset_postdata();
        endif;
    }
    ?>
</div>
