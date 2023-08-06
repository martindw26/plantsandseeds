<?php
if (have_rows('product')):
    while (have_rows('product')):
        the_row();
        $Product_title = esc_html(get_sub_field('multi_product_title'));
        $jump_id = get_sub_field('jump_id');
?>

        <span id="<?php echo esc_attr($jump_id); ?>">See?</span>
        <h2 class="p-2 card-title font-weight-bold"><u><?php echo $Product_title; ?></u></h2>

        <?php
        $ProductRating = get_sub_field('p_rating');
        if (!empty($ProductRating)):
        ?>
            <div class="row">
                <?php foreach ($ProductRating as $rating): ?>
                    <h3><?php echo esc_html($rating); ?></h3>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <br>
        <?php
        $Single_buy_now_button = esc_url(get_sub_field('buy_now_button'));
        if ($Single_buy_now_button):
        ?>
            <button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank">Get your <?php echo $Product_title; ?> now</a></button>
            <br><br>
        <?php endif; ?>

        <?php
        $Product_image = esc_url(get_sub_field('image'));
        if ($Product_image):
        ?>
            <img class="img-fluid" src="<?php echo $Product_image; ?>" /><br><br>
        <?php endif; ?>

        <?php $Product_description = get_sub_field('product_description'); ?>
        <?php if ($Product_description): ?>
            <blockquote class="blockquote"><?php echo esc_html($Product_description); ?></blockquote>
        <?php endif; ?>

        <?php if (have_rows('specs_column_horizontal_block')): ?>
            <table class="table table-light table-bordered p-2">
                <hr>
                <h4 class="card-title font-weight-bold"><?php echo $Product_title; ?> <i>specs</i></h4>
                <tr>
                    <th class=""><h4>Component</h4></th>
                    <th class=""><h4>Specifications</h4></th>
                </tr>
                <?php while (have_rows('specs_column_horizontal_block')): the_row(); ?>
                    <tr>
                        <th class=""><?php the_sub_field('component'); ?></th>
                        <th class=""><?php the_sub_field('spec'); ?></th>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php endif; ?>

        <div class="container-fluid p-2 bg-dark text-white">
            <h3>Where to buy an <?php echo $Product_title; ?></h3>
        </div>

        <?php if (have_rows('buy_now')): ?>
            <?php
            $retailer = get_sub_field('dir_retailer');
            $Price = get_sub_field('price');
            $condition = get_sub_field('condition');
            $Single_buy_now_button = esc_url(get_sub_field('dir_buy_now'));
            $currency = get_sub_field('currency');

            $currency_symbols = array(
                'GBP' => '&#163;',
                'USD' => '&#36;',
                'Euro' => '&#8364;',
                'JPY' => '&#165;',
                'KWR' => '&#8361;',
                'INR' => '&#8377;'
            );

            $currency_symbol = isset($currency_symbols[$currency]) ? $currency_symbols[$currency] : '';

            if ($retailer && $Price && $condition && $Single_buy_now_button && $currency_symbol):
            ?>
                <div class="container-fluid bg-dark text-white">
                    <div class="row text-white">
                        <div class="col-sm-4 text-white">
                            <img class="img-fluid p-1" src="<?php echo $Product_image; ?>" />
                        </div>
                        <div class="col">
                            <table class="table table-borderless table-dark text-white">
                                <tbody>
                                    <tr>
                                        <th scope="row text-white"></th>
                                        <td class="border-bottom border-secondary text-white"><?php echo esc_html($retailer['label']); ?></td>
                                        <td class="border-bottom border-secondary text-white"><?php echo $currency_symbol . esc_html($Price); ?></td>
                                        <td class="border-bottom border-secondary text-white"><?php echo esc_html($condition); ?></td>
                                        <td class="border-bottom border-secondary"><button type="button" class="btn btn-success float-end p-2"><a class="text-white text-decoration-none" href="<?php echo $Single_buy_now_button; ?>" target="_blank">Buy</a></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <br>

        <!-- Social share icons-->
        <?php
        $enable_in_article = get_field('on_article', 'option');
        if ($enable_in_article) {
            get_template_part('includes/section', 'social_sharefrontpagearticle');
        } else {
            echo '<style>{ display:none;}</style>';
        }
        ?>
        <hr>
        <!-- End Social share icons-->

<?php endwhile; ?>
<?php endif; ?>
