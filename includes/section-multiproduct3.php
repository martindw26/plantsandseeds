<?php
$Product_title = get_sub_field('multi_product_title');
$ProductRating = get_sub_field('p_rating');
$Product_image = get_sub_field('image');

function get_currency_symbol($currency) {
    if($currency == 'GBP') {
        return html_entity_decode('&#163;');
    } else if($currency == 'USD') {
        return html_entity_decode('&#36;');
    } else if($currency == 'Euro') {
        return html_entity_decode('&#8364;');
    } else if($currency == 'JPY') {
        return html_entity_decode('&#165;');
    } else if($currency == 'KWR') {
        return html_entity_decode('&#8361;');
    } else if($currency == 'INR') {
        return html_entity_decode('&#8377;');
    }
}

?>

<a href="<?php echo $Product_title; ?>"></a>

<?php if (have_rows('product')): ?>
<?php while (have_rows('product')): the_row(); ?>

<section class="bg-white p-2 mb-4">
    <h2 class="p-2 card-title font-weight-bold"><u><?php echo $Product_title; ?></u></h2>

    <div class="row">
        <?php if (is_array($ProductRating)) {
            foreach ($ProductRating as $rating) {
                echo "<h3>$rating</h3>";
            }
        } ?>
    </div>

    <br>
    <button type="button" class="btn btn-success">
        <a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank">
            Get your <?php echo $Product_title; ?> now
        </a>
    </button>

    <br><br>

    <img class="img-fluid" src="<?php echo $Product_image; ?>" /><br><br>

    <div class="container">
        <div class="row horizontal-scroll">
            <?php if (have_rows('image_slider')): ?>
                <?php while (have_rows('image_slider')): the_row(); ?>
                    <?php $image_url = esc_url(get_sub_field('image_slides')); ?>
                    <img class="img-fluid" src="<?php echo $image_url; ?>" alt="Image description" style="height:100px; width:200px;">
                <?php endwhile; ?>
            <?php else: ?>
                <!-- If there are no jump points -->
                <p>No jump points found.</p>
            <?php endif; ?>
        </div>
    </div>

    <?php $Product_description = get_sub_field('product_description');?>
    <blockquote class="blockquote"><?php echo $Product_description; ?></blockquote>

    <?php if(have_rows('specs_column_horizontal_block')): ?>
        <table class="table table-light table-bordered p-2">
            <hr>
            <h4 class="card-title font-weight-bold"><?php echo $Product_title; ?> <i>specs</i></h4>
            <tr>
                <th class=""><h4>Component</h4></th>
                <th class=""><h4>Specifications</h4></th>
            </tr>	
            <?php while( have_rows('specs_column_horizontal_block')): the_row(); ?>
                <tr>
                    <th class=""><?php the_sub_field('component');?></th>
                    <th class=""><?php the_sub_field('spec');?></th>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php endif; ?>

    <div class="container-fluid p-2 bg-dark text-white text-center">
        <h3>Where to buy an <?php echo $Product_title; ?></h3> 
    </div>

    <div class="container-fluid  bg-dark text white">
        <div class="row">
            <div class="col-sm-4">
                <img class="img-fluid p-1" src="<?php echo $Product_image; ?>"/>
            </div>
            <div class="col">
                <?php if(have_rows('buy_now')): ?>
                    <table class="table table-borderless table-dark">
                        <caption>
                            <p>This site contains affiliate links to products. We may receive a commission for purchases made through these links. Please also report price issues at <a class="text-muted font-weight-ligh" href="mailto:data@techhobbyist.co.uk?subject=Price issue report">Report Price Issues</a></p>
                        </caption>
                        <?php while( have_rows('buy_now')): the_row(); ?>
                            <?php
                            $retailer = get_sub_field('dir_retailer');
                            $Price = get_sub_field('price');
                            $condition = get_sub_field('condition');
                            $Single_buy_now_button = get_sub_field('buy_now_button');
                            $currency = get_sub_field('currency');
                            $currency_symbol = get_currency_symbol($currency);
                            ?>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td class="border-bottom border-secondary"><?php echo $retailer['label']; ?></td>
                                    <td class="border-bottom border-secondary"><?php echo $currency_symbol . $Price; ?></td>
                                    <td class="border-bottom border-secondary"><?php echo $condition; ?></td>
                                    <td class="border-bottom border-secondary">
                                        <button type="button" class="btn btn-success float-end p-2">
                                            <a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank">
                                                Buy
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        <?php endwhile; ?>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <br>

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
