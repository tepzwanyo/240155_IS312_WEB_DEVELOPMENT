<?php
// Author: Sandrick Luther
// Information Systems Year 3
// Date: 22nd March 2025
// Unit: IS312 Web Application Development

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FRU10";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

echo "<h2>Student Listing</h2>";
echo "<table border='1'>
<thead>
<tr>
<th>StudentNo</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>ContactNo</th><th>ProgramCode</th>
</tr>
</thead>
<tbody>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row["StudentNo"]."</td>
        <td>".$row["Firstname"]."</td>
        <td>".$row["Lastname"]."</td>
        <td>".$row["Gender"]."</td>
        <td>".$row["ContactNo"]."</td>
        <td>".$row["ProgramCode"]."</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No students found</td></tr>";
}
echo "</tbody></table>";

$conn->close();
?>