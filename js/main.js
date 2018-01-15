
$(document).ready(function(){
//when document is ready do this
	initApp();
//add a listener on the button of add
	$("#add_task").on("click",function(){
		//when clicked I need take the value of the input
		var task = $("#task").val();
		//then I call the function and pass the variable into the function
		addTask(task);
		
	});

	$(".inputTask").submit(function(){
		var task =$("#task").val();
		$.ajax({
		method:"POST",
		dataType:"JSON",
		data:{tarefa: task},
		url:"php/add.php",
		complete:function(response){
			location.reload();
		}

	});
	});
	
		$('body').on('click', '.opt.done', function() {
    		var id=$(this).attr("id");
    		var item = $(this).parent().parent();
    		var complete = item.attr("done");
	    		doneTask(id,complete);
		});

		$('body').on('click','.opt.delete',function(){
			var id=$(this).attr("id");

			deleteTask(id);
		})
	

});

function initApp(){
	
	$.ajax({
		method:"POST",
		url:"php/showTask.php",
		dataType:"JSON",
		success:function(response){
			var task ='';
			if(response != "false"){
			
					for(var i = 0; i < response.length; i++){

							if((response[i].task_done) == 1){
								task += '<div class="item col-sm-12 complete" id="'+response[i].task_id+'" done="'+response[i].task_done+'">';

							}else{
								task += '<div class="item col-sm-12" id="'+response[i].task_id+'" done="'+response[i].task_done+'">';
								}

								task+= '<div class="_date col-xs-2"><span><span>'+response[i].task_time+'</span>'+response[i].task_date+'</span></div>';
								task+='<div class="_content col-xs-8"><span>'+response[i].task_content+'</span></div>';
								task+='<div class="_options col-xs-2">';
								task+='<div class="opt delete col-sm-1" id="'+response[i].task_id+'"><i class="fa fa-trash"></i></div>';
								task+='<div class="opt done col-sm-1" id="'+response[i].task_id+'"><i class="fa fa-check"></i></div>';
								task+='<div class="clear"></div></div><div class="clear"></div></div>';
							}
						$("#task_todo").append(task);
			}else{
				console.log("nenhuma tarefa");
				task += '<div class="item col-sm-12 notask"><span>Sem nenhuma tarefa</span></div>';
				$(".todo").append(task);
			}
				// $(".opt.done").click(function(){
				// 	var id = $(this).attr("id");
				// 	console.log(id);
				// });
		}
	});
}

function addTask(task){
	//inside the function, I call the native function of JQuery ajax
	//pass by the method post, the value of the input to php file, and there i check the values
	$.ajax({
		method:"POST",
		dataType:"JSON",
		data:{tarefa: task},
		url:"php/add.php",
		complete:function(response){
			location.reload();
		}

	});
}

function doneTask(id,done){
	$.ajax({
		method:"POST",
		url:"php/done.php",
		dataType:"JSON",
		data:{task:id,done:done},
		success:function(response){
			location.reload();
		}
	});
}

function deleteTask(id){
	$.ajax({
		method:"POST",
		url:"php/delete.php",
		dataType:"JSON",
		data:{
			task:id
		},
		success:function(response){
			location.reload();
		}
	});
}
