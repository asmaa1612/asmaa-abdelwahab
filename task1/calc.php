<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container  ">
        <div class="row ">
            <div class="col-12  text-center text-secondary h1  mt-5">CALCULATE</div>
            <div class="border border-success shadow-sm p-3 mb-5 bg-white rounded ">
                <form action="" method="POST">
                    <div class="form-group offset-">
                        <label for=""> First Number :</label>
                        <input type="number" name="fNumber " class="form-control" id=""><br>
                        <label for="">Second Number</label>
                        :<input type="number" name="sNumber" id="" class="form-control"><br>
                        <p>Choose the operators</p>
                        <select name="operators" class="form-control shadow p-3 mb-5 bg-white rounded">
                            <option value=""></option>
                            <option value="add">+</option>
                            <option value="subtract">-</option>
                            <option value="multi">*</option>
                            <option value="">**</option>
                            <option value="divide">/</option>
                            <option value="rest">%</option>
                        </select>
                        <div class="text-center">
                        <input type="submit" value="calculate" name="submit" class="btn btn-info">
                        <input type="reset" value="clear" class="btn btn-danger pr-3 ml-2">
                        </div>

                    </div>

                </form>
                <h4 class="text-center">the Answer :</h4>
                <div id="answer">
                    <?php
                    if ($_POST['submit']) {
                        $num1 = $_POST['fNumber'];
                        $num2 = $_POST['sNumber'];
                        $assign  = $_POST['operators'];

                        switch ($assign) {
                            case ' ':
                                echo 'You must have assignmnt operator';
                                break;
                            case '+':
                                $add =$num1 + $num2;
                                echo $add ;
                                break;
                            case '-':
                                $subtract =$num1 - $num2;
                                echo $subtract ;
                                
                                break;
                            case '*':
                                $multi =$num1 * $num2;
                                echo $multi ;
                                break;
                            case '/':
                                $divide =$num1 / $num2;
                                echo $divide ;
                                
                                break;
                            case '%':
                               $rest=  $num1 %  $num2;
                               echo $rest;
                                break;

                            
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>