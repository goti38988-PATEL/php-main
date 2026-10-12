<?php

include 'config.php';

if(isset($_POST['register']))
{

$company_name = $_POST['company_name'];
$contact_person = $_POST['contact_person'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

$sql = "INSERT INTO clients
(company_name,contact_person,mobile,email)
VALUES
('$company_name','$contact_person','$mobile','$email')";

if(mysqli_query($conn,$sql))
{
echo "Customer Registered Successfully";
}
else
{
echo "Registration Failed";
}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Customer Registration</title>

<style>

body{
font-family:Segoe UI;
padding:30px;
background:#f4f7fa;
}

input{
width:350px;
padding:10px;
margin:10px;
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

<h2>Customer Registration</h2>

<form method="POST">

<input
type="text"
name="company_name"
placeholder="Company Name"
required>

<br>

<input
type="text"
name="contact_person"
placeholder="Contact Person"
required>

<br>

<input
type="text"
name="mobile"
placeholder="Mobile Number"
required>

<br>

<input
type="email"
name="email"
placeholder="Email Address"
required>

<br><br>

<button
type="submit"
name="register">

Register Customer

</button>

</form>

</body>

</html>