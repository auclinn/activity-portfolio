<?php
// update


    $old_email = $_POST['email'];
    $new_username = $_POST['user_id'];
    $new_email =$_POST['new_email'];
    $new_password =$_POST['new_name'];

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

    $newUsername = mysqli_real_escape_string($con, $new_username); 
    $newEmail = mysqli_real_escape_string($con, $new_email); 
    $newPassword = mysqli_real_escape_string($con, $new_password); 

    // Update user data
    $query = "UPDATE users SET email='$newUsername', user_name='$newEmail', pass='$newPassword' WHERE email='$old_email'";
    
    if(mysqli_query($con, $query)) {
        echo "User updated successfully.";
    } else {
        echo "Error updating user: " . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
?>