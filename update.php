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
      <a href="http://localhost/activity-portfolio/update.php" class="btn">Account</a>
    </nav>

    <div class="content">
    
      <h4>You are about to update your account</h4>
      <h1></span></h1>
      <h3> Update: </h3>
      <div>
        <h3>Email: 
            <?php
                echo $user["email"];
            ?>
        </h3>
        <h3>
            Username:
            <?php
                echo $user["user_name"];
            ?>
        </h3>
        <h3>
            Password:
            <?php
                echo $user["pass"];
            ?>
        </h3>


        <form name="update-form" action="http://localhost/activity-portfolio/update.php" method="post">
            <label for="new-email">New Email:</label>
            <input type="email" name="new-email" placeholder="">
            <br>
            <label for="new-pass">New Password:</label>
            <input type="text" name="new-pass" placeholder="">
            <br>
            <label for="user-name">New Username:</label>
            <input type="text" name="user-name" placeholder="">
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
// update

    $old_email = $user["email"];
    $new_username =isset($_POST["user-name"]) ? $_POST["user-name"] : '';
    $new_email = isset($_POST["new-email"]) ? $_POST["new-email"] : '';
    $new_password = isset($_POST["new-pass"]) ? $_POST["new-pass"] : '';



    if ($new_password == '' || $new_username == '' || $new_email == '') {
        echo "Please fill in all required fields.";
        exit();
    } else {
        $con = mysqli_connect($servername, $username, $password, $dbName, 3307);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();

            exit();
        }

        $newUsername = mysqli_real_escape_string($con, $new_username); 
        $newEmail = mysqli_real_escape_string($con, $new_email); 
        $newPassword = mysqli_real_escape_string($con, $new_password); 

        
        // Update user data
        $query = "UPDATE users SET email='$newEmail', user_name='$newUsername', pass='$newPassword' WHERE email='$old_email'";
            
        if(mysqli_query($con, $query)) {
            header("Location: sign-in.php");
            exit(); 
        } else {
            echo "Error updating user: " . mysqli_error($con);
        }
        mysqli_close($con);
    }  
?>