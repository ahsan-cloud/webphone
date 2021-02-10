<!-- <?php
    include 'database.php';
    
		//if(isset($_POST['public_identity'] && $_POST['private_identity'] )){
		// $public =$_POST['public_identity'];
		// $private =$_POST['private_identity'];
		// //var_dump($public);
		// //var_dump($private);
		// //exit;
		// //}
		// $check=mysqli_query($conn,"select * from login_phone where public_identity='$public' and private_identity='$private'");
		// $response='';

		// if (mysqli_num_rows($check)>0)
		// {
		// 	// $_SESSION['public']=$public_identity;
		// 	// $_SESSION['private']=$private_identity;
		// 	$response=array("statusCode"=>200);
					
		// }
		// else{
		// 	$response=array("statusCode"=>201);
		// }
		// echo json_encode($response);
		// mysqli_close($conn);	

$public = mysqli_real_escape_string($con,$_POST['public_identity']);
$private = mysqli_real_escape_string($con,$_POST['private_identity']);

if ($public != "" && $private != ""){

    $sql_query = "select count(*) as cntUser from login_form where public_identity='".$public."' and private_identity='".$private."'";
    $result = mysqli_query($con,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['public'] = $public;
        echo 1;
    }else{
        echo 0;
    }

}
?> -->