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
<div class="container">
            <div class="row horizontal-scroll">
<?php if (have_rows('jump_points')): ?>

<?php while (have_rows('jump_points')): the_row(); ?>

<!-- Container for the image and arrow -->
<div style="position: relative; display: inline-block;">
  <!-- Image with PHP source -->
  <img class="img-fluid" src="<?php the_sub_field('image'); ?>" style="height: 100px; width: 200px;" />

  <!-- Down arrow using CSS -->
  <div style="position: absolute; bottom: -20px; left: 50%; transform: translateX(-50%);">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 21l-12-18h24z"/></svg>
  </div>
</div>


    

<?php endwhile; ?>

<?php else: ?>
<!-- If there are no jump points -->
<p>No jump points found.</p>
<?php endif; ?>
</div>
</div>

