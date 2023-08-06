<style>
div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
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

<div class="scroll-container">
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

