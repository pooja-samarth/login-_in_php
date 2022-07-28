<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="txt/css" href="bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2> Login form</h2>
				<form action="validation.php" method="post">

					<div class="form-group">

						<lable>username</lable>
						<input type="text" name="user" class="form-control">

						<div class="form-group">
						<lable>password</lable>
						<input type="password" name="password" class="form-control">


					</div>
					<button type="submit" class="btn btn-primary">login button</button>
					
				</form>
			</div>
				<div class="col-lg-6">
				<h2>Sign in</h2>
				<form action="registratiom.php" method="post">

					<div class="form-group">

						<lable>username</lable>
						<input type="text" name="user" class="form-control">

						<div class="form-group">
						<lable>password</lable>
						<input type="password" name="password" class="form-control">


					</div>
					<button type="submit" class="btn btn-primary">Sign in </button>
					
				</form>
			    
		        </div>
		</div>

    </div>
    /* this is demo request2
*/
</body>
</html>
