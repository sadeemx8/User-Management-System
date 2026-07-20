<!DOCTYPE html>
<html>
<head>
    <title>User Management System</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 9px 18px;
            cursor: pointer;
            border-radius: 5px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .toggle-button {
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
        }

        .toggle-button:hover {
            background-color: #218838;
        }
    </style>

    <script>
        function confirmToggle() {
            return confirm("Are you sure you want to change the status?");
        }
    </script>
</head>

<body>

<h2>User Status System</h2>

<form action="insert.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Age:</label>
    <input type="number" name="age" required>

    <input type="submit" value="Submit">
</form>

<?php
$servername = "sql208.infinityfree.com";
$username = "if0_42450081";
$password = "B22hnFoUtgZLU5";
$dbname = "if0_42450081_userstatus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h2>Users List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>
                    <a class='toggle-button'
                       href='toggle.php?id=" . $row['id'] . "'
                       onclick='return confirmToggle();'>
                       Toggle
                    </a>
                  </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>";
        echo "<td colspan='5'>No records found</td>";
        echo "</tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>

</body>
</html>