<?php include('db.php'); ?>
<h2>Available Rooms</h2>
<?php
$res = $conn->query("SELECT * FROM rooms");
while ($row = $res->fetch_assoc()) {
  echo "<p>Room: {$row['name']} | Type: {$row['type']} | <a href='book.php?id={$row['id']}'>Book</a></p>";
}
?>

