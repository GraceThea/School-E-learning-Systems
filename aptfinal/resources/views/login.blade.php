<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div id ="login">
		<h3 class="text-center text-white pt-5">LogIn form</h3>
		<div class = "container">
			<div id="login-row" class="row-justify-content-center align-items-center">
				<div id="login-column"class="col-md-6">
					<div id="login-box"class="col-md-12">
						<form id="login-form"class="form"action=""method="post">
							<h3 class="txt-center text-info">LogIn</h3>
							<div class="from-group">
								<label for="username"class="txt-info">Username:</label><br>
								<input type ="text"name="username"id="username"class="form-control">
							</div>
							<div class ="from-group">
								<label for="password"class="txt-info">Password:</label><br>
								<input type="password"name="password"id="password"
								class="form-control">
							</div>
							<div class="form-type">
								<input type="submit"name="LogInSubmit"class="btn btn-info btn-md"value="submit"/>
							</div>
							<div id="reg_links"class="text-right">
								<a href="{{route('registration')}}">Register Here</a>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>	
</body>
</html>