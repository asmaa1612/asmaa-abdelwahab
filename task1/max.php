<?php


if ($_POST) {
    $first_name = $_POST["first-number"];
    $second_name = $_POST["second-number"];
    $third_name = $_POST["third-number"];
    if ($first_name > $second_name && $first_name > $third_name) {
        $maxLenth = $first_name;
        //nested if :
        if ($second_name < $first_name && $second_name < $third_name) {
            $miniLenth = $second_name;
        } elseif ($third_name < $second_name && $third_name < $first_name) {
            $miniLenth = $third_name;
        }
        //end nested if

    } elseif ($first_name < $second_name && $first_name < $third_name) {
        $miniLenth = $first_name;
    }
    //*****************************************//
    elseif ($second_name > $first_name && $second_name > $third_name) {
        $maxLenth = $second_name;
        //nested if :
        if ($first_name < $second_name && $first_name < $third_name) {
            $miniLenth = $first_name;
        } elseif ($third_name < $second_name && $third_name < $first_name) {
            $miniLenth = $third_name;
        }
        //end nested if

    }
    //*******************************************//

    elseif ($third_name > $second_name && $third_name > $first_name) {
        $maxLenth = $third_name;
        //nested if :
        if ($first_name < $second_name && $first_name < $third_name) {
            $miniLenth = $first_name;
        } elseif ($second_name < $third_name && $second_name < $first_name) {
            $miniLenth = $second_name;
        }
        //end nested if

    }
}

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
    <div class="container">
        <div class="row ">
            <div class="border border-secondary rounded col-5 offset-3">
                <h2 class="text-muted  p-5"> Max&&Mini Number</h2>
                <form action="" method="POST" class="text-muted">
                    <div class="form-group ">
                        <label for="number"> First Number</label>
                        <input type="number" class="form-control alert alert-danger" name="first-number">
                        <small id="emailHelp" class="form-text text-muted">This input is required</small>
                    </div>
                    <div class="form-group offset-">
                        <label for="number">Second Number</label>
                        <input type="number" class="form-control alert alert-success" name="second-number">
                        <small id="emailHelp" class="form-text text-muted">This input is required</small>
                    </div>
                    <div class="form-group offset-">
                        <label for="number">Third Number</label>
                        <input type="number" class="form-control alert alert-warning" name="third-number">
                        <small id="emailHelp" class="form-text text-muted">This input is required</small>
                    </div>
                    <button type="submit" class="  btn btn-secondary mr-3 ">Entre Here</button> <br>
                    <div class="m-2 alert alert-dark">
                        <ul>
                            <li>Maximum Number Is : <span class="font-weight-bold"><?php echo $maxLenth ?? " "; ?></span></li>
                            <li>Minimum Number Is : <span class="font-weight-bold"><?php echo $miniLenth ?? " "; ?></span></li>
                        </ul>
                    </div>
                </form>
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