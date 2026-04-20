<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>

<body>

<h1>Login Successful!</h1>

<h2>Welcome <?php echo $_SESSION["user"]; ?> 👋</h2>

<p>You are now inside your dashboard.</p>

<a href="logout.php">Logout</a>

</body>
</html>