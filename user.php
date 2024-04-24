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
        <li><a href="#">Home</a></li>
        <li><a href="#">Try the game</a></li>
        <li><a href="#abt">About the game</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#service">Developers</a></li>
        
      </ul>
      <a href="http://localhost/activity-portfolio/account.php" class="btn">Account</a>
    </nav>

    <div class="content">
    
      <h4>Welcome</h4>
      <h1>Hi, <span>
        <?php
          echo $user["user_name"];
        ?>
      </span></h1>
      <h3> Are you ready to dive into the sand and dunes, tunnels and chambers, and explore the university in one sitting? </h3>
      <div class="email-bar">
        <form>
          <input type="email" name="email" id="mail" placeholder="Email us?">
          <input type="submit" name="submit" value="Lets Start">
        </form>
      </div>
      <div>
        button place holder? basta kung anong want nyo palabasin
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