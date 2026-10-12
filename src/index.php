<?php
require "config.php";
$result = $conn->query("SELECT * FROM userdata");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Inserted Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body class="p-4">
  <h2>Inserted Data</h2>
  <table class="table table-bordered">
    <tr>
      <th>ID</th><th>First Name</th><th>Last Name</th>
      <th>Contact</th><th>Email</th><th>Address</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= htmlspecialchars($row["fname"]) ?></td>
      <td><?= htmlspecialchars($row["lname"]) ?></td>
      <td><?= htmlspecialchars($row["contactno"]) ?></td>
      <td><?= htmlspecialchars($row["email"]) ?></td>
      <td><?= htmlspecialchars($row["address"]) ?></td>
    </tr>
    <?php } ?>
  </table>
  <a href="signup.html">Back to form</a>
</body>
</html>