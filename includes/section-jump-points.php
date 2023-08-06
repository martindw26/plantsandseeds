<style>
/* Custom CSS for the horizontal scroller */
.horizontal-scroll {
  flex-wrap: nowrap;
  overflow-x: auto;
  white-space: nowrap;
  -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS devices */
  padding: 10px; /* Optional: Add some padding at the bottom to accommodate the scrollbar */
}

/* scrollbar css*/

/* For WebKit (Safari, Google Chrome, etc.) */
::-webkit-scrollbar {
  width: 10px;
  
}

::-webkit-scrollbar-track {
  background-color: #f1f1f1;
  border-radius: 5px;
}

::-webkit-scrollbar-thumb {
  background-color: blue;
  border-radius: 5px;
}

/* For Firefox */
scrollbar-color: blue #f1f1f1;

/* For Internet Explorer and Edge */
-ms-overflow-style: none;



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
</div><>


