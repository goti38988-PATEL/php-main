<?php
include 'config.php';

$total = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tickets"));

?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Dashboard</title>

<style>

body{
font-family:Segoe UI;
background:#f4f7fa;
padding:30px;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:10px;
box-shadow:0px 2px 8px rgba(0,0,0,0.1);
}

a{
display:block;
width:250px;
padding:12px;
margin:10px 0;
background:#2563eb;
color:white;
text-decoration:none;
text-align:center;
border-radius:5px;
}

</style>

</head>

<body>

<div class="card">

<h1>VConnect IT Customer Dashboard</h1>

<h3>Total Tickets : <?php echo $total; ?></h3>

</div>

create-ticket.phpCreate Ticket</a>

view-tickets.phpView Tickets</a>

manage-tickets.phpTrack Tickets</a>

<a hboard-stats.phpReports</a>

</body>

</html>