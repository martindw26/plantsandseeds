<!--Review template flexibale fields-->

<?php $Product = get_sub_field('review_product');?>
<?php if (have_rows('content')): ?>
<?php while (have_rows('content')): the_row(); ?>

<!-- Single internal button Block-->
<?php if (get_row_layout() == 'internal_link_button'):
$internal_link_button = get_sub_field('internal_link_button');
$link = get_sub_field('link');
$internal_link_name = get_sub_field('internal_link_name');
?>	
<?php if ($link): ?><div class="d-grid">

<?php 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
?>
<button type="button" class="btn btn-primary rounded rounded-0"><h6 class="text-white text-decoration-none"><a class="text-white text-decoration-none" href='<?php echo esc_url( $link_url ); ?>" '> <?php echo $internal_link_name; ?></a></h6></button>
</div>
<?php endif; ?>
<?php endif; ?>
<!-- End Single internal button Block-->



<?php
// Assuming this code block is inside a loop for flexible content (e.g., repeater field or flexible content field)

// Check if the row layout is 'mpu_in_content_ads'
if (get_row_layout() == 'mpu_in_content_ads') {
  // Get the value of the 'mpu_option' field
  $mpu_option = get_sub_field('mpu_option');

  if ($mpu_option) {
    switch ($mpu_option) {
      case 'mpu1':

        $mpu_in_content_1 = get_sub_field('mpu_in_content_1');

        if ($mpu_in_content_1) {
          // Extract data from the 'mpu_in_content_1' subfield
          $start_date = strtotime($mpu_in_content_1['start_date']);
          $end_date = strtotime($mpu_in_content_1['end_date']);
          $campaign_name = $mpu_in_content_1['campaign_name'];
          $delivering = $mpu_in_content_1['delivering'];
          $CategoryTarget = $mpu_in_content_1['category'];
          $PostIDTarget = $mpu_in_content_1['postid'];
          $OrderNum = $mpu_in_content_1['campaign_order_id'];
          $Image = $mpu_in_content_1['image'];
          $Url = $mpu_in_content_1['url'];
          $current_date = time();

          if ($delivering === 'yes' && $current_date >= $start_date && $current_date <= $end_date) {
            // Advertisement Section
            echo '<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">Advertisement<span class="px-2" style="position: absolute; top: 0; right: 0;"><a class="text-decoration-none text-dark" href="' . get_field('adinformation', 'option') . '" target="_blank">&#128712;</a></span></div>';
            
            // Ad Content Section
            echo '<div class="d-flex align-items-center justify-content-center mb-2" style="height: 305px; margin: 0 auto; background-color: #dee2e6;">';
            
            // Check if the $mpu_in_content_1 array exists and has necessary data
            if (isset($mpu_in_content_1) && is_array($mpu_in_content_1)) {
              // Check if 'mpu_in_content_script1' exists and has a value
              if (!empty($mpu_in_content_1['mpu_in_content_script1'])) {
                // If the 'mpu_in_content_script1' has a value, display the script
                echo $mpu_in_content_1['mpu_in_content_script1'];
              } else {
                // If the 'mpu_in_content_script1' doesn't have a value, display the ad image
                echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name . '"></a>';
              }
              // Output the advert details in an HTML comment for debugging or tracking purposes
              echo "<!-- Advert details: " . $campaign_name . " | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";
            } else {
              // If $mpu_in_content_1 is not set or is not an array, display an alternate ad
              echo '<a href="' . $mpu_in_content_subs_ad_url . '" target="_blank"><img src="' . $mpu_in_content_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
            }
            
            echo '</div>'; // Closing tag for the Ad Content Section
          }
        }
        case 'mpu2':

          $mpu_in_content_2 = get_sub_field('mpu_in_content_2');
  
          if ($mpu_in_content_2) {
            // Extract data from the 'mpu_in_content_1' subfield
            $start_date = strtotime($mpu_in_content_2['start_date_2']);
            $end_date = strtotime($mpu_in_content_2['end_date_2']);
            $campaign_name = $mpu_in_content_2['campaign_name_2'];
            $delivering = $mpu_in_content_2['delivering_2'];
            $CategoryTarget = $mpu_in_content_2['category_2'];
            $PostIDTarget = $mpu_in_content_2['postid_2'];
            $OrderNum = $mpu_in_content_2['campaign_order_id_2'];
            $Image = $mpu_in_content_2['image_2'];
            $Url = $mpu_in_content_2['url_2'];
            $current_date = time();
  
            if ($delivering === 'yes' && $current_date >= $start_date && $current_date <= $end_date) {
              // Advertisement Section
              echo '<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">Advertisement<span class="px-2" style="position: absolute; top: 0; right: 0;"><a class="text-decoration-none text-dark" href="' . get_field('adinformation', 'option') . '" target="_blank">&#128712;</a></span></div>';
              
              // Ad Content Section
              echo '<div class="d-flex align-items-center justify-content-center mb-2" style="height: 305px; margin: 0 auto; background-color: #dee2e6;">';
              
              // Check if the $mpu_in_content_1 array exists and has necessary data
              if (isset($mpu_in_content_2) && is_array($mpu_in_content_2)) {
                // Check if 'mpu_in_content_script1' exists and has a value
                if (!empty($mpu_in_content_2['mpu_in_content_script_2'])) {
                  // If the 'mpu_in_content_script1' has a value, display the script
                  echo $mpu_in_content_2['mpu_in_content_script_2'];
                } else {
                  // If the 'mpu_in_content_script1' doesn't have a value, display the ad image
                  echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name . '"></a>';
                }
                // Output the advert details in an HTML comment for debugging or tracking purposes
                echo "<!-- Advert details: " . $campaign_name . " | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";
              } else {
                // If $mpu_in_content_1 is not set or is not an array, display an alternate ad
                echo '<a href="' . $mpu_in_content_subs_ad_url . '" target="_blank"><img src="' . $mpu_in_content_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
              }
              
              echo '</div>'; // Closing tag for the Ad Content Section
            }
          }
        break;
        case 'mpu3':

          $mpu_in_content_3 = get_sub_field('mpu_in_content_3');
  
          if ($mpu_in_content_3) {
            // Extract data from the 'mpu_in_content_1' subfield
            $start_date = strtotime($mpu_in_content_3['start_date_3']);
            $end_date = strtotime($mpu_in_content_3['end_date_3']);
            $campaign_name = $mpu_in_content_3['campaign_name_3'];
            $delivering = $mpu_in_content_3['delivering_3'];
            $CategoryTarget = $mpu_in_content_3['category_3'];
            $PostIDTarget = $mpu_in_content_3['postid_3'];
            $OrderNum = $mpu_in_content_3['campaign_order_id_3'];
            $Image = $mpu_in_content_3['image_3'];
            $Url = $mpu_in_content_3['url_3'];
            $current_date = time();
  
            if ($delivering === 'yes' && $current_date >= $start_date && $current_date <= $end_date) {
              // Advertisement Section
              echo '<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">Advertisement<span class="px-2" style="position: absolute; top: 0; right: 0;"><a class="text-decoration-none text-dark" href="' . get_field('adinformation', 'option') . '" target="_blank">&#128712;</a></span></div>';
              
              // Ad Content Section
              echo '<div class="d-flex align-items-center justify-content-center mb-2" style="height: 305px; margin: 0 auto; background-color: #dee2e6;">';
              
              // Check if the $mpu_in_content_1 array exists and has necessary data
              if (isset($mpu_in_content_3) && is_array($mpu_in_contet_3)) {
                // Check if 'mpu_in_content_script1' exists and has a value
                if (!empty($mpu_in_content_3['mpu_in_content_script_3'])) {
                  // If the 'mpu_in_content_script1' has a value, display the script
                  echo $mpu_in_content_3['mpu_in_content_script_3'];
                } else {
                  // If the 'mpu_in_content_script1' doesn't have a value, display the ad image
                  echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name . '"></a>';
                }
                // Output the advert details in an HTML comment for debugging or tracking purposes
                echo "<!-- Advert details: " . $campaign_name . " | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";
              } else {
                // If $mpu_in_content_1 is not set or is not an array, display an alternate ad
                echo '<a href="' . $mpu_in_content_subs_ad_url . '" target="_blank"><img src="' . $mpu_in_content_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
              }
              
              echo '</div>'; // Closing tag for the Ad Content Section
            }
          }
        break;
        case 'mpu4':

          $mpu_in_content_4 = get_sub_field('mpu_in_content_4');
  
          if ($mpu_in_content_4) {
            // Extract data from the 'mpu_in_content_1' subfield
            $start_date = strtotime($mpu_in_content_4['start_date_4']);
            $end_date = strtotime($mpu_in_content_4['end_date_4']);
            $campaign_name = $mpu_in_content_4['campaign_name_4'];
            $delivering = $mpu_in_content_4['delivering_4'];
            $CategoryTarget = $mpu_in_content_4['category_4'];
            $PostIDTarget = $mpu_in_content_4['postid_4'];
            $OrderNum = $mpu_in_content_4['campaign_order_id_4'];
            $Image = $mpu_in_content_4['image_4'];
            $Url = $mpu_in_content_4['url_4'];
            $current_date = time();
  
            if ($delivering === 'yes' && $current_date >= $start_date && $current_date <= $end_date) {
              // Advertisement Section
              echo '<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">Advertisement<span class="px-2" style="position: absolute; top: 0; right: 0;"><a class="text-decoration-none text-dark" href="' . get_field('adinformation', 'option') . '" target="_blank">&#128712;</a></span></div>';
              
              // Ad Content Section
              echo '<div class="d-flex align-items-center justify-content-center mb-2" style="height: 405px; margin: 0 auto; background-color: #dee2e6;">';
              
              // Check if the $mpu_in_content_4 array exists and has necessary data
              if (isset($mpu_in_content_4) && is_array($mpu_in_contet_4)) {
                // Check if 'mpu_in_content_script1' exists and has a value
                if (!empty($mpu_in_content_4['mpu_in_content_script_4'])) {
                  // If the 'mpu_in_content_script1' has a value, display the script
                  echo $mpu_in_content_4['mpu_in_content_script_4'];
                } else {
                  // If the 'mpu_in_content_script1' doesn't have a value, display the ad image
                  echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name . '"></a>';
                }
                // Output the advert details in an HTML comment for debugging or tracking purposes
                echo "<!-- Advert details: " . $campaign_name . " | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";
              } else {
                // If $mpu_in_content_1 is not set or is not an array, display an alternate ad
                echo '<a href="' . $mpu_in_content_subs_ad_url . '" target="_blank"><img src="' . $mpu_in_content_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
              }
              
              echo '</div>'; // Closing tag for the Ad Content Section
            }
          }
        break;
      // case 'mpu5':

          $mpu_in_content_5 = get_sub_field('mpu_in_content_5');
  
          if ($mpu_in_content_5) {
            // Extract data from the 'mpu_in_content_1' subfield
            $start_date = strtotime($mpu_in_content_5['start_date_5']);
            $end_date = strtotime($mpu_in_content_5['end_date_5']);
            $campaign_name = $mpu_in_content_5['campaign_name_5'];
            $delivering = $mpu_in_content_5['delivering_5'];
            $CategoryTarget = $mpu_in_content_5['category_5'];
            $PostIDTarget = $mpu_in_content_5['postid_5'];
            $OrderNum = $mpu_in_content_5['campaign_order_id_5'];
            $Image = $mpu_in_content_5['image_5'];
            $Url = $mpu_in_content_5['url_5'];
            $current_date = time();
  
            if ($delivering === 'yes' && $current_date >= $start_date && $current_date <= $end_date) {
              // Advertisement Section
              echo '<div class="d-flex justify-content-center p-2 text-dark position-relative" style="margin: 0 auto; background-color: #dee2e6;">Advertisement<span class="px-2" style="position: absolute; top: 0; right: 0;"><a class="text-decoration-none text-dark" href="' . get_field('adinformation', 'option') . '" target="_blank">&#128712;</a></span></div>';
              
              // Ad Content Section
              echo '<div class="d-flex align-items-center justify-content-center mb-2" style="height: 505px; margin: 0 auto; background-color: #dee2e6;">';
              
              // Check if the $mpu_in_content_5 array exists and has necessary data
              if (isset($mpu_in_content_5) && is_array($mpu_in_contet_5)) {
                // Check if 'mpu_in_content_script1' exists and has a value
                if (!empty($mpu_in_content_5['mpu_in_content_script_5'])) {
                  // If the 'mpu_in_content_script1' has a value, display the script
                  echo $mpu_in_content_5['mpu_in_content_script_5'];
                } else {
                  // If the 'mpu_in_content_script1' doesn't have a value, display the ad image
                  echo '<a href="' . $Url . '" target="_blank"><img src="' . $Image . '" alt="' . $campaign_name . '"></a>';
                }
                // Output the advert details in an HTML comment for debugging or tracking purposes
                echo "<!-- Advert details: " . $campaign_name . " | Order number: " . $OrderNum . " | Start date: " . date('F j, Y', $start_date) . " | End date: " . date('F j, Y', $end_date) . " -->";
              } else {
                // If $mpu_in_content_1 is not set or is not an array, display an alternate ad
                echo '<a href="' . $mpu_in_content_subs_ad_url . '" target="_blank"><img src="' . $mpu_in_content_subs_ad_image . '" alt="techhobbyist.co.uk"></a>';
              }
              
              echo '</div>'; // Closing tag for the Ad Content Section
            }
          }
        break;
      default:
        // Handle the case where 'mpu_option' doesn't match any of the specified cases.
        break;
    }
  }
}
?>





