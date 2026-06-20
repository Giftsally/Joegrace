
<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<?php
include 'includes/db.php';
include 'includes/header.php';

$totalCustomers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customers"));
$paidCustomers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customers WHERE payment_status='Paid'"));
$unpaidCustomers = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customers WHERE payment_status='Unpaid'"));
?>

<div class="card">
    <h2>Total Customers: <?php echo $totalCustomers; ?></h2>
</div>

<div class="card">
    <h2>Paid Customers: <?php echo $paidCustomers; ?></h2>
</div>

<div class="card">
    <h2>Unpaid Customers: <?php echo $unpaidCustomers; ?></h2>
</div>

<?php include 'includes/footer.php';
 ?>