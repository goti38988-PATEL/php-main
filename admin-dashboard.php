<?php

<?php include 'menu.php'; ?>

session_start();

if(!isset($_SESSION['admin']))
{
header("Location: login.php");
exit();
}

?>

<!DOCTYPE html>
<html>

<head>
<title>Admin Dashboard</title>
</head>

<body>

<h1>Welcome To VConnect IT</h1>

<p>Logged In Successfully</p>

logout.php
Logout
</a>

</body>

</html>