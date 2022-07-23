<?php
session_start();
include_once('layouts/header.php');
include_once('layouts/scripts.php');
// include_once('review.php');

$users = [
    [
        'id' => 1,
        'phone' => '0112184599',
    ],
    [
        'id' => 2,
        'phone' => '01012184599',
    ],
    [
        'id' => 3,
        'phone' => '0112184588',
    ]
];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    if (!empty($_POST['phone'])) {
        if (isset($_POST['enter'])) {
            foreach ($users as $user) {
                if ($user['phone'] == $_POST['phone']) {
                    $_SESSION['user'] = $user;
                    header('location:review.php');
                    die;
                }
            }
            
        }else{echo 'Invalid Number' ;}
    }
    //  $login = $_POST['phone'] ;

    //  if(!empty($login)){ // has value
    //    foreach($users as $user){

    //      if($user['phone'] == $login ){
    //        $_SESSION['user'] = $user;
    //      header('location:review.php');
    //    die;
    //}
    //}

    //}

}

// if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {

//     if (isset($_POST['enter'])) {
//         $login = $_POST['phone'];
//         foreach ($users as $user) {
//             if ($user['phone'] == $login) {
//                 $_SESSION['user'] = $user;
//                 header('location:review.php');
//                 exit();
//             }
//         }
//     }else{echo 'invalide number please try again';}
// }
?>

<body>
    <div class="container">
        <div class="row">
            <form action="" method="POST">
                <div class="form-group offset-">
                    <label for="number">Phone Number</label>
                    <input type="number" class="form-control" value=" <?php echo $login ?? '' ?>" name='phone'>
                    <div class="col-6">
                        <button type="submit" name="enter" class="btn btn-secondary">Enter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>