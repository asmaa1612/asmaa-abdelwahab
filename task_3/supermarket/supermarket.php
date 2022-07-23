<?php
session_start();
$tittle = 'Market';

$products =[
    [
     ' prouduct1' => 'Labtop',
    ' price' => '12000 EG',
    ],
    [
     ' prouduct2' => 'Iphone',
    ' price' => '8000 EG',
    ],

    [
     ' prouduct3' => 'Camera',
    ' price' => '10000 EG',
    ],

    [
     ' prouduct3' => 'Ipad',
    ' price' => '5000 EG',
    ]
 ]   ; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_Post['submit'])) {
        if (!empty($_POST['username']) && !empty($_POST['number'])) {

            $_SESSION['username'] = $username;
            $_SESSION['number'] = $number;
            $_SESSION['value'] = $value;
        }
        $table = "<table class=\"table \">
        <thead>
            <tr>";
        foreach ($products[0] as $productKey => $productValue) {
            $table .= "<th>{$productKey}</th>";
            $table .=    "  </tr>
            </thead>
            <tbody>";
   
               $table .=   "<tr>";
                   $table .= "<td>{$productValue}</td>";
   
               
        }
        $table .=   "</tr>";
           $table .=    "</tbody></table>";
       

        //  $request->session()->get('key', 'default');

    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <title><?=$tittle?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container border border-light shadow mt-5 col-8">
        <form method="POST">
            <div class="form-group ">
                <label for="exampleFormControlInput1">User Name</label>

                <input type="name" class="form-control" name="username" placeholder="user name"> <?= $username ?? '' ?>

            </div>
            <!-- select -->
            <div class="form-group">
                <label for="exampleFormControlSelect1"> Select City</label>
                <?php
                $options = ['Cairo', 'Giza', 'Alex', 'Other'];

                $select = "<select class=\"form-control \" id=\"inputGroupSelect01\">";
                foreach ($options as  $value) {
                    $select .= "<option value=\"\">{$value}</option>";
                }
                $select .= "</select>";
                echo $select;
                ?>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">number </label>
                <input type="number" class="form-control" name="number"><?= $number ?? '' ?>
            </div>
            <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block"> Submit</button> <?=$submit ?? '';?> <hr>
             <?= $table  ?>
            <?php  
             if ( $_POST['number']>0) {
                
                $input ="
                 <div class=\"col\"> <input type=\"text\" class=\"form-control \"  name={$_POST['number']}>
                 </div>
                 
                  ";
                //    $input .= $_POST['number'];
                   $repeatInput =str_repeat($input, $_POST['number'] );
                   
                   echo ' <label >Product Name</label>'. $repeatInput ;?>
                   <!-- <h4>price</h4>
                   <?=$repeatInput??'';?> -->
                   <h6>quantities</h6>
                   <?=$repeatInput??'';?>

             <input type="submit" name="add"  class="form-control btn btn-success" value="Add">
            </div> 
            <?php
            if (!empty($repeatInput) ) {
                if (isset($_Post['add'])) {
                    $_SESSION['user'] = $repeatInput;
                }
            }
            ?>
            <!-- <div class="product">
                <h5 class="text-info"><?= $_POST['productName']?></h5>
                <h5 class="text-info"><?= $_POST['price']?></h5>
                <input type="text" name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden_name" value="<?= $_POST['productName']?>">
                <input type="hidden" name="hidden_price" value="<?= $_POST['price']?>">
                <input type="hidden" name="hidden_quantity" value="<?= $_POST['quantity']?>">
                <input type="submit" name="add"  class="form-control btn btn-success" value="Add">
            </div> -->
    
           <?php
             }
           ?> 
        </form>
    </div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>