<?php
$title = 'Task 7.1';
include '../header.php';
?>
<link rel="stylesheet" href="../style.css">


<div class="body-container">
    <div class="home-banner-container">
        <img src="../images/hamk-banner.avif" alt="banner" draggable="false">
    <div class="article">
<?php
include 'db.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM studentsinfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Group ID</th>
                </tr>
            </thead>
            <tbody>";
    
    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['lname']}</td>
                <td>{$row['city']}</td>
                <td>{$row['groupid']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>
                </tbody>
            </table>
</div>
</div>
</div>
<style>
    .table th,
    .table td {
        padding: 10px;
    }
</style>
<?php include '../footer.php'; ?>
