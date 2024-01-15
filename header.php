<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"> 
<!-- GA scripts --><?php the_field('google_analytic', 'option'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<meta name="google-site-verification" content="JbtpfGonAlshcSxHW_vqTXmpIU-rrA9O2Yq-6Du3aNA" />
<!-- Affiliate scripts --><?php the_field('affiliate_scripts', 'option'); ?>

<?php wp_head();?>

<!-- Collapse.js-->
<?php get_template_part( 'template-parts/helpers/collapse' );?>
<!-- END Collapse.js -->

<!-- Web console-log-->
<?php get_template_part( 'template-parts/theme/components/console-log' );?>
<!-- END console-log -->

<!-- Ad head scripts-->
<?php get_template_part( 'template-parts/theme/components/adshead' );?>
<!-- End Ad head scripts -->

<!---- Google analytics ---->
<?php
$GA  = get_field( 'google_analytics','option' );
echo $GA;
?>
<!-- End Google analytics --->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<?php
$navbar_color = get_field('header_baground', 'option');
?>
  
<?php $enable_header_on = get_field('header_on','option');?>
<?php if($enable_header_on):?>
<!-- Social share icons-->
<?php get_template_part('includes/section','social_share');?>
<!-- End Social share icons-->
<?php else:?>
<?php echo '<style>{ display:none;}</style>';?>
<?php endif;?>
<!-- Page header logo-->
<div class="header_baground container-fluid p-0">
<?php get_template_part('includes/section','logo');?>

<?php get_template_part('includes/section','main_nav');?>
</div>
