<?php
	// include '../lib/db_connect.php';
	$sql = "SELECT * FROM teacher";
	// $result = $conn->query($sql);
	// if ($result->num_rows > 0) {
		// while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['ID'];?></td>
			<td><?=$row['Username'];?></td>
			<td><?=$row['E-mail'];?></td>
			<td><?=$row['Amount'];?></td>
			<td><?=$row['Comments'];?></td>
			<td><?=$row['Action'];?></td>
			
            <td><a class="btn btn-outline-light" href="delete.php?id=<?=$row['ID'];?>">Delete</a></td>
		</tr>
<?php	
	// }
	// }
	// else {
		// echo "0 results";
	// }
	// mysqli_close($conn);
?>