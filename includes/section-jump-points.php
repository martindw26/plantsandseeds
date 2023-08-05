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

<?php if (have_rows('jump_points')): ?>

<ul>

<?php while (have_rows('jump_points')): the_row(); ?>

    <?php if (get_sub_field('jump-Image') && get_sub_field('jump-anchor')): ?>

        <li>
            <?php
            $image = get_sub_field('jump-Image');
            $anchor = get_sub_field('jump-anchor');
            ?>
            <a href="#<?php echo $anchor; ?>">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </a>
            <a href="#<?php echo $anchor; ?>"><?php echo $anchor; ?></a>
        </li>

    <?php else: ?>

        <li>Jump point data missing or incomplete.</li>

    <?php endif; ?>

<?php endwhile; ?>

</ul>

<?php else: ?>

No jump points found for this post or page.

<?php endif; ?>