<!-- Single internal button Block post object-->
<?php if (get_row_layout() == 'featured_post'):
$featured_post = get_sub_field('internal_link_button_object');
?>	
<?php if ($featured_post): ?>
<div class="d-grid">
<button type="button" class="btn btn-primary btn-lg btn-block rounded rounded-0"><h6 class="text-white text-decoration-none"><a class="text-white text-decoration-none" href='<?php echo esc_html( $featured_post->guid ); ?>" '> <?php echo $featured_post->post_title; ?></a></h6></button></div>
<?php endif; ?>
<?php endif; ?>
<!-- End Single internal button Block post object-->

<!-- Affiliate Block-->
<?php if (get_row_layout() == 'affiliate_block'):
?>
<div class=" col-lg-8 p-lg-2 bg-white text-dark p-1 pb-4"><h4 class="card-title font-weight-bold">Deals</h4></div>
<table class="table table-striped table-dark">
<?php if( have_rows('prodcuts') ):?>
<?php while( have_rows('prodcuts') ) : the_row();?>
<?php
$retailer = get_sub_field('dir_retailer');
?>
<div class="container-fluid mb-2">
<div class="row">
<div class="col-md-4 text-white bg-dark p-2"><img class="img-fluid" src="<?php the_sub_field('dir_image');?>"/></div>
<div class="col-md-8 text-white bg-dark pb-2">
<h2 class="pt-2"><?php echo $Product; ?></h2>
<div class="">
<div class="col text-white bg-dark  p-2"><?php the_sub_field('dir_description');?></div>
<div class="col text-white bg-dark  p-2"><h5>Retailer: <?php echo $retailer['label'];?></h5></div>
</div>
<a href="<?php the_sub_field('dir_buy_now');?>" class="btn btn-success float-end">
    Get your <?php echo $Product; ?> at <?php echo $retailer['label'];?> now
