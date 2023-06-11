<?php
$categories = get_the_category();
$separator = ' ';
$output = '';

if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '<i>Category: </i><a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)) . '" class="btn btn-primary rounded-pill">' . esc_html($category->name) . '</a>' . $separator;
    }
    echo trim($output, $separator);
}
?>
<br>
<i>Tags: </i>
<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    $tag_names = array(); // Create an empty array to store tag names

    foreach ($tags as $tag) {
        $tag_names[] = $tag->name; // Add each tag name to the array
    }

    $tags_string = implode(', ', $tag_names); // Combine the tag names with a comma and space

    echo '<span class="btn btn-secondary rounded-pill">' . $tags_string . '</span>'; // Output the comma-separated tags
}
?>
<br><br>
