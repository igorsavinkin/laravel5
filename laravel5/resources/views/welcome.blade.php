<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<!--div>Enviroment: <!--?php echo $app->environment(); ?></div-->
				 
				<div class="quote">{{ Inspiring::quote() }}</div>
				<div>
				    <h2>
						<b>
							<a href='{{ url("/auth/login") }}' class="btn btn-info" role="button">Log in</a>&nbsp;&nbsp;&nbsp;
							<a href='{{ url("/auth/register") }}' class="btn btn-default" role="button">Register</a> 
						</b>
					</h2>
				</div>
			</div>
		</div>
	</body>
</html>