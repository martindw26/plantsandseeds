
<a href="<?php echo $Product_title; ?>"/></a>
<?php if (have_rows('product')): ?>

<?php while (have_rows('product')): the_row(); ?>

<section class="bg-white p-2 mb-4">
<?php $Product_title = get_sub_field('multi_product_title');?>

<?php $jump_id = get_sub_field('jump_id');?>
<span id="<?php echo $jump_id; ?>"></span>

<h2 class="p-2 card-title font-weight-bold"><u><?php echo $Product_title; ?></u></h2>

<?php $ProductRating = get_sub_field('p_rating');?>
<div class="row">
        <?php foreach ($ProductRating as $rating): ?>
        <h3><?php echo $rating; ?></h3>
        <?php endforeach; ?>		
</div>
<br>
<?php $Single_buy_now_button = get_sub_field('buy_now');?>
<button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank"></>Get your <?php echo $Product_title; ?> now</a></button>

<br><br>
<?php $Product_image = get_sub_field('image');?>
<img class="img-fluid" src="<?php echo $Product_image; ?>"/><br><br>
<?php $imagesource= get_sub_field('image_source');?>
<h6 class="card-title text-mute">Image source <?php echo $imagesource; ?></h6>

<?php $Product_description = get_sub_field('product_description');?>

<blockquote class="blockquote"><?php echo $Product_description; ?></blockquote>

<?php if(have_rows('specs_column_horizontal_block')):?>

<table class="table table-light table-bordered p-2">

<hr><h4 class="card-title font-weight-bold"><?php echo $Product_title; ?> <i>specs</i></h4>

    <tr>
        <th class=""><h4>Component</h4></th>
        <th class=""><h4>Specifications</h4></th>
    </tr>	


<?php while( have_rows('specs_column_horizontal_block')): the_row();?>

<tr>
        <th class=""><?php the_sub_field('component');?></th>
        <th class=""><?php the_sub_field('spec');?></th>
</tr>				

<?php endwhile;?>	

</table>
<button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank"></>Get your <?php echo $Product_title; ?> now</a></button><br>
<?php endif; ?>


<?php if(have_rows('buy_now_list')):?>

    <?php  $buy_now_list_manufacturer = get_sub_field('buy_now_list_manufacturer');?>

    <div class="table-responsive">
        <table class="table">
            <thead class="table-success">
                <tr>
                    <th><?php echo $buy_now_list_manufacturer;?></th>
                    <th>Model</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php while(have_rows('buy_now_list')): the_row();
                   
                    $buy_now_list_title = get_sub_field('buy_now_list_title');
                    $currency = get_sub_field('item_currency');
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

                <tr>
                    <th>
                        <h4><?php echo $buy_now_list_title;?></h4>
                        <img class="img-fluid" src="<?php echo get_sub_field('item_image');?>" style="width:100px; height:100px; object-fit: cover;">
                    </th>
                    <td class="align-middle">
                        <h6><?php the_sub_field('item_model');?></h6>
                    </td>
                    <td class="align-middle">
                        <h6><?php echo $currency;?><?php the_sub_field('item_price');?></h6>
                    </td>
                </tr>
                <?php endwhile;?>    
            </tbody>
        </table>
    </div>
<?php endif; ?>



<!-- Social share icons-->
<?php $enable_in_article = get_field('on_article','option');?>
<?php if($enable_in_article):?>
<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
<?php else:?>
<?php echo '<style>{ display:none;}</style>';?>
<?php endif;?>
<hr>
<!-- End Social share icons-->

</section>
<?php endwhile; ?>
<?php endif; ?>









   
