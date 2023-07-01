
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

<h4>Tags: </h4>

<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    foreach ($tags as $tag) {
        echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '"<span class="badge bg-primary p-2 text-center fs-6">' . esc_html($tag->name) . '</a></span>';
    }
}
?>

<br><br>



