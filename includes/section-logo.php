<?php
$header_background_color = get_field('header_background_color', 'option');

// Check if the color value is not empty
if ($header_background_color) {
    echo '<div class="desktop-logo" style="background-color: ' . esc_attr($header_background_color) . ';">';
    echo '<a href="https://plantsandseeds.co.uk/"><img src="' . esc_url(the_field('site_logo_desktop', 'option')) . '" class="img-fluid bg-dark border-0"></a>';
    echo '</div>';

    echo '<div class="mobile-logo" style="background-color: ' . esc_attr($header_background_color) . ';">';
    echo '<a href="https://plantsandseeds.co.uk/"><img src="' . esc_url(the_field('site_logo_mobile', 'option')) . '" class="img-fluid bg-dark border-0"></a>';
    echo '</div>';
} else {
    echo '<div class="desktop-logo">';
    echo '<a href="https://plantsandseeds.co.uk/"><img src="' . esc_url(the_field('site_logo_desktop', 'option')) . '" class="img-fluid bg-dark border-0"></a>';
    echo '</div>';

    echo '<div class="mobile-logo">';
    echo '<a href="https://plantsandseeds.co.uk/"><img src="' . esc_url(the_field('site_logo_mobile', 'option')) . '" class="img-fluid bg-dark border-0"></a>';
    echo '</div>';
}
?>
