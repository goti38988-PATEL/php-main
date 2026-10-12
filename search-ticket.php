<?php

include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Search Ticket</title>

<style>

body{
font-family:Segoe UI;
padding:20px;
}

input{
padding:10px;
width:300px;
}

button{
padding:10px;
background:#2563eb;
color:white;
border:none;
}

table{
width:100%;
margin-top:20px;
border-collapse:collapse;
}

th,td{
border:1px solid #ddd;
padding:10px;
}

th{
background:#2563eb;
color:white;
}

</style>

</head>

<body>

<h2>Search Ticket</h2>

<form method="GET">

<input
type="text"
name="search"
placeholder="Enter Ticket ID or Subject">

<button type="submit">
Search
</button>

</form>

<?php

if(isset($_GET['search']))
{
$search = $_GET['search'];

$sql = "SELECT * FROM tickets
WHERE ticket_id LIKE '%$search%'
OR subject LIKE '%$search%'";

$result = mysqli_query($conn,$sql);

echo "<table>";

echo "<tr>
<th>ID</th>
<th>Subject</th>
<th>Status</th>
<th>Priority</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
echo "<tr>";

echo "<td>".$row['ticket_id']."</td>";

echo "<td>".$row['subject']."</td>";

echo "<td>".$row['status']."</td>";

echo "<td>".$row['priority']."</td>";

echo "</tr>";
}

echo "</table>";

}

?>

</body>
</html>