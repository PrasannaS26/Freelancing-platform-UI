<?php
$conn = mysqli_connect("localhost", "root", "", "freelancing_platform");

if (!$conn) {
    die("Database Connection Failed");
}

if (isset($_POST['submit'])) {

    $freelancer = $_POST['freelancer'];
    $skill = $_POST['skill'];
    $project = $_POST['project'];
    $budget = $_POST['budget'];

    $query = "INSERT INTO freelancer_details
              (freelancer_name, skill, project_title, budget)
              VALUES
              ('$freelancer', '$skill', '$project', '$budget')";

    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Freelancing Platform</title>

    <style>

        body {
            font-family: Arial;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background: #1e3c72;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            width: 85%;
            margin: auto;
            margin-top: 30px;
        }

        .form-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1e3c72;
            color: white;
            border: none;
            margin-top: 15px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #16325c;
        }

        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            background: white;
        }

        table, th, td {
            border: 1px solid gray;
        }

        th {
            background: #1e3c72;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        .book-btn {
            background: #1e3c72;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
        }

        .book-btn:hover {
            background: #16325c;
        }

        .card-section {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            flex: 1;
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 0px 10px lightgray;
        }

        .card h2 {
            color: #1e3c72;
        }

    </style>
</head>

<body>

<div class="header">
    <h1>Freelancing Platform</h1>
    <p>Connect Freelancers with Clients</p>
</div>

<div class="container">

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

    <div class="form-box">

        <h2>Add Freelancer Details</h2>

        <form method="POST">

            <input type="text"
                   name="freelancer"
                   placeholder="Freelancer Name"
                   required>

            <input type="text"
                   name="skill"
                   placeholder="Skill"
                   required>

            <input type="text"
                   name="project"
                   placeholder="Project Title"
                   required>

            <input type="text"
                   name="budget"
                   placeholder="Budget"
                   required>

            <button type="submit"
                    name="submit">
                    Add Project
            </button>

        </form>

    </div>

    <table>

        <tr>
            <th>ID</th>
            <th>Freelancer</th>
            <th>Skill</th>
            <th>Project</th>
            <th>Budget</th>
            <th>Action</th>
        </tr>

        <?php

        $result = mysqli_query($conn,
                 "SELECT * FROM freelancer_details");

        while ($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo $row['freelancer_name']; ?></td>

            <td><?php echo $row['skill']; ?></td>

            <td><?php echo $row['project_title']; ?></td>

            <td><?php echo $row['budget']; ?></td>

            <td>
                <a class="book-btn" href="#">
                    Book
                </a>
            </td>

        </tr>

        <?php
        }
        ?>

    </table>

</div>

</body>
</html>