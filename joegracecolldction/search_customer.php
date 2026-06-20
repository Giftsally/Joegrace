<?php
include 'includes/db.php';

$search = $_GET['search'];

$result = mysqli_query($conn,
"SELECT * FROM customers
WHERE fullname LIKE '%$search%'");
?>

<table class="table">

<tr>
<th>Name</th>
<th>Phone</th>
<th>Status</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['fullname']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['payment_status']; ?></td>

</tr>

<?php } ?>

</table>