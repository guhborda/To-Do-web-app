<?php 
require_once ("init.php");
if(isset($_POST['tarefa']) and !empty($_POST['tarefa'])){
	$task = $_POST['tarefa'];
	$date = date("d-m-Y H:i:s");
	$sql = "INSERT INTO task (task_content,task_user_id,task_date,task_done) VALUES (?,?,NOW(),?) ";
	$exec = $con->prepare($sql);
	if($exec->execute(array($task,$ip,0))){
		$response = array("success"=> true);
	}else{
		$response = array("success"=> false);
	}
	
	
	die(json_encode($response));
}

 ?>