<div class="button-container">
    <a href="<?php the_permalink(); ?>" class="btn btn-action">
        <?php
        $custom_text = get_post_meta(get_the_ID(), "read_more_button_custom_text", true);
        if (! empty($custom_text)){
            echo "<p>" . $custom_text . "</p>" . " <i class='fa fa-chevron-right' aria-hidden='true'></i>";
        } else {
            echo "<p>Continue reading</p><i class='fa fa-chevron-right' aria-hidden='true'></i>";
        }
        ?>
    </a>
</div>