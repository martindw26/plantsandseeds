<div class="container-fluid ps-2 pe-2">
    <div class="row">
        <div class="card mb-3 rounded-0">
            <div class="row g-0">
                <div class="col-md-4" style="padding:0;">
                    <?php
                    // Get the ACF field value for author_profile_image
                    $author_profile_image = get_field('author_profile_image');
                    if(!empty($author_profile_image)): ?>
                        <img src="<?php echo esc_url($author_profile_image); ?>" style="width: 100%; height: 100%; object-fit: cover;" class="img-fluid rounded-0" alt="Author Image">
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><strong>By <?php the_author_meta('display_name', 1); ?></strong></h5>
                        <p class="card-text">
                            <?php 
                            $author_id = get_the_author_meta('ID', 1);
                            $author_bio = get_the_author_meta('description', $author_id);
                            echo esc_html($author_bio);
                            ?>
                            <!-- social icons -->
                            <section class="card-text">
                            <a class="bi bi-facebook text-dark  p-2" width="48" height="48" href="<?php the_field ('facebook','option');?>"target="_blank" /></a>
                            </section>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    </div>
