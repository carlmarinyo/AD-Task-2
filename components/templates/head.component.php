<?php
function head($pageTitle)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <title><?= htmlEscape($pageTitle ?? 'My Shop') ?></title>
            <link  rel ="stylesheet" href="/assets/css/styles.css">
            <?php if ($pageTitle === 'Gallery') : ?>
             <link  rel ="stylesheet" href="/pages/gallery/assets/css/gallery.css">
             <?php endif; ?>
        </head>
            
            <?php
}
?>