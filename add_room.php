<?php include('../db.php'); ?>
<form method="POST">
  <input type="text" name="name" placeholder="Room Name" required><br>
  <input type="text" name="type" placeholder="Room Type" required><br>
  <button type="submit" name="add">Add Room</button>
</form>
<?php
if (isset($_POST['add'])) {
  $n = $_POST['name'];
  $t = $_POST['type'];
  $conn->query("INSERT INTO rooms(name, type) VALUES('$n', '$t')");
  echo "Room added.";
}
?>
