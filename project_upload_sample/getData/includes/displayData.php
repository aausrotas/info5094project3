<?php
//Connection for database
$conn = new mysqli("localhost", "microwave", "!Microwave2!", "microwave_paths");
//Select Database
$sql = "SELECT path_name, path_frequency, path_description, path_file_name FROM path";
$result = $conn->query($sql) or die($conn->error);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Path Data</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Path Name</th>
<th>Path Frequency</th>
<th>Path Description</th>
<th>Path Filename</th>
</tr>
<?php
//Fetch Data form database
while($row = $result->fetch_assoc()){
?>
<tr>
<td><input type="radio" id="name" name="paths" value="<?php echo $row['path_name']; ?>"></td>
<td><?php echo $row['path_frequency']; ?></td>
<td><?php echo $row['path_description']; ?></td>
<td><?php echo $row['path_file_name']; ?></td>
<td><a href="<?php displayPath($row['path_name']); ?>">Select</a></td>
</tr>
<?php
}
function displayPath($path_name) {
echo "displayPath.php";

}
?>
</table>
</body>
</html>
