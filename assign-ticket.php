<?php

<?php include 'menu.php'; ?>

include 'config.php';

if(isset($_POST['assign']))
{
    $ticket_id = $_POST['ticket_id'];
    $engineer_id = $_POST['engineer_id'];

    $sql = "UPDATE tickets
            SET assigned_engineer='$engineer_id',
            status='In Progress'
            WHERE ticket_id='$ticket_id'";

    mysqli_query($conn,$sql);

    echo "Engineer Assigned Successfully";
}

?>

<!DOCTYPE html>
<html>

<head>
<title>Assign Ticket</title>
</head>

<body>

<h2>Assign Engineer To Ticket</h2>

<form method="POST">

Ticket ID

<input type="number"
name="ticket_id"
required>

<br><br>

Engineer

<select name="engineer_id">

<?php

$result = mysqli_query($conn,
"SELECT * FROM engineers");

while($row = mysqli_fetch_assoc($result))
{
?>

<option value="<?php echo $row['engineer_id']; ?>">

<?php echo $row['engineer_name']; ?>

</option>

<?php
}

?>

</select>

<br><br>

<button name="assign">

Assign Ticket

</button>

</form>

</body>

</html>