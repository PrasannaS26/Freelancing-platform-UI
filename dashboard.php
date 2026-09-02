<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        body{
            margin:0;
            font-family:Arial;
            background:#f4f6f9;
        }

        .header{
            background:#1e3c72;
            color:white;
            padding:15px;
            text-align:center;
        }

        /* SHRINK TOP CONTENT */
        .header h2{
            font-size:18px;
            margin:0;
        }

        /* CENTER AREA */
        .container{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height:80vh;
        }

        /* BOX ROW CENTER */
        .card-section{
            display:flex;
            gap:25px;
            justify-content:center;
            align-items:center;
        }

        /* SMALLER BOXES */
        .card{
            background:white;
            padding:20px;
            width:170px;
            border-radius:10px;
            text-align:center;
            box-shadow:0 8px 18px rgba(0,0,0,0.1);
        }

        .card h2{
            font-size:24px;
            color:#1e3c72;
            margin:0;
        }

        .card p{
            font-size:13px;
            margin-top:5px;
            color:#444;
        }

        /* BUTTONS BELOW */
        .buttons{
            margin-top:25px;
            display:flex;
            gap:12px;
        }

        .buttons a{
            text-decoration:none;
            background:#1e3c72;
            color:white;
            padding:8px 14px;
            border-radius:6px;
            font-size:14px;
        }

        .buttons a:hover{
            background:#0f2557;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>
</div>

<div class="container">

    <!-- TOP 3 BOXES (SMALL + CENTER) -->
    <div class="card-section">

        <div class="card">
            <h2>50+</h2>
            <p>Freelancers</p>
        </div>

        <div class="card">
            <h2>120+</h2>
            <p>Projects Posted</p>
        </div>

        <div class="card">
            <h2>80+</h2>
            <p>Happy Clients</p>
        </div>

    </div>

    <!-- BUTTONS BELOW -->
    <div class="buttons">
        <a href="index.php">Go to Platform</a>
        <a href="logout.php">Logout</a>
    </div>

</div>

</body>
</html>