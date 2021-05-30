<?php
	include 'config.inc.php';
	$member_email = 'balltawat@hotmail.com';
	
	$sql1 = "SELECT department_id FROM member WHERE member_email = '".$member_email."'; ";
	$result1 = mysqli_query($conn, $sql1);
	if (mysqli_num_rows($result1) > 0) {
	while($row = mysqli_fetch_assoc($result1)) {
		$department_id = $row["department_id"];
	}
	} else {
		echo "0 results";
	}

	$sql = $conn->query("SELECT * FROM durable_goods LEFT JOIN location ON durable_goods.location_id = location.location_id WHERE durable_goods.department_id = '".$department_id."';");
	$res = array();
	while($row = $sql->fetch_assoc()) {
		$res[]=$row;
	}
	echo json_encode($res);
?>



