<?php 
	include 'config.inc.php';
    
    $member_email = $_REQUEST['member_email'];
    // $member_email = 'balltawat@hotmail.com';

    if(!empty($member_email)){
        $sql = "SELECT department_id FROM member WHERE member_email = '".$member_email."'; ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $department_id = $row["department_id"];
            }
        } else {
            echo "0 results";
        }

        $sql="select count(*) as total from durable_goods WHERE department_id = '".$department_id."' ";
        $result=mysqli_query($conn,$sql);
        $data=mysqli_fetch_assoc($result);
        $default =  $data['total'];
        if($default == 0){
            echo json_encode('zero');
        }else{
            echo json_encode('greater');
        }
        
    }

    mysqli_close($conn);
?>