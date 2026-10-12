<?php

include 'config.php';

if(isset($_POST['save']))
{
    $ticket_id = $_POST['ticket_id'];
    $user_id = 1;
    $comment = $_POST['comment'];

    $sql = "INSERT INTO ticket_comments
    (ticket_id,user_id,comment)
    VALUES
    ('$ticket_id','$user_id','$comment')";

    if(mysqli_query($conn,$sql))
    {
        echo "Remark Added Successfully";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Ticket Remarks</title>
</head>

<body>

<h2>Add Engineer Remark</h2>

<form method="POST">

Ticket ID

<br>

<input
type="number"
name="ticket_id"
required>

<br><br>

Remark

<br>

<textarea
name="comment"
rows="5"
cols="50"
required></textarea>

<br><br>

<button
type="submit"
name="save">

Save Remark

</button>

</form>

</body>

</html>