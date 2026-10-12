<?php

include 'config.php';

$total = 0;
$open = 0;
$progress = 0;
$resolved = 0;
$engineers = 0;

$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM tickets");
$row =mysqli_fetch_assoc($result);
$total = $row['total'];

$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM tickets WHERE status='Open'");
$row = mysqli_fetch_assoc($result);
$open = $row['total'];

$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM tickets WHERE status='In Progress'");
$row = mysqli_fetch_assoc($result);
$progress = $row['total'];

$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM tickets WHERE status='Resolved'");
$row = mysqli_fetch_assoc($result);
$resolved = $row['total'];

$result = mysqli_query($conn,"SELECT COUNT(*) as total FROM engineers");
$row = mysqli_fetch_assoc($result);
$engineers = $row['total'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Stats</title>
</head>
<body>
<h1>VConnect IT Dashboard</h1>

<h3>Total Tickets: <?php echo $total; ?></h3>

<h3>Open Tickets: <?php echo $open; ?></h3>

<h3>In Progress