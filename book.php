<?php include('db.php'); ?>
<?php
$id = $_GET['id'];
$conn->query("INSERT INTO bookings(room_id) VALUES($id)");
echo "Room booked successfully. <a href='dashboard.php'>Back to Dashboard</a>";
?>
