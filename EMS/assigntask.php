<?php
session_start();
if(isset($_SESSION['email'])){

}
else{
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="css/style.css">

    <title>Add Employee</title>
    <style>
    /* body{
            background-color : #f052dd;

        } */
    </style>
</head>

<body class="bg-primary">
    <!-- header section starts -->
    <header class="bg-light">
        <?php include("include/header.php"); ?>
    </header>
    <!-- header section ends -->

    <!-- form starts -->
    <section class="container py-1">
        <div class="row justify-content-center py-3">
            <div class="col-12 col-md-6 py-2">
                <form class="card p-4" method="POST" action="assigntaskstore.php">
                    <div class=row g-3>
                        <h2 class="text-center ">Assign Task</h2>
                        <!-- title input starts -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Task Title</label>
                            <input type="text" class="form-control" required id="title" name="title">
                        </div>
                        <!-- title input ends -->

                        <!-- description input starts -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Task Description</label>
                            <textarea name="task_description" id="description" cols="30" rows="8" class="form-control"></textarea>
                        </div>
                        <!-- description input ends -->

                        <!-- ename input starts -->
                        <div class="mb-3 col-6">
                            <label for="ename" class="form-label">Employee Name</label>
                            <input type="text" required class="form-control" id="ename" name="ename">
                        </div>
                        <!-- ename input ends -->

                        <!-- email input starts -->
                        <div class="mb-3 col-6">
                            <label for="eemail" class="form-label">Employee email</label>
                            <input type="text" required class="form-control" id="eemail" name="eemail">
                        </div>
                        <!-- email input ends -->

                        <!-- assign date input starts -->
                        <div class="mb-3 col-6">
                            <label for="assign_date" class="form-label">Assign Date</label>
                            <input type="date" required class="form-control" id="assign_date" name="assign_date">
                        </div>
                        <!-- assign date input ends -->

                        <!-- deadline date input starts -->
                        <div class="mb-3 col-6">
                            <label for="deadline_date" class="form-label">Deadline Date</label>
                            <input type="date" required class="form-control" id="deadline_date" name="deadline_date">
                        </div>
                        <!-- deadline date input ends -->
                    </div>

                    <button type="submit" class="btn btn-primary" name="sbmt">Assign</button>
                </form>
            </div>
        </div>
    </section>
    <!-- form ends -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>