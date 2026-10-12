<?php

session_start();

include 'config.php';

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users 
            WHERE email='$email' 
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
    $_SESSION['admin'] = $email;
        header("Location: admin-dashboard.html");
exit();

    }
    else
    {
        echo "Invalid Email Or Password";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>VConnect IT Login</title>
<style>

body{
font-family:Segoe UI;
background:#f4f7fa;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.box{
background:white;
padding:30px;
width:350px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

input{
width:100%;
padding:10px;
margin:10px 0;
}

button{
width:100%;
padding:10px;
background:#2563eb;
color:white;
border:none;
}

</style>
</head>

<body>

<div class="box">

<h2>VConnect IT</h2>

<form method="POST">

<input type="email"
name="email"
placeholder="Email">

<input type="password"
name="password"
placeholder="Password">

<button type="submit"
name="login">
Login
</button>

</form>

</div>

</body>
</html>