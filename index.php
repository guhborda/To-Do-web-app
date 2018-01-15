
<!DOCTYPE html>
<html>
<head>
	<title>Faça o que tens de Fazer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="author" content="Gustavo Borda">
	<meta name="description" content="simple to do list to achieve your goals">
	<meta name="keywords" content="simple to do, to do list, php, mysql">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/now-ui-kit.css">
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="app">
		<nav class="navbar navbar-expand-lg bg-white">
      		<div class="col-sm-11">
			    <div class="form-group">
			    	<form class="inputTask" method="POST">
			        	<input type="text" placeholder="Digite sua meta..." class="form-control" id="task">
			    	</form>
			    </div>
			</div>
			<div class="col-sm-1"> 
				<button class="btn btn-primary btn-icon  btn-icon-mini btn-round add_task" id="add_task">
					<i class="fa fa-plus "></i>
				</button>
			</div>
        </nav><!--Nav Bar-->
			<div class="container">
				<div class="todo" id="task_todo">
					
				</div>
			</div><!--Conteudo do site-->
	</div><!-- Class App -->

	<script type="text/javascript" src="js/jquery.3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/now-ui-kit.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>