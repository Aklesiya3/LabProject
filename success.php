<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Success</title>
</head>
<body>

<h2>Registration Successful 🎉</h2>

<p><b>First Name:</b> <?php echo $_SESSION['fname']; ?></p>
<p><b>Last Name:</b> <?php echo $_SESSION['lname']; ?></p>
<p><b>Department:</b> <?php echo $_SESSION['department']; ?></p>
<p><b>Gender:</b> <?php echo $_SESSION['gender']; ?></p>

<p><b>Hobbies:</b>
<?php
echo implode(", ", $_SESSION['hobbies']);
?>
</p>

<p><b>Others:</b> <?php echo $_SESSION['others']; ?></p>

</body>
</html>