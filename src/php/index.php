<?php
// Include the database connection file
include_once("config.php");

// Fetch contacts (in descending order)
$result = mysqli_query($mysqli, "SELECT * FROM contacts ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en-us">

    <head>
        <title>MariaDB Rolodex</title>
        <link rel="stylesheet" href="/css/styles.css" />
    </head>

    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th><a class="button" href="add.php">Add</a></th>
            </tr>
            <?php
            // Print contacts 
            while($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['age']."</td>";
                echo "<td>".$res['email']."</td>";
                echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete this contact?')\">Delete</a></td>";
            }
            ?>
        </table>
    </body>
</html>
