<?php

    if(isset($_GET['id'])){
        $deleteid = $_GET['id'];

       
        
        // 1.Connecting project to database
        $conn = mysqli_connect("localhost","root","","employee management system");

        //2.checking connection working or not
        if(!$conn){
            die("Error in connecting DB".mysqli_connect_error());
        }
        else{
            $deletequery = "DELETE FROM `employee` WHERE id=$deleteid";

            if(mysqli_query($conn,$deletequery)){
?>

                    <script>
                        alert("DATA DELETED SUCCESSFULLY");
                        window.location.href = "viewemployee.php";
                    </script>

<?php
            }
        }
    }
    else{
        echo "Error in delete ".mysqli_error($conn);
    }

?>