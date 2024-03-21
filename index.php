<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Session</title>
</head>

<body>
  <?php

  /**
   * Write a PHP script that performs the following operations on an array of user data.
   * Each user data is stored in an associative array with the following keys: id, name, age, and email.
   * Your script should:
   * - Filter out users who are under 18
   * - Sort the remaining users by age in ascending order
   * - Format the output to display each user's information in the following format: ID: [id], Name: [name], Age: [age], Email: [email].
   */

  $users = [
    ['id' => '1', 'name' => 'John Doe', 'age' => '22', 'email' => 'john@test.com'],
    ['id' => '2', 'name' => 'Jane Smith', 'age' => '16', 'email' => 'jane@test.com'],
    ['id' => '3', 'name' => 'Dave Jones', 'age' => '34', 'email' => 'dave@test.com'],
    ['id' => '4', 'name' => 'Sarah Brown', 'age' => '18', 'email' => 'sarah@test.com'],
  ];

  // Filter users who are under 18
  $filteredUsers = array_filter($users, function ($user) {
    return $user['age'] >= 18;
  });

  // Sort the remaining users by age in ascending order
  usort($filteredUsers, function ($a, $b) {
    return $a['age'] - $b['age'];
  });

  // Format and display the output
  foreach ($filteredUsers as $user) {
    echo "ID: {$user['id']}, Name: {$user['name']}, Age: {$user['age']}, Email: {$user['email']} <br> <br>";
  }
  ?>
</body>

</html>