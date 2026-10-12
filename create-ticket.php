<?php

<?php include 'menu.php'; ?>

include 'config.php';

if(isset($_POST['submit']))
{

$category = $_POST['category'];
$priority = $_POST['priority'];
$subject = $_POST['subject'];
$description = $_POST['description'];

$sql = "INSERT INTO tickets
(category,priority,subject,description)
VALUES
('$category','$priority','$subject','$description')";

if(mysqli_query($conn,$sql))
{
echo "Ticket Created Successfully";
}
else
{
echo "Error";
}

}

?>

<!DOCTYPE html>
<html>

<head>
<title>Create Ticket</title>
</head>

<body>

<h2>Create Ticket</h2>

<form method="POST">

Category

<select name="category">

<option>Computer</option>
<option>Laptop</option>
<option>Printer</option>
<option>Network</option>
<option>ERP</option>
<option>CCTV</option>

</select>

<br><br>

Priority

<select name="priority">

<option>Low</option>
<option>Medium</option>
<option>High</option>

</select>

<br><br>

Subject

<input type="text"
name="subject">

<br><br>

Description

<textarea
name="description">
</textarea>

<br><br>

<button
name="submit">

Create Ticket

</button>

</form>

</body>

</html>