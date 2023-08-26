<?php
  get_header();
  /*Template Name: Search Page*/
?>  

      <div class="container">

        <div class="row">

          <div class="col-lg-8">

<div class="mt-2 bg-secondary text-light rounded p-3 mb-4 border-dark">
<div class=""><h2>Your search results</h2></div>
</div>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>


                                    <div class="container">
                                      <div class="row">

                                        <div class="col">

                                        <?php printf( esc_html__( 'Search Results for: %s', 'your-theme-name' ), '<span>' . get_search_query() . '</span>' ); ?>
            </h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="search-results">

                <?php while ( have_posts() ) : the_post(); ?>
                    <article <?php post_class(); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'No results found.', 'your-theme-name' ); ?></p>
        <?php endif; ?>

                                      </div>

                                      <?php endwhile; ?>
                                <?php endif; ?>


                          </div>


                          <div class="col-lg-4">
    

                        <!-- Category sidebar DMPU-->
                        <?php get_template_part('includes/section','dmpu-block');?>
                        <!-- End Category sidebar DMPU-->

                        <!-- Reviews sidebar project posts-->
                        <?php get_template_part('includes/section','reviews-sidebar');?>
                        <!-- End Reviews sidebar project posts-->

                        <!-- Category sidebar MPU-->
                        <?php get_template_part('includes/section','mpu-block');?>
                        <!-- End Category sidebar MPU-->


                          </div>

                        </div>

                      </div>            


<?php
  get_footer();
?>  