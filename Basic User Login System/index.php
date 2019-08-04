<?php
  include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <h2>Home Page</h2>
    <?php
      if(isset($_SESSION['u_id'])){   //Checking Session['u_id'] is set or not
        echo "You are logged in!";
      }

    ?>
  </div>
</section>


</body>
</html>