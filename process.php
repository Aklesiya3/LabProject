<?php
session_start();

// Store form data in session
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['birthday'] = $_POST['birthday'];
$_SESSION['department'] = $_POST['department'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['others'] = $_POST['others'];

// Handle hobbies array
if(isset($_POST['hobbies'])) {
    $_SESSION['hobbies'] = $_POST['hobbies'];
} else {
    $_SESSION['hobbies'] = [];
}

// Redirect to success page
header("Location: success.php");
exit();
?>