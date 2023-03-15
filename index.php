<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-white" onload="move()">

	<!-- Loading Page -->
	<div class="loadpage" id="loadpage">
		<div class="position-absolute top-50 start-50 translate-middle">
			<div class="container text-center">
				<div class="row">
					<div class="col"> 
							<div class="loader"></div>
							<h4 id="percent" class="position-absolute top-50 start-50 translate-middle pb-5 mb-5">0%</h4>
					</div>
				</div>
				<div class="row">
					<div class="col p-3"> 
							<h3 class="loadtxt"><b>Loading....</b></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Welcome Page -->
	<div id="LandingPage" class="landing">
		<div class="container text-center position-absolute top-50 start-50 translate-middle">
		
		<section class="vh-100">
				<div class="container py-5 h-100">
				  <div class="row d-flex align-items-center justify-content-center h-100">
					<div class="col-md-8 col-lg-7 col-xl-6">
					  <img src="mm/draw2.svg"
						class="img-fluid" alt="Phone image">
					</div>
					<div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
					  <form method="post">
						<!-- Email input -->
						<div class="form-outline mb-4">
						  <input type="text" name="username" class="form-control form-control-lg" placeholder="Username" required/>
						  
						</div>
			  
						<!-- Password input -->
						<div class="form-outline mb-4">
						  <input type="password" name="password" class="form-control form-control-lg"  placeholder="Password" required/>
						  
						</div>
			  
				
						<!-- Submit button -->
						<button type="submit" name="login" class="btn btn-primary btn-lg btn-block">Login</button>
			  
						<div class="divider d-flex align-items-center my-4">
						  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
						</div>
			  
						
						<a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
						  role="button">
						  <a href="register.php"><i class="fab fa-twitter me-2"></i>Sig in</a>
						 
			  
					  </form>
					</div>
				  </div>
				</div>
			  </section>

		</div>
	</div>

	<?php
    session_start();
    include('config.php');
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM user WHERE username=:username");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            $message2 = "Something went wrong in Username/Password";
			echo "<script type='text/javascript'>alert('$message2');</script>";
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                header("Location:dashboard.php");
            } else {
                $message = "Something went wrong in Username/Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
            }
        }
    }
?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
