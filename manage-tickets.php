<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>

<title>Manage Tickets</title>

<style>

body{
font-family:Segoe UI;
padding:20px;
background:#f4f7fa;
}

table{
width:100%;
border-collapse:collapse;
background:white;
}

th{
background:#2563eb;
color:white;
padding:12px;
}

td{
padding:12px;
border:1px solid #ddd;
}

h2{
color:#2563eb;
}

</style>

</head>

<body>

<h2>Manage Tickets</h2>

<table>

<tr>

<th>Ticket ID</th>
<th>Subject</th>
<th>Category</th>
<th>Priority</th>
<th>Status</th>
<th>Engineer ID</th>

</tr>

<?php

$sql = "SELECT * FROM tickets";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['ticket_id']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['priority']; ?></td>

<td><?php echo $row['status']; ?></td>

<td><?php echo $row['assigned_engineer']; ?></td>

</tr>

<?php

}

?>

</table>

</body>

</html>