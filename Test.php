<html>
<div class="div1">
	<form action="index.php" method="get">
<?php
		 if(isset($_POST['Show']))
        {
        $server = "localhost";
        $user = "root";
        $database="schema";
        // Create connection
        $conn =mysqli_connect($server, $user, "", $database);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
$sql = "SELECT * FROM data";
$run_query($conn,$sql);
if($run_query =mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
echo "<table class='table table-bordered '>";
echo "<thead>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Status</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Status'] . "</td>";
echo "<td>";
echo "</td>";
echo "</tr>"; }
echo "</tbody>"; 
echo "</table>";
mysqli_free_result($result);
}  else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
?>
</form>>
</div>
</body>
</html>