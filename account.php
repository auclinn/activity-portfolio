<?php
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
        <li><a href="http://localhost/activity-portfolio/index.php">Home</a></li>
        <li><a href="#">Try the game</a></li>
        <li><a href="http://localhost/activity-portfolio/index.php#abt">About the game</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="http://localhost/activity-portfolio/index.php#service">Developers</a></li>
        
      </ul>
      <a href="http://localhost/activity-portfolio/user.php" class="btn">Account</a>
    </nav>

    <div class="content">
    <div class = "spacer">
      <h4>What do you want to do?</h4>
      <h1></span></h1>
      <h3>Your Deets! </h3>
      <div>
        <p style = "font-size: 20px; margin-bottom: 5px;"><span>Email:</span> 
            <?php
                echo $user["email"];
            ?>
        </p>
        <p style = "font-size: 20px; margin-bottom: 5px;">
            <span>Username:</span>
            <?php
                echo $user["user_name"];
            ?>
        </p>
        <p style = "font-size: 20px;">
            <span>Password:</span>
            <?php
                echo $user["pass"];
            ?>
        </p>
        <br><br>
      </div>
      <div>
       <a style = "margin-right: 3px;" class="btn" href="http://localhost/activity-portfolio/delete-acc.php">Delete Account</a>
       <a style = "margin-left: 3px;" class="btn" href="http://localhost/activity-portfolio/update.php">Update Account</a>
      </div>
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