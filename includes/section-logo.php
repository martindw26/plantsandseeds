<?php
$header_background_color = get_field('header_background_color', 'option');

// Check if the color value is not empty
if ($header_background_color) {
    echo '<div class="desktop-logo" style="background-color: ' . esc_attr($header_background_color) . ';">';
    echo '<div class="mobile-logo" style="background-color: ' . esc_attr($header_background_color) . ';">';
} else {
    echo '<div class="desktop-logo">';
    echo '<div class="mobile-logo">';
}
?>

<a href="https://plantsandseeds.co.uk/">
    <img src="<?php the_field('site_logo_desktop', 'option'); ?>" class="img-fluid bg-dark border-0" />
</a>
</div>

<a href="https://plantsandseeds.co.uk/">
    <img src="<?php the_field('site_logo_mobile', 'option'); ?>" class="img-fluid bg-dark border-0" />
</a>
</div>

</div>
