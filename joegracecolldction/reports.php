<?php
include 'includes/db.php';
include 'includes/header.php';

$total = mysqli_num_rows(mysqli_query($conn,
"SELECT * FROM customers"));

$paid = mysqli_num_rows(mysqli_query($conn,
"SELECT * FROM customers WHERE payment_status='Paid'"));

$unpaid = mysqli_num_rows(mysqli_query($conn,
"SELECT * FROM customers WHERE payment_status='Unpaid'"));
?>

<div class="card">

<canvas id="myChart"></canvas>

</div>

<script>

const ctx = document.getElementById('myChart');

new Chart(ctx, {
type: 'pie',

data: {

labels: ['Paid', 'Unpaid'],

datasets: [{
data: [<?php echo $paid; ?>,
<?php echo $unpaid; ?>]
}]
}

});

</script>

<?php include 'includes/footer.php'; ?>