</a>

</div>
</div>
</div>
<?php endwhile;  else :  endif; ?>
</table>	
<?php endif; ?>
<!-- End Affiliate Block-->

<!-- Single Green button Block-->
<?php if (get_row_layout() == 'buy_now_button'):
$Buy_now_button = get_sub_field('buy_now_button');
$Product = get_field('review_product');
?>	
<div class="row p-4">
<?php if ($Buy_now_button): ?>	 
<button type="button" class="btn btn-success rounded rounded-0"><h3 class="text-white text-decoration-none">Get your <a class="text-white text-decoration-none" href='<?php echo $Buy_now_button; ?>'  target='_blank'/> <?php echo $Product; ?></a> Now</h3></button>
</div>
<?php endif; ?>
<?php endif; ?>
<!-- End Single Green button Block-->

<!-- Single Green button Block-->
<?php if (get_row_layout() == 'buy_now_button_ft'):
    $Buy_now_button_ft_url = get_sub_field('buy_now_button_free_text_url');
    $BuyNewProductFreeText = get_sub_field('buy_now_button_free_text');
?>	
<div class="row p-4">
    <?php if ($Buy_now_button_ft_url): ?>	 
        <button type="button" class="btn btn-success rounded rounded-0">
            <h3 class="text-white text-decoration-none">
                Get your 
                <a class="text-white text-decoration-none" href='<?php echo esc_url($Buy_now_button_ft_url); ?>' target='_blank'>
                    <?php echo esc_html($BuyNewProductFreeText); ?>
                </a> Now
            </h3>
        </button>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- End Single Green button Block-->



