<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
<title>View Tickets</title>

<style>

table{
width:100%;
border-collapse:collapse;
}

th,td{
padding:10px;
border:1px solid black;
}

th{
background:#2563eb;
color:white;
}

</style>

</head>

<body>

<h2>All Tickets</h2>

<table>

<tr>
<th>ID</th>
<th>Category</th>
<th>Priority</th>
<th>Subject</th>
<th>Status</th>
</tr>

<?php

$sql = "SELECT * FROM tickets";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['ticket_id']; ?></td>

<td><?php echo $row['category']; ?></td>

<td><?php echo $row['priority']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['status']; ?></td>

</tr>

<?php
}

?>

</table>

</body>

</html>