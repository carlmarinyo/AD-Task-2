<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';

require_once BASE_PATH . '/components/cards/note.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
?>

<?php
head('Product List');
navHeader();
?>
<body>
        <div class="landing-message">
            <h1>Welcome to  <span>Car Gallery!</span></h1>
            <h2>Discover popular car brands with images and descriptions.</h2>
            <a href="/pages/gallery/index.php" class=".gallery-button">Check Gallery</a>
    </div>
</body>

<?php
footer();
?>