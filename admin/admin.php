<?php
session_start();
$success = false;
if (isset($_SESSION['msg'])) {

    $success = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <?php if ($success != false) {

        ?>
        <div class="alert alert-success">
            <strong>
                <?php echo $success ?>
            </strong>
        </div>

    <?php } ?>

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

        <input type="hidden" name="action" value="add_question"/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>