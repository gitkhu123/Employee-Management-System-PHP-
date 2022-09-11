<?php
session_start();

    if(isset($_POST['sbmt'])){

        $emplyemail = $_POST['email'];
        $emplypassword = $_POST['pwd'];

        

        if($emplyemail != "" && $emplypassword != ""){

            // 1.Connecting to database
            $conn = mysqli_connect("localhost","root","","employee management system");
    
            // 2. Checking connection
            if($conn){

                // select query
                $selectemply = "SELECT * FROM `employee` WHERE `email`='$emplyemail' AND `password`='$emplypassword'";

                // $row = mysqli_query($conn, $selectadmin);
                $row = mysqli_query($conn,$selectemply);
                // print_r($row);

                if(mysqli_num_rows($row)===1){
                    $data = mysqli_fetch_assoc($row);

                    if($data['email']==$emplyemail AND $data['password']==$emplypassword){
                        // echo "Login Successfull";
                            $_SESSION['email'] = $data['email'];

?>
                            <script>
                                alert("LOGIN SUCCESSFULL");
                                window.location.href="indexemployee.php";
                            </script>
<?php
                    }
                    else{
?>
                        <script>
                            alert("Email-id OR Password Wrong");
                            window.location.href="indexemployee.php";
                        </script>
<?php
                    }
                    
                }
            }
            else{
                echo "connection fail". mysqli_error($conn);
            }
        }
    }
    else{
        header("Location: employeelogin.php");
    }

?>
