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
// Check if the repeater field has rows of data
if (have_rows('jump_points')) {
    // Loop through the rows of data
    while (have_rows('jump_points')) {
        the_row(); // This function sets up the row data
        $jump_image = get_sub_field('jump_Image');
        $jump_anchor = get_sub_field('jump_anchor');
        ?>

        <!-- Output the jump point data -->
        <div class="jump-point">
            <?php if ($jump_image) : ?>
                <img src="<?php echo esc_url($jump_image['url']); ?>" alt="<?php echo esc_attr($jump_image['alt']); ?>">
            <?php endif; ?>
            <?php if ($jump_anchor) : ?>
                <a href="#<?php echo esc_attr($jump_anchor); ?>"><?php echo esc_html($jump_anchor); ?></a>
            <?php endif; ?>
        </div>

        <?php
    }
}
?>

