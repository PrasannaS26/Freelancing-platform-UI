<?php
include "db.php";

if(isset($_POST['login'])){

    $u = $_POST['username'];
    $p = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)==1){
        $_SESSION['user']=$u;
        header("Location: dashboard.php");
    }else{
        echo "<script>alert('Invalid Login');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<style>
body{
    margin:0;
    font-family:Arial;
    background: linear-gradient(120deg,#1e3c72,#2a5298);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.box{
    background:white;
    padding:40px;
    width:320px;
    border-radius:12px;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
    text-align:center;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#1e3c72;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#0f2557;
}

h2{
    margin-bottom:20px;
}
</style>
</head>

<body>

<div class="box">
    <h2>Freelancing Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button name="login">Login</button>
    </form>
</div>

</body>
</html>