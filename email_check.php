<?php 
	include 'config.inc.php';
	
	$member_email = $_POST['member_email'];
	
	if( $member_email != ""){
		$sql1 = "SELECT member_email FROM member WHERE member_email = '".$member_email."';";
		$dbquery1 = mysqli_query($conn,$sql1);
		$count_email = mysqli_num_rows($dbquery1);

		if ($count_email == 1) {
			echo json_encode("Success");
		}else {
			echo json_encode("no email");
		}
		
	}else{
		echo json_encode("no email");
	}
    
    mysqli_close($conn);
?>


