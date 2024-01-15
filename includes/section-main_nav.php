<!-- Main navigation -->

<!--<nav class="navbar-fluid navbar-expand-md navbar-black bg-black pt-1" role="navigation">-->

<?php
$navbar_background_color = get_field('navbar_background_color', 'option');
$navbar_text_color = get_field('navbar_text_color', 'option'); // Add this line to get the text color

// Check if the color values are not empty
if ($navbar_background_color) {
    $style = 'style="background-color: ' . esc_attr($navbar_background_color) . ';';
    // Check if text color is set, and if so, append it to the style
    if ($navbar_text_color) {
        $style .= ' color: ' . esc_attr($navbar_text_color) . ';"'; // Corrected this line
    } else {
        $style .= '"'; // Added this line to properly close the style attribute
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
