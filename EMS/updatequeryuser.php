<?php

    if(isset($_POST['sbmt'])){

         $username = $_POST['username'];
         $pwd = $_POST['pwd'];
         $fname = $_POST['fname'];
         $lname = $_POST['lname'];
         $email = $_POST['email'];
         $mobile = $_POST['mobile'];

         $id = $_GET['id'];

        //  cheking data empty or not
        if($username != "" and $pwd != "" and $fname!="" and $lname!="" and $email!="" and $mobile!=""){

            // establish connectin

            // 1.Connect to database
            $conn = mysqli_connect("localhost","root","","employee management system");

            // 2.check the connection
            if($conn){
                // 3. prepare query
                $updatequery = "UPDATE `employee` SET `username`='$username',`password`='$pwd',`fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile' WHERE id=$id";

                if(mysqli_query($conn,$updatequery)){
                  ?>
                        <script>
                            alert("Data Updated Successfully");
                            window.location.href="viewemployee.php";
                        </script>
                  <?php
                }
                else{
                    echo "Error in updatig data : ".mysqli_error($conn);
                }



            }
            else{
                die("Error".mysqli_connect_error());
            }
        }

    }
    else{

    }

?>