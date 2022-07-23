<?php
$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
    (object)[
        'id' => '3',
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
    ],
];


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
    <div class="container ">
        <div class="row">
            <div class="col-lg-12 text-center text-secondary h2  m-4">PHP DINAMIC TABLE</div>

            <table class="table table-bordered shadow text-center">


                <thead class="thead-light ">
                    <tr>

                         <?php // solution__1__
                        $allKeysOfUsers = array_keys((array)$users[0]);
                        foreach ($allKeysOfUsers as &$Key)
                            echo '<th>' . $Key . '</th>';

                        ?> 
                        <!-- <?php // solution__2__
                        foreach ($users[0] as $user => $value) {?>
                            <th scope="col"><?= $user?></th>
                   <?php    }?> -->
                        <!-- <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">gender</th>
                <th scope="col">Hobbies</th>
                <th scope="col">Activities</th> -->
                    </tr>
                </thead>
                <?php foreach ($users as $user) { ?>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <?= (int)$user->id ?> </th>
                            <td><?= $user->name ?></td>
                            <td>
                                <?php
                                foreach ($user->gender as $gender) {
                                    if ($gender == 'f') {
                                        echo ' Female' . '<br>';
                                    } else {
                                        echo 'Male ' . '<br>';
                                    }
                                } ?>

                            </td>
                            <td>
                                <?php foreach ($user->hobbies  as $hobby) {
                                    echo $hobby . '<br>';
                                } ?>
                            </td>
                            <td>
                                <?php foreach ($user->activities  as $activity) {
                                    echo $activity . '<br>';
                                } ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>