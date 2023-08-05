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

<!--
            <div class="container">
            <div class="row horizontal-scroll">

                <div class="col-6 col-sm-3">Item 1</div>
                <div class="col-6 col-sm-3">Item 2</div>
                <div class="col-6 col-sm-3">Item 3</div>
                <div class="col-6 col-sm-3">Item 4</div>
                <div class="col-6 col-sm-3">Item 5</div>

            </div>
            </div>
-->

<?php


$post_id = get_the_ID();
$jump_points = get_field('jump_points');

if ($jump_points) {
    echo '<ul>';

    foreach ($jump_points as $jump_point) {
        if (get_sub_field('jump-Image') && get_sub_field('jump-anchor')) {
            echo '<li>';
            $image = get_sub_field('jump-Image');
            $anchor = get_sub_field('jump-anchor');

            echo "<pre>";
            echo "Image: ";
            var_dump($image);
            
            echo "Anchor: ";
            var_dump($anchor);
            echo "</pre>";
            

            echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';

            echo '<a href="#' . $anchor . '">' . $anchor . '</a>';

            echo '</li>';
        } else {
            echo '<li>Jump point data missing or incomplete.</li>';
        }
    }

    echo '</ul>';
} else {
    echo 'No jump points found for this post or page.';
}





?>