<?php
session_start();
    if(isset($_POST['sbmt'])){
        $adminemail = $_POST['email'];
        $adminpassword = $_POST['pwd'];
        if($adminemail != "" && $adminpassword != ""){
            // 1.Connecting to database
            $conn = mysqli_connect("localhost","root","","employee management system");  
            // 2. Checking connection
            if($conn){
                // select query
                $selectadmin = "SELECT * FROM `admin` WHERE `email`='$adminemail' AND `password`='$adminpassword'";
                // $row = mysqli_query($conn, $selectadmin);
                $row = mysqli_query($conn,$selectadmin);
                // print_r($row);
                if(mysqli_num_rows($row)===1){
                    $data = mysqli_fetch_assoc($row);
                    if($data['email']==$adminemail && $data['password']==$adminpassword){
                        // echo "Login Successfull";
                            $_SESSION['email'] = $data['email'];
?>
                            <script>
                                alert("LOGIN SUCCESSFULL");
                                window.location.href="index.php";
                            </script>
<?php
                    }
                    else{
?>
                        <script>
                            alert("Email-id OR Password Wrong");
                            window.location.href="login.php";
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
        header("Location: login.php");
    }
?>