<!--Price list block block -->
<?php if (get_row_layout() == 'buy_now_list'):?>	
<div class="container-fluid p-2 bg-dark text-white text-centert">
<h4>Where to buy a <?php the_field('review_product'); ?></h4> 
</div>
<div class="container-fluid  bg-dark text white">
<div class="row">
<div class="col-sm-4">
<img class="img-fluid p-1" src="<?php echo get_the_post_thumbnail( $page->ID, '' ); ?>"/>
</div>
<div class="col">
<?php if(have_rows('buy_now')):?>
<table class="table table-borderless table-dark">
<caption>
<?php if (get_field('affiliate_disclaimer','option')) : ?>
        <?php echo get_field('affiliate_disclaimer','option'); ?>
<?php endif; ?>
</caption>
<?php while( have_rows('buy_now')): the_row();?>
<?php
$retailer = get_sub_field('dir_retailer');
$Price = get_sub_field('price');
$condition = get_sub_field('condition');
$Single_buy_now_button = get_sub_field('dir_buy_now');
$currency = get_sub_field('currency');
//Handles the currecy symbol selection

if($currency == 'GBP') {
$currency = '&#163';
} else if($currency == 'USD') {
$currency = '&#36';
} else if($currency == 'Euro') {
$currency = '&#8364';
} else if($currency == 'JPY') {
$currency = '&#165';
} else if($currency == 'KWR') {
$currency = '&#8361';
} else if($currency == 'INR') {
$currency = '&#8377';
}
?>
<tbody>
<tr>
<th scope="row"></th>
<td class="border-bottom border-secondary"><?php echo $retailer['label'];?></td>
<td class="border-bottom border-secondary"><?php echo $currency;?><?php echo $Price;?></td>
<td class="border-bottom border-secondary"><?php echo $condition;?></td>
<td class="border-bottom border-secondary">
  <button type="button" class="btn btn-success float-end p-2">
    <a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank">Buy</a>
  </button>
