
<section class="bg-white p-2">
<h4>Categories: </h4>
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if (!empty($categories)) {
    foreach ($categories as $category) {
        $output .= '<a class="tag-cat-btns" href="' . esc_url(get_category_link($category->term_id)) . '"><span class="badge bg-secondary p-2 text-center fs-6 me-2 ms-2 text-decoration-none">' . esc_html($category->name) . '</span></a>' . $separator;

    }
    echo trim($output, $separator);
}
?>

<h4>Tags: </h4>

<?php
$tags = get_the_tags(); // Get the tags for the current post

if ($tags) {
    foreach ($tags as $tag) {
        echo '<a class="tag-cat-btns" href="' . esc_url(get_tag_link($tag->term_id)) . '"><span class="badge bg-secondary p-2 text-center fs-6 me-2 ms-2 text-decoration-none">' . esc_html($tag->name) . '</span></a>';
    }
}
?>

<br><br>
</section>


