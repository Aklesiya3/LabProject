<?php
session_start();

$correct_username = "Aster";
$correct_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username == $correct_username && $password == $correct_password) {

        $_SESSION["user"] = $username;

        // redirect to dashboard
        header("Location: logindashboard.php");
        exit();

    } else {
        echo "Invalid username or password";
    }
}
?>