</td>

</tr>
</tbody>
<?php endwhile;?>	
</table>
<?php endif; ?>
</div>
</div>
</div>
<?php endif; ?>
<!-- End Price list block block -->

<!-- Image video block -->
<?php if (get_row_layout() == 'image_video_block'):
$a_picture = get_sub_field('a_image');
$a_video = get_sub_field('a_video');
$autoplay = get_sub_field('autoplay');
?>	
<div class="">
<div class="col">
<!-- Image block -->
<?php if($a_picture):?>
<img src="<?php echo $a_picture; ?>" class="img-fluid mb-1 mx-auto d-block border-light">
<?php endif;?>
<!-- End Image block-->
</div>

<!-- Video block-->
<?php if($a_video):?>

<?php 
if ($autoplay == 'yes') {
    $autoplay = 1;
} else {
    $autoplay = 0;
}
?>

<div class="videoWrapper"> 
<iframe class="" width="400" height="349" src="https://www.youtube.com/embed/<?php echo $a_video;?>?autoplay=<?php echo $autoplay; ?>&mute=1&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
</div>
<?php endif;?>
<!-- End Video block-->
</div>
<?php endif; ?>

<!-- Ad block -->
<?php if (get_row_layout() == 'ad_block'):
$columns = get_sub_field('ads');
$ads = get_sub_field('ads');
?>

