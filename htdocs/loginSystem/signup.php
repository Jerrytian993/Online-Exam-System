<?php
  include_once 'header.php'；
?>
<section class="main-container">
  <div class="main-wrapper">
    <h2>Signup</h2>
    <form class="signup-form" action="include/signup.inc.php" method="post">
      <input type="text" name="first" value="Firstname">
      <input type="text" name="last" value="Lastname">
      <input type="text" name="uid" value="Email">
      <input type="text" name="uid" value="Username">
      <input type="password" name="pwd" value="Password">
      <button type="submit" name="submit">Sign up</button>

    </form>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
