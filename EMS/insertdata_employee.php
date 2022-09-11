<?php
    
    // check submit button click or not
    if(isset($_POST['sbmt'])){

        // get all post data into variable
        $name = $_POST['username'];
        $pwd = $_POST['pwd'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // checking data empty or not
        if($name!="" and $pwd!="" and $fname!="" and $lname!="" and $email!="" and $mobile!=""){

            // start performing query using db [insert]

            // 1.Connecting project to database
            $conn = mysqli_connect("localhost","root","","employee management system");

            //2.checking connection working or not
            if(!$conn){
                die("Error in connecting DB".mysqli_connect_error());
            }
            
            // prepare query
            $insertquery = "INSERT INTO `employee`(`username`, `password`, `fname`, `lname`, `email`, `mobile`) VALUES ('$name','$pwd','$fname','$lname','$email','$mobile')";

            // execute insert query 
            $result = mysqli_query($conn,$insertquery);

            if($result){
                // echo "DATA inserted 'Successfully'";
?>
                <script>
                    alert("DATA INSERTED SUCCESSFULLY");
                    window.location.href = "addemployee.php";
                </script>
<?php
            }
            else{
                echo "error".mysqli_error($conn);
            }

        }
        else{
            echo "fill all the deatils";
            // header("Location: addEmployee.php");
        }

    }
    else{
        header("Location: addEmployee.php");
    }

?>