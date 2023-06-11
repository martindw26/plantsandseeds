
<h5 class="display-5 pb-2">Categories: </h5>
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '<a class="p-2" href="' . esc_url(get_category_link($category->term_id)) . '" class="btn btn-primary rounded-pill">' . esc_html($category->name) . '</a>' . $separator;
    }
    echo trim($output, $separator);
}
?>

<h5 class="display-5 pb-2">Tags: </h5>
<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    foreach ($tags as $tag) {
        echo '<a class="p-2" href="' . esc_url(get_tag_link($tag->term_id)) . '" class="btn btn-secondary rounded-pill">' . esc_html($tag->name) . '</a> ';
    }
}
?>

