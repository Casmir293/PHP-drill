<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Session</title>
</head>

<body>
  <h2>Login</h2>
  <form action="index.php" method="post">
    <label for="name">Name:</label> <br>
    <input type="text" name="username" placeholder="username">
    <br><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submit">Submit</button>
  </form>
</body>

</html>

<?php
echo "{$_POST['username']} <br>";
echo "{$_POST['password']} <br>";
?>