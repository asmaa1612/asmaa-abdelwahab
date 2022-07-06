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
    <div class="container">
        <div class="row shadow rounded" style="background-color: #f3f5ff; width:800px;">
        <div class="col-lg-12 text-center text-secondary h1  m-4">CALCULATOR</div>
        <div class="col-3"></div>
            <div class="col-6 border  shadow-sm p-3 mb-5 bg-white rounded float-right">
                <form action="" method="post">
                    <label class="text-muted p-1">Entre The first number</label>
                    <input type="number" name="fNumber" class="shadow-sm form-control">
                    <br>
                    <label  class="text-muted p-1">Entre The second number</label>
                    <input type="number" name="sNumber" class=" shadow-sm form-control">
                    <br>
                    <p class="text-muted p-1">Choose the operators</p>
                    <select name="Operator" class=" shadow-sm form-control col-6">
                        <option></option>
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                        <option>%</option>
                    </select>
                    <br>
                    <input type="submit" name="submit" value="Calculate" class="btn btn-danger">
                    <input type="reset" value="Clear" class="btn btn-info ml-3">
                </form>
                <br>
                <h4>Result Of Calculate Is :</h4>
                <div class="alert alert-info font-weight-bold col-8">
                    <?php
                    if (isset($_POST['submit'])) {
                        $num_1 = $_POST['fNumber'];
                        $num_2 = $_POST['sNumber'];
                        $assign = $_POST['Operator'];

                        switch ($assign) {
                            case '':
                                echo 'Choose One Operator';
                                break;
                            case '+':
                                echo  $num_1 + $num_2;
                                break;
                            case '-':
                                echo $num_1 - $num_2;
                                break;
                            case '*':
                                echo $num_1 * $num_2;
                                break;
                            case '/':
                                echo $num_1 / $num_2;
                                break;
                            case '%':
                                echo $num_1 % $num_2;
                                break;

                            default:
                                echo 'Invalid The Operation' ;
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