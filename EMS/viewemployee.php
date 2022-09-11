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

    <title>View Employee</title>
</head>

<body class="bg-primary">

    <header class="bg-light">
       <?php include("include/header.php"); ?>
    </header>



    <section class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-12 col-md-10">
                <table class="table table-hover table-responsive bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Fname</th>
                        <th>Lname</th>
                        <th>Email</th>
                        <th>Mobile No.</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>

                    <?php

                        // 1.connecting project to database
                        $conn = mysqli_connect("localhost","root","","employee management system");

                        // checking connection woring or not
                        if(!$conn){
                            die("Error in connectinfg db" .mysqli_connect_error());
                        }
                        else{
                            // select query for user
                            $userselect = "SELECT * FROM `employee`";

                            // execute select query
                            $result = mysqli_query($conn,$userselect);

                            if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
?>

                                    <!-- executr loop with html -->
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['username']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['mobile']; ?></td>
                                        <td><a href="updateemployee.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a></td>
                                        <td><a href="deleteemployee.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>


<?php
                                }
                            }
                        }
                    ?>

                    
                </table>
            </div>
        </div>
    </section>


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