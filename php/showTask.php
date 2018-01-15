<?php
require_once ("init.php");
$output = '';
$sql = "SELECT * FROM task WHERE task_user_id = ?  ORDER BY task_date DESC";
$taskQuery = $con->prepare($sql);
$taskQuery->execute(array($ip));
$response = array();

if($taskQuery->rowCount() > 0){

while($rows = $taskQuery->fetch(PDO::FETCH_ASSOC)){
	$task_id = $rows['task_id'];
	$task_content = $rows['task_content'];
	$task_user_id = $rows['task_user_id'];
	$task_done= $rows['task_done'];

	$date = explode(' ',$rows['task_date']);
	$task_date = str_replace("-", "/",$date[0]);
	$task_time = $date[1];
	$query = array("task_id" => $task_id, "task_content" => $task_content,"task_user_id" => $task_user_id,"task_done" => $task_done,"task_date" => $task_date,"task_time" => $task_time);
	$response[] = $query;
}

die(json_encode($response));

}else{
	$success = false;
	$response[] = $success;
	die(json_encode($response));
}





						
						
						
							
							
						

						



?>