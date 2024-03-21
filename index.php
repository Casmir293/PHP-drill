<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Session</title>
</head>

<body>
  <h2>Pizza Shopping Cart</h2>
  <p>Each pizza costs $4.55</p>

  <form action="index.php" method="post">
    <label>Quatity</label>
    <input type="number" name="quantity" placeholder="Input qty">
    <br><br>
    <button type="submit">Submit</button>
  </form>
  <br>
</body>

</html>

<?php
$qty = $_POST['quantity'];
$price = 4.55;
$total = $qty * $price;

echo "You ordered <b>{$qty}</b> pizza/s. <br>";
echo "Your total is: <b>\${$total}</b>";
?>