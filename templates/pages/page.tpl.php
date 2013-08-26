<?php include(dirname(__DIR__) . '/includes/header.php'); ?>

<section class="grid">
    <header>
        <?php print render($title_prefix); ?>
        <h1><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
    </header>

    <?php include(dirname(__DIR__) . '/includes/messages.php'); ?>

    <?php include(dirname(__DIR__) . '/includes/tabs.php'); ?>

    <?php print render($page['content']); ?>
</section>

<?php include(dirname(__DIR__) . '/includes/footer.php'); ?>
