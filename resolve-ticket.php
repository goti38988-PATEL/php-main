<?php

include 'config.php';

if(isset($_POST['update']))
{

$ticket_id = $_POST['ticket_id'];
$status = $_POST['status'];

$sql = "UPDATE tickets
SET status='$status'
WHERE ticket_id='$ticket_id'";

if(mysqli_query($conn,$sql))
{
echo "Ticket Updated Successfully";
}
else
{
echo "Error Updating Ticket";
}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Resolve Ticket</title>

<style>

body{
font-family:Segoe UI;
padding:20px;
}

input,select{
padding:10px;
margin:10px;
width:300px;
}

button{
padding:10px 20px;
background:#2563eb;
color:white;
border:none;
}

</style>

</head>

<body>

<h2>Update Ticket Status</h2>

<form method="POST">

Ticket ID
