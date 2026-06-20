<?php
include 'includes/db.php';
include 'includes/header.php';

$customers = mysqli_query($conn, "SELECT * FROM customers");

if(isset($_POST['submit'])) {

    $customer_id = $_POST['customer_id'];
    $amount_paid = $_POST['amount_paid'];
    $payment_date = $_POST['payment_date'];

    mysqli_query($conn, "INSERT INTO payments(customer?php
inc_id, amount_paid, payment_date)
    VALUES('$customer_id', '$amount_paid', '$payment_date')");
}


    $customer = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customers WHERE id='$customer_id'"));

    $new_paid = $customer['paid_amount'] + $amount_paid;

    $new_balance = $customer['total_amount'] - $new_paid;

    $status = ($new_balance <= 0) ? 'Paid' : 'Unpaid';

    mysqli_query($conn, "UPDATE customers
    SET paid_amount='$new_paid',
        balance='$new_balance',
        payment_status='$status'
    WHERE id='$customer_id'");

    echo "<script>alert('Payment Added Successfully')</script
    }
?>

<h2>Add Payment</h2>

<form method="POST">

<select name="customer_id" required>

<option value="">Select Customer</option>

<?php while($row = mysqli_fetch_assoc($customers)) { ?>

<option value="<?php echo $row['id']; ?>">
    <?php echo $row['fullname']; ?>
</option>
<?php } ?>

</select>

<input type="number" name="amount_paid" placeholder="Amount Paid" required>

<input type="date" name="payment_date" required>

<button type="submit" name="submit">Add Payment</button>

</form>

<?php include 'includes/footer.php';
 ?>