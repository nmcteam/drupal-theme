<?php
/**
 * @file
 * Theme the more link.
 *
 * - $view: The view object.
 * - $more_url: the url for the more link.
 * - $link_text: the text for the more link.
 *
 * @ingroup views_templates
 */
?>
<div class="more">
    <a href="<?php echo $more_url ?>">
        <?php echo $link_text; ?>
    </a>
</div>
