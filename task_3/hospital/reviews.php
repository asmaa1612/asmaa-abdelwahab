<?php
session_start();

include_once('layouts/header.php');

// include_once ('result.php');
$options = [
    'choose', 'bad', 'good', 'very good', 'excelant'
];
$select = "<select class=\"custom-select \" id=\"inputGroupSelect01\">";
foreach ($options as  $value) {
    $select .= "<option value=\"\">{$value}</option>";
}
$select .= "</select>";
// $onther_selected = str_repeat($select , 4);



?>

<body>
    <div class="container">
        <div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Are you satisfied with the level of cleanliness?</label>
                </div>
                <?= $select ?>
                <!-- <?=$onther_selected?> -->
                

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Are you satisfied with the level of cleanliness?</label>
                </div>
                <?= $select ?>
                <!-- <?=$onther_selected?> -->
                

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Are you satisfied with the level of cleanliness?</label>
                </div>
                <?= $select ?>
                <!-- <?=$onther_selected?> -->
                

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Are you satisfied with the level of cleanliness?</label>
                </div>
                <?= $select ?>
                <!-- <?=$onther_selected?> -->
                

            </div>
        </div>
    </div>
    <?php include_once('layouts/scripts.php'); ?>
</body>