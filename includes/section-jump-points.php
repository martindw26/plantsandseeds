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
// Assuming you have the post ID or page ID
$post_id = get_the_ID();

// Get the 'jump-points' repeater field value
$jump_points = get_field('jump_points', $post_id);

// Check if there are any jump points
if ($jump_points) {
    echo '<ul>';

    // Loop through the jump points
    foreach ($jump_points as $jump_point) {
        echo '<li>';
        // Get the image URL and anchor text for each jump point
        $image = $jump_point['jump-Image'];
        $anchor = $jump_point['jump-anchor'];

        // Display the image and anchor
        echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
        echo '<a href="#' . $anchor . '">' . $anchor . '</a>';

        echo '</li>';
    }

    echo '</ul>';
}
?>
