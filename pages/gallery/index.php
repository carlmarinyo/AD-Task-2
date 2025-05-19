<?php
require BASE_PATH . '/vendor/autoload.php';
require BASE_PATH . '/utils/htmlEscape.utils.php';

require_once BASE_PATH . '/components/cards/gallery-card.component.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/handlers/carData.handler.php';
?>

<?php
head('Gallery');
navHeader();
?>
<body>
    <div class="card-container">
        <?php displayCardForm($carBrands, $carInfo);?>
    </div>

</body>

<?php
footer();
?>