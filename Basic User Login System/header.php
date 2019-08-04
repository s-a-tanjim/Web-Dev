<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Basic User Login System</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<header>
  <nav>
    <div class="main-wrapper">
      <ul>
        <li><a href="index.php">Home</a></li>
      </ul>
    </div>
    <div class="nav-login">
      <?php
      /* If logged in, shows logout button  */
        if(isset($_SESSION['u_id'])){   //Checking Session['u_id'] is set or not
            echo '<form action="db_connection/db_logout.php" method="POST">
            <button type="submit" name="submit">Logout</button>
          </form>';

        }
        else{
            echo '<form action="db_connection/db_signin.php" method="POST">
            <input type="text" name="user_name" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Login</button>
            </form>
            <a href="signup.php">SignUp</a>';
        }
      ?>

    </div>
  </nav>
</header>