<div class="row">

<?php if ($ads): ?>
<div class="col">
<!-- HomePage ad block-->
<?php get_template_part('includes/section', 'homePage_ad_block'); ?>
<!-- End HomePage ad block-->
</div>
<?php endif; ?>
</div>
<?php endif; ?>	
<!-- End Image video block -->		

<!-- Gallery slider block -->
<?php if (get_row_layout() == 'gallery_block'):
$gallery_title = get_sub_field('gallery_title');
$gallery = get_sub_field('gallery');
?>

<h3><?php echo $gallery_title; ?></h3>
<?php echo $gallery; ?>

<?php endif; ?>

<!-- Gallery justified_imge_grid block -->
<?php if (get_row_layout() == 'justified_image_block'):
$jigIDTitle = get_sub_field('justified_image_block_title');
$jigID = get_sub_field('justified_image_grid_id');
?>
<div class id="JigBlock">
<h3><?php echo $jigIDTitle; ?><i> Gallery</i></h3>
<div id="JIG"><?php echo do_shortcode($jigID);?></div>
</div>
<?php endif; ?>

<!-- Parts column horizontal block -->
<div class="container mt-2 ">
<?php if (get_row_layout() == 'parts_column_section'):
$partscolumns = get_sub_field('parts_column');
$PartsProductTitle = get_sub_field('part_title');
$PartsProductParagraph = get_sub_field('parts_paragraph');
?>	
<div class="row">
<?php if ($PartsProductTitle): ?>
<hr class="hr"><h4 class="pt-4">Here are the parts required for the this <?php echo $PartsProductTitle; ?><i> project</i></h4>
<?php endif; ?>	 
<table class="table table-light table-hover table-bordered table-striped p-2">
<tr>
<th class=""><h4>Parts list</h4></th>
<th class=""><h4 class="text-center">Quantity</h4></th>
<th class=""><h4 class="text-center">Purchase</h4></th>
</tr>
<?php foreach ($partscolumns as $partscolumn): ?>
<tr>
<th class=""><p><?php echo $partscolumn['part']; ?></p></th>
<th class="text-center"><p><?php echo $partscolumn['qty']; ?></p></th>
<th class="align-middle text-center">
<?php if ($partscolumn['buy_now']): ?>
<a class="text-decoration-none" href="<?php echo $partscolumn['buy_now']; ?>" target='_blank'>Buy Now</a>
<?php endif; ?>
</th>	
</tr>
<?php endforeach; ?>		
</table>
</div><hr>
<?php endif; ?>
</div>

<!-- Parts (image) column horizontal block -->

<?php if (get_row_layout() == 'parts_column_section_image'):
$partscolumns = get_sub_field('parts_column');
$PartsProductTitle = get_sub_field('part_title');
$PartsProductImage = get_sub_field('part_image');
$PartsProductParagraphTitle = get_sub_field('parts_paragraph_title');
$PartsProductParagraphImage = get_sub_field('parts_paragraph_image');
?>	
<div class="row">
<?php if ($PartsProductParagraphTitle): ?>
    <hr class="hr"><h4 class="pt-4">Here are the parts required for the this <?php echo $PartsProductTitle; ?><i> project</i></h4>
