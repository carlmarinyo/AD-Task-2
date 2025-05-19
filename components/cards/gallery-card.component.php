<?php
function displayCardForm($carBrands, $carInfo)
{
    foreach ($carBrands as $brand):
        ?>
        <a href="#" class="card">
            <img src="<?php echo $carInfo[$brand]['img']; ?>" alt="<?php echo $brand; ?> logo" class="card-img">
            <h5 class="card-title"><?php echo $brand; ?></h5>
            <p class="card-desc"><?php echo $carInfo[$brand]["desc"]; ?></p>
        </a>
        <?php
    endforeach;
}
?>