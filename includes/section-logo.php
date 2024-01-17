<?php
$header_background_color = get_field('header_background_color', 'option');

// Check if the color value is not empty
if ($header_background_color) {
    $style_attribute = 'style="background-color: ' . esc_attr($header_background_color) . ';"';
} else {
    $style_attribute = ''; // No background color if not set
}
?>

<div class="desktop-logo" <?php echo $style_attribute; ?>>
    <a href="https://plantsandseeds.co.uk/">
        <img src="<?php the_field('site_logo_desktop', 'option'); ?>" class="img-fluid bg-dark border-0" alt="Desktop Logo" />
    </a>
</div>

<div class="mobile-logo" <?php echo $style_attribute; ?>>
    <a href="https://plantsandseeds.co.uk/">
        <img src="<?php the_field('site_logo_mobile', 'option'); ?>" class="img-fluid bg-dark border-0" alt="Mobile Logo" />
    </a>
</div>
