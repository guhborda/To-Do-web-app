<?php 
	require_once("init.php");
	$response = array();
	if(isset($_POST['task'])){
		$task = $_POST['task'];
		$complete = $_POST['done'];
		if($complete == 1){
			$sql = "UPDATE task SET task_done = 0, task_date = NOW() WHERE task_id = ? AND task_user_id = ?";
			$update = $con->prepare($sql);
			if($update->execute(array($task,$ip))){
				$response[] = "Success";
				die(json_encode($response));
			}
		}else{
			$sql = "UPDATE task SET task_done = 1, task_date = NOW() WHERE task_id = ? AND task_user_id = ?";
			$update = $con->prepare($sql);
			if($update->execute(array($task,$ip))){
				$response[] = "Success";
				die(json_encode($response));
			}
		}
		
	}
 ?>