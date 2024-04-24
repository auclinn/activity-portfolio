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
      <a href="http://localhost/activity-portfolio/sign-in.php" class="btn">Sign In</a>
    </nav>

    <div class="content">
    <div class = "spacer">
      <h4>BSU TNEU Lipa</h4>
      <h1> Sign in  </h1>
        <hr>
      <div>
        <form name="sign-in-form" action="http://localhost/activity-portfolio/sign-in.php" method="get">
            <label for="email">Email: </label> <br>
            <input type="text" name="email">
            <br>
            <label for="pass">pass: </label> <br>
            <input type="text" name="pass">
            <input type="submit">
        </form>
        
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portfolio";

    $email = isset($_GET["email"]) ? $_GET["email"] : '';
    $pass = isset($_GET["pass"]) ? $_GET["pass"] : '';

    // Check if required fields are empty
    if ($email == '' || $pass == '') {
        echo "<p style='color: red;'>Please fill in all required fields.</p>";
    } else {
      $con = mysqli_connect($servername, $username, $password, $dbName, 3307);
      if(mysqli_connect_errno()){
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
      }
  
      $email = mysqli_real_escape_string($con, $email);  
      $pass = mysqli_real_escape_string($con, $pass); 
      $query = "SELECT * FROM users WHERE email='$email' AND pass='$pass'";
      
      // Execution..
      $result = mysqli_query($con, $query);

      if($result) {
          if(mysqli_num_rows($result) > 0) { // If a user is found
              session_start();
              $_SESSION["user"] = mysqli_fetch_assoc($result);
              header("Location: user.php"); 
          } else {
              echo "<p style='color:red;'>Invalid Credentials! </p>";
          }
      } else {
          echo "Error executing query: " . mysqli_error($con);
      }
  
      mysqli_close($con); 
    }
?>
      </div>

    </div>
    </div>
  </div>


<footer>

</footer>

  




 </body>
</html>