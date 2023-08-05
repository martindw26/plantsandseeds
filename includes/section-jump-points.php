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

a.row.horizontal-scroll-anchor {
    max-width: 230px;
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
<div class="container">
            <div class="row horizontal-scroll">
<?php if (have_rows('jump_points')): ?>

<?php while (have_rows('jump_points')): the_row(); ?>

<?php $anchor = esc_url(get_sub_field('anchor')); ?>
<?php $image_url = esc_url(get_sub_field('image')); ?>


<a class="row horizontal-scroll-anchor" href="#<?php echo $anchor; ?>">
    <img class="img-fluid" src="<?php echo $image_url; ?>" alt="Image description" style="height:100px; width:200px;">
</a>

    

<?php endwhile; ?>

<?php else: ?>
<!-- If there are no jump points -->
<p>No jump points found.</p>
<?php endif; ?>
</div>
</div>

