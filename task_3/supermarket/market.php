 <?php
 session_start();
include_once('layouts/header.php');
 if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    if ( !empty($_POST['username'])&& !empty($_POST['number'])) {

        if (isset($_POST['enter'])) {
            $_SESSION['enter'] = $enter;

        }

    }
 }
 
 ?>

 <body>
 <div class="container">
        <div class="row">
            <form action="" method="POST">
                <div class="form-group offset-2 col-12">
                    <label >User Name</label>
                    <input type="text" class="form-control" value="" name='username'>
                    <label >Choose City</label>
                    <?php 

                    $options =['Cairo' ,'Giza', 'Alex', 'Other'];
                    $select = "<select class=\"custom-select \" id=\"inputGroupSelect01\">";
foreach ($options as  $value) {
    $select .= "<option value=\"\">{$value}</option>";
}
$select .= "</select>";

                     ?>
                     <?= $select ?>
                    <label for="number">Number of varieties</label>
                    <input type="number" class="form-control" value=" <?php  ?>" name='number'>
                    <div class="col-6">
                        <button type="submit" name="enter" class="btn btn-secondary">Enter</button>
                        <?=$enter ?? '';?>
                 <?php       if ( $_POST['number']>0) {
                    
           $input ="<input type=\"text\" class=\"form-control \"  name={$_POST['number']}> ";
        //    $input .= $_POST['number'];
           $repeatInput =str_repeat($input, $_POST['number'] );
           
           echo ' <label >Product Name</label>'. $repeatInput ;?>
           <h4>price</h4>
           <?=$repeatInput??'';?>
           <h6>quantities</h6>
           <?=$repeatInput??'';?>
           
           
 
    

 
                    </div>
                </div>
            </form>
            <?php   }?>

            <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <!-- <th width="17%">Remove Item</th> -->
            </tr>
            
        </div>
    </div>
   <? include_once('layouts/scripts.php'); ?>
 </body>