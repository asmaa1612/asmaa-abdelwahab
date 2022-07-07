<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST['number']<0) {
        $positive ="Positive Number";
    } elseif ($_POST['number'] >0) {
        $negative = "Negative Number";
    }else{
      $invalid = "This Number Not Positive or Negative" ;
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
        <div class="row">
            <div  class="border border-success col-5" style="height: 200px;">
            <form action="" method="POST">
  <div class="form-group offset-">
    <label for="number">The Number</label>
    <input type="number" class="form-control"   name="number">
    <small id="emailHelp" class="form-text text-muted">This input is required</small>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
  <ul class="list-group " style="margin: 10px; ">
                        <li>  <?php echo $positive??$negative ??$invalid??'';?></li></ul>
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