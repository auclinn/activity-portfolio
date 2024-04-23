<?php
//DELETE
    $email = $_GET['email'];
    $password = $_GET['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portfolio";

    // Establish connection
    $con = mysqli_connect($servername, $username, $password, $dbName);
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $email = mysqli_real_escape_string($con, $email); 
    $pass = mysqli_real_escape_string($con, $pass); 
    $search = "SELECT * FROM users WHERE email='$email' AND username='$name' AND pass='$pass'";

    $result = mysqli_query($con, $search);
    
    if($result) {
        if(mysqli_num_rows($result) > 0) { // If a user is found
            // Delete user data
            $queryDel = "DELETE FROM users WHERE email='$email'";
            if(mysqli_query($con, $query)) {
                echo "User deleted successfully.";
            } else {
                echo "Error deleting user: " . mysqli_error($con);
            }
            header("Location: index.php");
            exit(); 
        } else {
            echo "Failed";
        }
    } else {
        echo "Error executing query: " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
?>
