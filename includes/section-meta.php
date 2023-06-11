<div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <?php
      // Get the ACF field value for author_profile_image
      $author_profile_image = get_field('author_profile_image');
    ?>
     <img src="<?php echo $author_profile_image; ?>" style="object-fit: contain;">
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 bg-danger">
       <div class="card-body">
        <h5 class="card-title">By <?php the_author_meta('display_name', 1); ?></h5>
        <p class="card-text"><i>Posted </i><?php echo get_the_date();?></p>
        <p class="card-text"><small class="text-muted">
        <?php
          $categories = get_the_category();
          $separator = ' ';
          $output = '';
          if ( ! empty( $categories ) ) {
              foreach( $categories as $category ) {
                  $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
              }
              echo trim( $output, $separator );
          }
        ?>
        </small></p>
      </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12 bg-success">
        <?php
$author_id = get_the_author_meta('ID');
$author_bio = get_the_author_meta('description', $author_id);

echo $author_bio;
?>
      </div>
    </div>
  </div>
