<?php


$success = false;


if ($_SESSION['loggedin'] == false) {

    header('location:http://localhost/quizz/admin/login.php');
    exit;
}

if ($_SESSION['role'] == 2) {
    header('location:http://localhost/quizz/admin/login.php');
    exit;
}


include('../database/connection.php');
$table = 'app_users';

$sql = "SELECT * FROM `$table`";

$res = mysqli_query($connection, $sql);
$output = [];

while ($outputt = mysqli_fetch_assoc($res)) {

    $output[] = $outputt;

} ?>

<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <table class="table table-bordered">

            <thead>
                <tr>
                    <th>image</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>


                </tr>
            </thead>
            <?php foreach ($output as $key => $value) { ?>
                <tbody>
                    <tr>

                        <td>
                            <?php if ($value['image'] == '') { ?>
                                <img class="img-thumbnail" style="width:100px;height:auto"
                                    src="<?php echo 'http://localhost/quizz/uploads/no-thumbnail.png' ?>" />

                            <?php } else { ?>
                                <img class="img-thumbnail" style="width:100px;height:auto"
                                    src="<?php echo 'http://localhost/quizz/uploads/' . $value['image']; ?>" />
                            <?php } ?>
                        </td>
                        <td>
                            <?php

                            print_r($value['first_name']) . '  '; ?>
                            <!-- $base_url='http://localhost/quizz/'; -->

                        </td>

                        <td>
                            <?php

                            print_r($value['last_name']);
                            ?>
                        </td>

                        <td>
                            <?php

                            print_r($value['phone']);
                            ?>
                        </td>

                        <td>
                            <?php

                            print_r($value['email']);
                            ?>
                        </td>

                        <td>
                            <a
                                href="<?php echo $base_url . 'admin/home.php?page=view_marks&'; ?> id=<?php print_r($value['id']); ?>">View
                                Marks</a>


                        </td>





                    </tr>



                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>