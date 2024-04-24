<?php
            
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portfolio";
    session_start();
    $user = $_SESSION["user"];
?>

<!doctype html>
<html>
  
 <head>
   <title>
    Portfolio
   </title>
     <link rel="stylesheet" href="style.css">
     
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Noto+Serif+Khojki&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
   
 <body>

  <div class="vin">
    <nav>
      <h2 class="logo">RAZ<span>BERYIE</span></h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Try the game</a></li>
        <li><a href="#abt">About the game</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#service">Developers</a></li>
        
      </ul>
      <a href="http://localhost/activity-portfolio/account.php" class="btn">Account</a>
    </nav>

    <div class="content">
    
      <h4>You are about to delete your account</h4>
      <h1></span></h1>
      <h3> Delete: </h3>
        <div>
            <form name="update-form" action="http://localhost/activity-portfolio/delete-acc.php" method="post">
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="">
            <br>
            <label for="pass">Password:</label>
            <input type="text" name="pass" placeholder="">
            <div>
                <a class="btn" href="http://localhost/activity-portfolio/account.php">Back</a>
                <input class="btn" type="submit" value="Update">
            </div>
        </form>
        </div>

    </div>

  </div>

 <section id="abt">
  <div class="main">
    <div class="abt-text">

    </div>
  </div>
 </section>

 </body>
</html>


<?php
//DELETE
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';
    $userEmail = $user["email"];
    if ($email == '' || $pass == '' ) {
        echo "Error: Please fill in all required fields.";
        exit();
    } else {
        // Establish connection
        $con = mysqli_connect($servername, $username, $password, $dbName, 3307);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $email = mysqli_real_escape_string($con, $email); 
        $pass = mysqli_real_escape_string($con, $pass); 
        $search = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";

        $result = mysqli_query($con, $search);
        
        if($result) {
            if(mysqli_num_rows($result) > 0) { // If a user is found
                // Delete user data
                $queryDel = "DELETE FROM users WHERE email='$userEmail'";
                if(mysqli_query($con, $queryDel)) {
                    echo "User deleted successfully.";
                } else {
                    echo "Error deleting user: " . mysqli_error($con);
                }
                header("Location: index.php");
                exit(); 
            } else {
                echo "Meh, wrong pass or email my man!";
            }
        } else {
            echo "Error executing query: " . mysqli_error($con);
        }
        // Close connection
        mysqli_close($con);
    }


?>
