<?php
include './includes/db.php';
include './includes/header.php';

if(isset($_POST['submit'])) {

    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $total_amount = $_POST['total_amount'];

    $sql = "INSERT INTO customers(fullname, phone, product, total_amount, balance)
            VALUES('$fullname', '$phone', '$product', '$total_amount', '$total_amount')";

    mysqli_query($conn, $sql);

    echo "<script>alert('Customer Added Successfully')</script>";
}
?>

<h2>Add Customer</h2>

<form method="POST">
<input type="text" name="fullname" placeholder="Customer Name" required>

    <input type="text" name="phone" placeholder="Phone Number" required>

    <input type="text" name="product" placeholder="Product Bought" required>

    <input type="number" name="total_amount" placeholder="Total Amount" required>

    <button type="submit" name="submit">Add Customer</button>

</form>

<!-- <?php include 'includes/footer.php'?> -->