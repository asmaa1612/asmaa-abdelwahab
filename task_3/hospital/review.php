<?php

include_once('layouts/header.php');

// include_once ('result.php');

?>

<?php
session_start();
?>

<body>
    <div class="container">
        <?php
         $value = 'Are you satisfied with the level of cleanliness?';
        $rows = "<div class='row m-2'>
        <div class=\"col-6\">{$value}</div>";
        $row = 
            ' <div class="form-check form-check-inline col-1">
                    <input class="form-check-input" 
                    type="radio" name="gridRadios" 
                    id="gridRadios1" value="option1" checked></div>';
        
        $rows .= $row;
        $rows .= '</div> <hr>';
        $repeat =str_repeat($rows , 4);

        

        echo  $repeat;
        // $value ='Are you satisfied with the prices of the services?';
        // $rows.=$value;
        // $rows .=$columns ; 
        //  echo $rows ;

        
    //    $value1 ='Are you satisfied with the prices of the services?'; 
    // $value2 = 'Are you satisfied with the nursing service';
    //  $rows .= $value2;
    // echo $rows;
    ?>
    </div>
    
    

</body>
<?php include_once('layouts/scripts.php'); ?>

<!-- <div class="form-check form-check-inline col-1">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            </div>
            <div class="form-check form-check-inline col-1">

                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option2" checked>
            </div>
            <div class="form-check form-check-inline col-1">
                <input class="form-check-inp ut" type="radio" name="gridRadios" id="gridRadios3" value="option3" checked>
            </div>
            <div class="form-check form-check-inline col-1">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4" checked>
            </div>
            <div class="form-check form-check-inline col-1">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios5" value="option5" checked>
            </div> -->