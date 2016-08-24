<?php
$posttags = get_the_tags();
if ($posttags) {
    foreach($posttags as $tag) {
        $tagName = $tag->name;
        $tagLink = get_tag_link($tag->term_id);
        echo '<a href="' . $tagLink . '">' . $tagName . '</a>' . ' ';
    }
}
?>