<div>
    <h2>You may also <i>like</i></h2>
    <?php
    $posts_displayed = false;

    if(get_field('show_related_posts', 'option') === 'yes') {
        // Get categories from the current post
        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

            $related_order_by = get_field('related_order_by', 'option');

            $args = array(
                'post_type'     => 'post',
                'post_status'   => 'publish',
                'orderby'       => $related_order_by,
                'category__in'  => $category_ids,
                'post__not_in'  => array($post->ID) // Exclude current post
            );

            $relatedPosts = new WP_Query($args);

            if($relatedPosts->have_posts()) :
                while($relatedPosts->have_posts()) : $relatedPosts->the_post(); 
                    // Display related post content here...

                    $posts_displayed = true;  // Mark that we've displayed some posts
                endwhile;
                wp_reset_query();
            endif;
        }
    } else {
        $post_id = get_field('post_id');
        $related_order_by = get_field('related_order_by', 'option');
        $args = array(
            'post_type' 			=> 'post',
            'post_status' 			=> 'publish',
            'orderby' 				=> $related_order_by,
            'post__in'				=> $post_id
        );
        $relatedPosts = new WP_Query($args);
        if ($relatedPosts->have_posts()) :
            while ($relatedPosts->have_posts()) : $relatedPosts->the_post();
                // Display post content based on post_id criteria here...

                $posts_displayed = true;  // Mark that we've displayed some posts
            endwhile;
            wp_reset_query();
        endif;
    }

    // If no related posts were displayed, show posts from the category
    if(!$posts_displayed) {
        $categoryPosts = new WP_Query(array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'orderby'       => 'date',
            'category__in'  => $category_ids
        ));

        if($categoryPosts->have_posts()) :
            while($categoryPosts->have_posts()) : $categoryPosts->the_post();
                // Display posts from the category...

            endwhile;
            wp_reset_query();
        endif;
    }
    ?>
</div>
