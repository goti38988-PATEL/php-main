<?php

include 'config.php';

$totalTickets = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM tickets")
);

$progressTickets = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM tickets
WHERE status='In Progress'")
);

$resolvedTickets = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM tickets
WHERE status='Resolved'")
);

?>

<!DOCTYPE html>
<html>

<head>

<title>Engineer Dashboard</title>

<style>

body{
font-family:Segoe UI;
background:#f4f7fa;
padding:20px;
}

.card{
background:white;
padding:20px;
margin:10px;
border-radius:10px;
box-shadow:0px 2px 8px rgba(0,0,0,.1);
width:250px;
display:inline-block;
}

h1{
color:#2563eb;
}

a{
display:block;
width:250px;
padding:12px;
margin:10px;
background:#2563eb;
color:white;
text-decoration:none;
text-align:center;
border-radius:5px;
}

</style>

</head>

<body>

<h1>Engineer Dashboard</h1>

<div class="card">
<h3>Total Tickets</h3>
<h2><?php echo $totalTickets; ?></h2>
</div>

<div class="card">
<h3>In Progress</h3>
<h2><?php echo $progressTickets; ?></h2>
</div>

<div class="card">
<h3>Resolved</h3>
<h2><?php echo $resolvedTickets; ?></h2>
</div>

view-tickets.phpView Tickets</a>

ticket-remarks.phpAdd Remarks</a>

<a href="resolve-ticket.php">Update Status</a>

manage-tickets.phpManage Tickets</a>

</body>

</html>