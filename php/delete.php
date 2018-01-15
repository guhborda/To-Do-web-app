<?php 
	require_once ("init.php");

	if(isset($_POST['task'])){
		$task = $_POST['task'];
		$sql = "DELETE FROM task WHERE task_id = ? AND task_user_id = ?";
		$result = $con->prepare($sql);
		$done = $result->execute(array($task,$ip));
		if($done){
			$response = "success";
			die(json_encode($response));
		}else{
			$response = "error";
			die(json_encode($response));
		}
	}

 ?>