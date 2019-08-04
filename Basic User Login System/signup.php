<?php
  include_once 'header.php';
?>

<section class="main-container">
  <div class="main-wrapper">
    <form class="signup-form" action="db_connection/db_signup.php" method="POST">
      <input type="text" name="first_name" placeholder="First Name">
      <input type="text" name="last_name" placeholder="Last Name">
      <input type="email" name="email" placeholder="Email">
      <input type="text" name="user_name" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <button type="submit" name="submit">Sign Up</button>
    </form>
  </div>
</section>

</body>
</html>