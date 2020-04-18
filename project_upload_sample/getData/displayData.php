<?php
	session_start();


	$con = new mysqli("localhost", "microwave", "!Microwave2!", "microwave_paths");
	if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT path_name, path_frequency, path_description, path_filename FROM path";

	$result = mysqli_query($con,$sql)or die(mysqli_error());

	echo "<table>";
	echo "<tr><th>Date</th><th>Comment</th><th>Amount</th></tr>";

	while($row = mysqli_fetch_array($result)) {
	    $path_name = $row['path_name'];
	    $path_frequency = $row['path_frequency'];
	    $path_description = $row['path_description'];
			$path_filename = $row['path_filename'];
	    echo "<tr><td style='width: 200px;'>".$path_name."</td><td style='width: 600px;'>".$path_frequency."</td><td>".$path_description."</td><td>".$path_filename."</td></tr>";
	}

	echo "</table>"
	mysqli_close($con);
	?>