<?php endif; ?>	 
<?php if ($PartsProductParagraphImage) : ?>
    <p><?php echo $PartsProductParagraphImage; ?></p>
<?php endif; ?>    
<table class="table table-light table-hover table-bordered p-2">
<tr>
<th class=""><h4 class="text-center">Part</h4></th>
<th class=""><h4 class="text-center">Item</h4></th>
<th class=""><h4 class="text-center">Purchase</h4></th>
</tr>
<?php foreach ($partscolumns as $partscolumn): ?>
<tr>
<th class="" style="display: flex; justify-content: center;">
    <img class="img-fluid " 
         src="<?php echo $partscolumn['part_image']; ?>" 
         style="max-width: 100px; max-height: 100px; object-fit: contain;"
    />
</th>



<th class="align-middle text-center"><p><?php echo $partscolumn['part_title']; ?></p></th>
<th class="align-middle text-center">
<?php if ($partscolumn['buy_now']): ?>
  <a class="btn btn-success text-white" href="<?php echo $partscolumn['buy_now']; ?>" target='_blank'>Buy Now</a>
<?php endif; ?>
</th>	
</tr>
<?php endforeach; ?>		
</table>
</div>
<?php endif; ?>


<!-- Pros and cons column horizontal block -->
<?php if (get_row_layout() == 'pros_cons_column'):
$pros_cons_columns = get_sub_field('pros_cons_column');
$ProductTitle = get_sub_field('product_title');
?>	
<?php if ($ProductTitle): ?>
<h3><?php echo $ProductTitle; ?> <i>Pros and Cons</i></h3>
<?php endif; ?>
<table class="table table-bordered p-2">
<tr>
<th class="bg-dark text-light"><h4>Pros</h4></th>
<th class="bg-dark text-light"><h4>Cons</h4></th>
</tr>			
<?php foreach ($pros_cons_columns as $pros_cons_column): ?>
<tr>
<th class="bg-light text-dark"><p> <span class='dashicons dashicons-thumbs-up'>  </span>  <?php echo $pros_cons_column['pros']; ?></p></th>
<th class="bg-light text-dark"><p> <span class='dashicons dashicons-thumbs-down'>  </span>  <?php echo $pros_cons_column['cons']; ?></p></th>
</tr>
<?php endforeach; ?>		
</table>			
<?php endif; ?>

<!-- Specs column horizontal block -->
<?php if (get_row_layout() == 'specs_column_section'):
$specscolumns = get_sub_field('specs_column');
$ProductTitle = get_sub_field('product_title');
?>	
<?php if ($ProductTitle): ?>
<h3><?php echo $ProductTitle; ?> <i>Specs</i></h3>
<?php endif; ?>
<table class="table table-light table-hover table-bordered table-striped p-2">
<tr>
<th class=""><h4>Component</h4></th>
<th class=""><h4>Specifications</h4></th>
</tr>			
<?php foreach ($specscolumns as $specscolumn): ?>
<tr>
<th class=""><p><?php echo $specscolumn['component']; ?></p></th>
<th class=""><p><?php echo $specscolumn['spec']; ?></p></th>
</tr>
<?php endforeach; ?>		
</table>			
<?php endif; ?>

