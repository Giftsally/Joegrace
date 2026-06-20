<?php
session_start();

$username = "admin";
$password = "12345";

if(isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if($user == $username && $pass == $password) {

        $_SESSION['admin'] = $username;

        header("Location: dashboard.php");

    } else {

        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body class="login-body">

<div class="login-box">

<h2>
<i class="fa fa-user-shield"></i>
Admin Login
</h2>

<?php
if(isset($error)) {
    echo "<p class='error'>$error</p>";
}
?>

<form method="POST">

<input type="text"
name="username"
placeholder="Enter Username"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit" name="login">
<i class="fa fa-sign-in-alt"></i>
Login
</button>

</form>

</div>

</body>
</html>