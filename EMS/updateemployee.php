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

                <?php
                    $id = $_GET['id'];

                    // 1.Connecting project to database
                    $conn = mysqli_connect("localhost","root","","employee management system");

                    //2.checking connection working or not
                    if(!$conn){
                        die("Error in connecting DB".mysqli_connect_error());
                    }
                    else{
                        $selectquery =" SELECT * FROM `employee` WHERE id=$id;";

                        $result = mysqli_query($conn,$selectquery);

                        while($row = mysqli_fetch_assoc($result)){
                            
?>
                            <form class="card p-4" method="POST" action="updatequeryuser.php?id=<?php echo $row['id']; ?>">
                                <h2 class="text-center ">Update Employee Form</h2>
                                <!-- username input starts -->
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" required id="username" name="username" value="<?php echo $row['username']; ?>">
                                </div>
                                <!-- username input ends -->

                                <!-- pasword input starts -->
                                <div class="mb-3">
                                    <label for="pwd" class="form-label">Password</label>
                                    <input type="text" required class="form-control" id="pwd" name="pwd" value="<?php echo $row['password']; ?>">
                                </div>
                                <!-- pasword input ends -->

                                <!-- fname input starts -->
                                <div class="mb-3">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input type="text" required class="form-control" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
                                </div>
                                <!-- fname input ends -->

                                <!-- lname input starts -->
                                <div class="mb-3">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input type="text" required class="form-control" id="lname" name="lname" value="<?php echo $row['lname']; ?>">
                                </div>
                                <!-- lname input ends -->

                                <!-- email input starts -->
                                <div class="mb-3">
                                    <label for="Email" class="form-label">Email address</label>
                                    <input type="email" required class="form-control" id="Email"  name="email" value="<?php echo $row['email']; ?>">
                                </div>
                                <!-- email input ends -->

                                <!-- mobile input starts -->
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Mobile No</label>
                                    <input type="text" required class="form-control" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>">
                                </div>
                                <!-- mobile input ends -->

                                <button type="submit" class="btn btn-primary" name="sbmt">Update Employee</button>
                            </form>
<?php

                        }
                    }
?>

              
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