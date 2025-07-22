<?php include('db.php'); ?>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit" name="login">Login</button>
</form>
<?php
if (isset($_POST['login'])) {
  $u = $_POST['username'];
  $p = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE username='$u'");
  $row = $res->fetch_assoc();
  if ($row && password_verify($p, $row['password'])) {
    echo "Login successful. <a href='dashboard.php'>Go to Dashboard</a>";
  } else {
    echo "Invalid credentials.";
  }
}
?>
