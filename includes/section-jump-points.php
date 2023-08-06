<style>
/* Custom CSS for the horizontal scroller */
/* General styles for horizontal scrolling container */
.horizontal-scroll {
  flex-wrap: nowrap;
  overflow-x: auto;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS devices */
  padding: 10px; /* Optional: Add some padding at the bottom to accommodate the scrollbar */
}

/* Scrollbar styles */

/* For WebKit (Safari, Google Chrome, etc.) */
/* Add this media query to show the scrollbar only on non-touch devices */
@media (hover: hover) and (pointer: fine) {
  .horizontal-scroll::-webkit-scrollbar {
    width: 10px;
  }

  .horizontal-scroll::-webkit-scrollbar-track {
    background-color: #f1f1f1;
    border-radius: 5px;
  }

  .horizontal-scroll::-webkit-scrollbar-thumb {
    background-color: blue;
    border-radius: 5px;
  }
}

/* For Firefox */
/* Note: Firefox supports scrollbar-color directly without the need for media queries */
.horizontal-scroll {
  scrollbar-color: blue #f1f1f1;
}

/* For Internet Explorer and Edge */
/* Note: This only hides the scrollbar in IE and Edge */
.horizontal-scroll {
  -ms-overflow-style: none;
}




</style>

<?php $jump_point_label = get_field('jump_point_label', 'option'); ?>
<h5><?php echo $jump_point_label; ?></h5>


<div class="horizontal-scroll">
<?php if (have_rows('jumps')): ?>
<?php while (have_rows('jumps')): the_row(); ?>
<?php $anchor = esc_url(get_sub_field('jump_anchor')); ?>
<?php $image_url = esc_url(get_sub_field('jump_image')); ?>

<a class="text-decoration-none" href="#<?php echo ltrim($anchor, 'http://'); ?>">
<img class="img-fluid" src="<?php echo $image_url; ?>" style="height:100px; width:200px;">
</a>

<?php endwhile; ?>
<?php else: ?>
<p>No jump points found.</p>
<?php endif; ?>
</div><br>


