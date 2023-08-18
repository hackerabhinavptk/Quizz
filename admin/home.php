<?php
session_start();
$base_url='http://localhost/quizz/';
if ($_SESSION['loggedin'] == false) {

    header('location:http://localhost/quizz/admin/login.php');
    exit;
}

?>

<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {
            height: 1500px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <?php include('./sidebar.php') ?>
            </div>

            <div class="col-sm-9">
            <?php include('./breadcrumb.php') ?>
                <?php include('./content.php') ?>

            </div>


        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <footer class="container-fluid">
        <?php include('./footer.php') ?>
    </footer>


</body>

</html>






<!-- 
    <form action="./server.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Question</label>
            <input type="text" name='question' placeholder="enter your Question" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option1</label>
            <input type="text" name='option1' placeholder="enter your option 1" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option2</label>
            <input type="text" name='option2' placeholder="enter your option 2" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option3</label>
            <input type="text" name='option3' placeholder="enter your option 3" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Option4</label>
            <input type="text" name='option4' placeholder="enter your option 4" class="form-control">

        </div>

        <div class="mb-3">
            <label class="form-label">Right Answer</label>
            <input type="text" name='rightanswer' class="form-control">

        </div>

      
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> -->