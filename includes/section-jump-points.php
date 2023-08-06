<style>
/* Custom CSS for the horizontal scroller */
.image-container {
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth; /* Optional: Smooth scrolling */
  white-space: nowrap; /* Prevent images from wrapping to new lines */
  padding: 10px; /* Optional: Add some padding around the images */
}

.image-container a {
  display: inline-block; /* Ensure each image/link is on the same line */
  margin-right: 10px; /* Optional: Add some spacing between images */
}

/* Optional: Hide the scrollbar and show it only when scrolling */
.image-container::-webkit-scrollbar {
  width: 8px;
}

.image-container::-webkit-scrollbar-track {
  background: #f1f1f1;
}

.image-container::-webkit-scrollbar-thumb {
  background: #888;
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
<?php if (have_rows('jumps')): ?>

<?php while (have_rows('jumps')): the_row(); ?>

<?php $anchor = esc_url(get_sub_field('jump_anchor')); ?>
<?php $image_url = esc_url(get_sub_field('jump_image')); ?>

<div class="image-container">
<a href="#<?php echo ltrim($anchor, 'http://'); ?>">
<img class="img-fluid" src="<?php echo $image_url; ?>" style="height:100px; width:200px;">
</a>
</div>


<?php endwhile; ?>

<?php else: ?>
<!-- If there are no jump points -->
<p>No jump points found.</p>
<?php endif; ?>
</div>
</div>

