<?php
if (isset($_POST['submit'])) {
    $max_grade = 100;
    $total_grade = 500;

    $sbject1 = $_POST['physics'];
    $sbject2 = $_POST['Chemistry'];
    $sbject3 = $_POST['Biology'];
    $sbject4 = $_POST['Mathematics'];
    $sbject5 = $_POST['Computer'];
    $total_subject = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    $pre = ($total_subject / $total_grade) * 100;

    if ($pre>= 90 and $pre <= 100) {
        $grade = "A";
        $pre = ($total_subject / $total_grade) * 100;
    } elseif ($pre >= 80 and $pre < 90) {
        $grade = "B";
    } elseif ($pre >= 70 and $pre < 80) {
        $grade = "c";
    } elseif ($pre >= 60 and $pre < 70) {
        $grade = "D";
    } elseif ($pre >= 50 and $pre < 60) {
        $grade = "E";
    }elseif ($pre >= 0 and $pre < 50) {
        $grade = "Faild";
    }else{
        echo "Invalid Register";
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
    <div class="container offset-3 mt-4 ">
        <div class="row text-secondary">
            <div class="col-lg-8   text-secondary h2  m-4">Type Of Number* </div>
            <div class="shadow col-6 p-4" style="background-color: beige;">
                <form action="" method="POST">
                    <div class="form-group " >
                        <label for="number">result of physics</label>
                        <input type="number" class="form-control rounded-pill shadow" name="physics" require>
                        <label for="number">result of Chemistry</label>
                        <input type="number" class="form-control rounded-pill shadow" name="Chemistry" require>
                        <label for="number">result of Biology</label>
                        <input type="number" class="form-control rounded-pill shadow" name="Biology" require>
                        <label for="number">result of Mathematics</label>
                        <input type="number" class="form-control rounded-pill shadow" name="Mathematics" require>
                        <label for="number">result of computre</label>
                        <input type="number" class="form-control rounded-pill shadow" name="computre" require>
                    </div>
                    <button type="submit" class="btn btn-outline-info ">Submit</button>
                    <ul>
                        <li>
                        <?php echo $pre ?? " "; ?>
                        </li>
                    </ul>
                    <!-- <ul class="list-group " style="margin: 10px; ">
                  
                </ul> -->
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