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
.horizontal-scroll{
  /* Set the height and overflow properties to create a scrolling area */
  height: 300px; /* Adjust the height as needed */
  overflow: auto; /* This will show a scrollbar when content overflows */

  /* For smooth scrolling on iOS */
  -webkit-overflow-scrolling: touch;
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