<!-- Detailed specs column horizontal block -->
<?php if (get_row_layout() == 'specs_column_section_detailed'):
$specscolumns_detailed = get_sub_field('specs_column_detailed');
?>
<button type="button" class="btn btn bg-primary rounded rounded-0 w-100 p-2 mb-2 text-white" data-bs-toggle="collapse" data-bs-target="#detailed">						Show/Hide detailed specs</button>	
<div id="detailed" class="collapse">
<table class="table table-light table-hover table-bordered table-striped p-2">
<?php foreach ($specscolumns_detailed as $specscolumn_detailed): ?>
<tr>
<th class=""><p><?php echo $specscolumn_detailed['detailed_component']; ?></p></th>
<th class=""><p><?php echo $specscolumn_detailed['detailed_spec']; ?></p></th>
</tr>
<?php endforeach; ?>		
</table>
</div>
<?php endif; ?>

<!-- Single column horizontal block -->
<?php if (get_row_layout() == 'single_column_section'):
$columns = get_sub_field('single_column');?>	
<div class="bg-white">
<?php foreach ($columns as $column): ?>
<h3><?php echo $column['title']; ?></h3>
<p class="text-dark"><?php echo $column['content']; ?></p>				 
<?php if ($column['link']): ?>
<a href="<?php echo $column['link']['url']; ?>">Column link</a>
<?php endif; ?>
</div>
<?php endforeach; ?>
<?php endif; ?>

<!-- double column horizontal block -->
<?php if (get_row_layout() == 'double_column_section'):
$columns = get_sub_field('double_column');?>	
<div class="row">
<?php foreach ($columns as $column): ?>
<div class="col">
<h3><?php echo $column['title']; ?></h3>
<p class="m-4"><?php echo $column['content']; ?></p>				 
<?php if ($column['link']): ?>
<a href="<?php echo $column['link']['url']; ?>">Column link</a>
<?php endif; ?>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>

<!-- Three columns horizontal block -->
<?php if (get_row_layout() == 'columns_section'):
$columns = get_sub_field('columns');?>	
<div class="">
<?php foreach ($columns as $column): ?>
<div class="col-lg-4">
<h3><?php echo $column['title']; ?></h3>
<p class="m-4"><?php echo $column['content']; ?></p>				 
<?php if ($column['link']): ?>
<a href="<?php echo $column['link']['url']; ?>">Column link</a>
<?php endif; ?>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>

<!-- Text with image or video block -->	
<?php if (get_row_layout() == 'text_with_image_video_block'):
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$video = get_sub_field('video');
$autoplay = get_sub_field('autoplay');
$picture = $image['sizes']['large'];
$media_side = get_sub_field('media_side');
$media_select = get_sub_field('image_or_video');
?>	
<div class="row"><hr class="hr">
<?php if ($media_side == 'left'): ?>		
<div class="col-lg-6">
<?php if ($media_select == 'image'): ?>

<!-- Image/Video left hand side block -->
<img src="<?php echo $picture; ?>" class="img-fluid">
<?php elseif ($media_select == 'video'): ?>
<div class="videoWrapper"> 
<iframe class="" width="400" height="349" src="https://www.youtube.com/embed/<?php echo $video; ?>?autoplay=<?php echo $autoplay; ?>&mute=1&rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
</div>
<?php else: ?>
<?php endif; ?>
</div>
<div class="col-lg-6">

<!-- Image left hand side block -->
<h4><?php echo $title; ?></h4>
<?php echo $content; ?>				
</div>
<?php else: ?>
<div class="col-lg-6">

<!-- Image right hand side block -->
<h4><?php echo $title; ?></h4>
<?php echo $content; ?>
</div>
<div class="col-lg-6 align-items-sm-center">
<?php if ($media_select == 'image'): ?>

<!-- Image/Video left hand side block -->
<img src="<?php echo $picture; ?>" class="img-fluid">
<?php elseif ($media_select == 'video'): ?>
<div class="videoWrapper"> 
<iframe class="" width="380" height="349" src="https://www.youtube.com/embed/<?php echo $video; ?>?autoplay=<?php echo $autoplay; ?>&mute=1&rel=0&hd=1" frame-border="0" allowfullscreen></iframe>
</div>
<?php else: ?>	
<?php endif; ?>			
</div><hr class="hr">
<?php endif; ?>
</div>	
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


