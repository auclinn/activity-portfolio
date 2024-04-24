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
      <a href="http://localhost/act-portfolio/sign-in.php" class="btn">Sign In</a>
    </nav>

    <div class="content">
    
      <h4>BSU TNEU Lipa</h4>
      <h1> Sign Up </h1>
        <hr>
      <div>
        <form name="sign-up-form" action="http://localhost/activity-portfolio/sign-up.php" method="post">
            <label for="user_name">Username: </label> <br>
            <input type="text" name="user_name">
            <br>
            <label for="email">Email: </label> <br>
            <input type="text" name="email">
            <br>
            <label for="pass">pass: </label> <br>
            <input type="text" name="pass">
            <input type="submit">
        </form>
       
      </div>

    </div>

  </div>


<footer>
  <p>Vincent Van Gogh</p>
  <p> For more Portrait, Painting and Art tutorial - please 
    click on the link below to subscribe to my channel:</p>
    <div class="social">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-tiktok"></i></a>
    </div>
    <p class="end">CopyRight By Carlos Yajie</p>
</footer>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "portfolio";

    //create
    $name = isset($_POST["user_name"]) ? $_POST["user_name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';

    // Check if required fields are empty
    if ($name == '' || $email == '' || $pass == '') {
        echo "Error: Please fill in all required fields.";
        exit();
    } else {
        $con = mysqli_connect($servername, $username, $password, $dbName, 3307);
        if(mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();

            exit();
        }

        $Email = mysqli_real_escape_string($con, $email); 
        $Name = mysqli_real_escape_string($con, $name); 
        $Pass = mysqli_real_escape_string($con, $pass); 
        $query = "INSERT INTO users(email,user_name,pass) VALUES ('$Email','$Name','$Pass')";
        
        echo $name, $email, $pass;

        $result = mysqli_query($con, $query);
            
            if($result) {
                    header("Location: sign-in.php");
                    exit(); 
            } else {
                echo "Error executing query: " . mysqli_error($con);
            }

        mysqli_close($con);
    }  

?>

 </body>
</html>