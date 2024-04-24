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
    <div>
      <nav>
        <h2 class="logo">RAZ<span>BERYIE</span></h2>
        <ul>
          <li><a href="http://localhost/activity-portfolio/index.php">Home</a></li>
          <li><a href="#">Try the game</a></li>
          <li><a href="http://localhost/activity-portfolio/index.php#abt">About the game</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="http://localhost/activity-portfolio/index.php#service">Developers</a></li>
          
        </ul>
        <a href="#focus" class="btn">Sign In</a>
      </nav>
    </div>

    <div id = "focus" class="content">
      <div class = "spacer">
        <div class="header-modal">
        <h1> Sign In  </h1>

        </div>
          
        <div style = "display:flex; justify-content:center; align-items:center; flex-direction:column;">
          <form name="sign-in-form" action="http://localhost/activity-portfolio/sign-in.php" method="get">
              <label for="email">Email: </label> <br>
              <input type="text" name="email">
              <br><br>
              <label for="pass">Password: </label> <br>
              <input type="text" name="pass"> <br>
              <br>
              <div style = "display:flex; justify-content:center; align-items:center; flex-direction:column;">
                <input class="submit" type="submit">
              </div>
          </form>
        </div>
          <div>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portfolio";

    $email = isset($_GET["email"]) ? $_GET["email"] : '';
    $pass = isset($_GET["pass"]) ? $_GET["pass"] : '';

    // Check if required fields are empty
    if ($email == '' || $pass == '') {
        echo "<br><p style='color: #ffffff90;'>Please fill in all required fields.</p>";
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
          <div class = "new-acc">
          <a href="http://localhost/activity-portfolio/sign-up.php#focus">No account yet? Create one here</a>
          </div>
        </div>

      
    </div>
  </div>


<footer>

</footer>

  




 </body>
</html>