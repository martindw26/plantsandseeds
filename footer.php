<?php
/* footer */
?>

<footer>

<?php
$footer_background_color = get_field('footer_background_color', 'option');
$footer_text_color = get_field('footer_text_color', 'option'); // Add this line to get the text color

if ($footer_background_color || $footer_text_color) {
  $style = 'style="';
  // Check if background color is set, and if so, append it to the style
  if ($footer_background_color) {
    $style .= 'background-color: ' . esc_attr($footer_background_color) . ';';
  }
  // Check if text color is set, and if so, append it to the style
  if ($footer_text_color) {
    $style .= 'color: ' . esc_attr($footer_text_color) . ';';
  }
  $style .= '"';
  echo '<div class="container-fluid mt-3 text-decoration-none" ' . $style . '>';
} else {
  echo '<div class="container-fluid mt-3 text-decoration-none">';
} 
?>

  <div class="row">
    <div class="col-lg col-sm-4 p-3 text-decoration-none">
    	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_one',
					'menu_class' => 'primary-menu-footer'
				)	
			);
		?>
    </div>
    <div class="col-lg col-sm-4 p-3 text-decoration-none">
    	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_two',
					'menu_class' => 'primary-menu-footer'
				)	
			);
		?>
    </div>
    <div class="col-lg col-sm-6 p-3 text-lg-end text-sm-center">
      <p class="footer_text_color"> Copyright <?php echo date('Y'); ?> plantsandseeds.co.uk All Rights Reserved.</p>
      <button class="tracking-opt-out" onclick="openTrackingOptOutPage()">Tracking opt-out</button>
    </div>
  </div>
</div>

<style>
  .footer_text_color {
    <?php
    // Apply the text color to the nav-text based on the $navbar_text_color variable
    if ($footer_text_color) {
      echo 'color: ' . esc_attr($footer_text_color) . ';';
    }
    ?>
  }
</style>

<script>
    function openTrackingOptOutPage() {
        var optOutUrl = "https://plantsandseeds.co.uk/tracking/tracking-opt-out/";
        window.open(optOutUrl, "_blank");
    }
</script>

</footer>

<?php wp_footer(); ?>
</body>
</html>
