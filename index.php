<?php 

include('connection.php');

$query = "SELECT * FROM users";
$result = mysqli_query( $conn, $query);

if( mysqli_num_rows($result) > 0){
	
	while( $row = mysqli_fetch_assoc($result)){
		echo "Hello ".$row["nickname"]."! I absolutely love ".$row["favourite_food"]." also!<br>";
	}

} else {
	echo "Ooops! Something went wrong.";
}

mysqli_close( $conn);
 ?>