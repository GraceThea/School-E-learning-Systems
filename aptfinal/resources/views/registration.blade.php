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
	<div id ="register">
		<h3 class="text-center text-white pt-5">Register form</h3>
		<div class = "container">
			<div id="register-row" class="row-justify-content-center align-items-center">
				<div id="register-column"class="col-md-6">
					<div id="register-box"class="col-md-12">
						<form id="register-form"class="form"action=""method="post">
							<h3 class="txt-center text-info">Register</h3>
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
								<input type="submit"name="register"class="btn btn-info btn-md"value="submit"/>
							</div>
							<div id="reg_links"class="text-right">
								<a href="{{route('log')}}">Login Now</a>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>	
</body>
</html>