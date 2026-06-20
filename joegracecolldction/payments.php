<?php
include 'includes/db.php';
include 'includes/header.php';

$sql = "SELECT payments.*, customers.fullname
        FROM payments
        INNER JOIN customers
        ON payments.customer_id = customers.id";

$result = mysqli_query($conn, $sql);
?>

<h2>Payment History</h2>

<table cl<tr>
    <th>ID</th>
    <th>Customer</th>
    <th>Amount Paid</th>
    <th>Payment Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td>₦<?php echo $row['amount_paid']; ?></td>
    <td><?php echo $row['payment_date']; ?></td>
</tr>

<?php } ?>ass="table">
</table>

<?php include 'includes/footer.php'; 
?>
