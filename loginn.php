<?php
if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  echo "Username: ".$username."<br>";
  echo "Password: ".$password."<br>";
}
?>

<form method="post">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username"><br>
  
  <label for="password">Password:</label>
  <input type="password" name="password" id="password"><br>
  
  <input type="submit" name="submit" value="Submit">
</form>
