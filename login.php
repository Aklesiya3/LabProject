<?php
session_start();

$correct_username = "beimni";
$correct_password = "2314";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if ($username == $correct_username && $password == $correct_password) {

        $_SESSION["user"] = $username;

        // redirect to dashboard
        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid username or password";
    }
}
?>