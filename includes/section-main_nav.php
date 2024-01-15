<!-- Main navigation -->

<!--<nav class="navbar-fluid navbar-expand-md navbar-black bg-black pt-1" role="navigation">-->

<style>
    /* Add this style block in your HTML head or in your stylesheet */
    .navbar_background .nav-text {
        <?php
        // Apply the text color to the nav-text based on the $navbar_text_color variable
        if ($navbar_text_color) {
            echo 'color: ' . esc_attr($navbar_text_color) . ';';
        }
        ?>
    }
</style>


<?php
$navbar_background_color = get_field('navbar_background_color', 'option');
$navbar_text_color = get_field('navbar_text_color', 'option'); // Add this line to get the text color

if ($navbar_background_color || $navbar_text_color) {
  $style = 'style="';
  // Check if background color is set, and if so, append it to the style
  if ($navbar_background_color) {
      $style .= 'background-color: ' . esc_attr($navbar_background_color) . ';';
  }
  // Check if text color is set, and if so, append it to the style
  if ($navbar_text_color) {
      $style .= '"';
  }
  echo '<nav class="navbar_background navbar-fluid navbar-expand-md pt-1" ' . $style . ' role="navigation">';
} else {
  echo '<nav class="navbar_background navbar-fluid navbar-expand-md pt-1" role="navigation">';
}
?>

	
<!-- Brand and toggle get grouped for better mobile display -->
<button class="navbar-toggler text-start" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"><h5 class="fas fa-bars"><p class="p-2" style="display: inline;">Menu</p></h5></span>
</span>
</button>

  <?php
  wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'	          => 2,
    'container'       => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id'    => 'navbar-collapse-1',
	  'add_li_class'    => 'nav-text',
    'menu_class'      => 'nav navbar-nav',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
  ) );
  ?>
</nav>
<!-- /Main navigation -->
