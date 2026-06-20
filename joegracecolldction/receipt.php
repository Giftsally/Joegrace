<?php
include 'includes/db.php';

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM customers WHERE id='$id'");

$row = mysqli_fetch_assoc($result);
?>

<h2>Payment Receipt</h2>

<p>Name: <?php echo $row['fullname']; ?></p>

<p>Total Amount: ₦<?php echo $row['total_amount']; ?></p>

<p>Paid Amount: ₦<?php echo $row['paid_amount']; ?></p>

<p>Balance: ₦<?php echo $row['balance']; ?></p>

<button onclick="window.print()">Print Receipt</button>