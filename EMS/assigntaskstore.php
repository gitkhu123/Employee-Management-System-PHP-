<?php
    
    // check submit button click or not
    if(isset($_POST['sbmt'])){

        // get all post data into variable
        $title = $_POST['title'];
        $description = $_POST['task_description'];
        $ename = $_POST['ename'];
        $email = $_POST['eemail'];
        $assign_date = $_POST['assign_date'];
        $deadline_date = $_POST['deadline_date'];

        // checking data empty or not
        if($title!="" and $description!="" and $ename!="" and $email!="" and $assign_date!="" and $deadline_date!=""){

            // start performing query using db [insert]

            // 1.Connecting project to database
            $conn = mysqli_connect("localhost","root","","employee management system");

            //2.checking connection working or not
            if(!$conn){
                die("Error in connecting DB".mysqli_connect_error());
            }
            
            // prepare query
            $insertquery = "INSERT INTO `task`(`title`, `description`, `assign_date`, `deadline_date`, `employee name`, `employee email`) VALUES ('$title','$description','$assign_date','$deadline_date','$ename','$email')";

            // execute insert query 
            $result = mysqli_query($conn,$insertquery);

            if($result){
                // echo "DATA inserted 'Successfully'";
?>
                <script>
                    alert("ASSIGN TASK SUCCESSFULLY");
                    window.location.href = "assigntask.php";
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
        header("Location: assigntask.php");
    }

?>