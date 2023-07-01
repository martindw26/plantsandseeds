
<h4>Categories: </h4>
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '"<span class="badge bg-primary p-2 text-center fs-6">' . esc_html($category->name) . '</a></span>' . $separator;
    }
    echo trim($output, $separator);
}
?>

<h5 class="display-6 pt-4 pb-4">Tags: </h5>

<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    foreach ($tags as $tag) {
        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="btn btn-primary rounded-pill mb-4 mb-md-0">' . esc_html($tag->name) . '</a> ';
    }
}
?>



