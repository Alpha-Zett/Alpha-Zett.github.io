<?php
include_once './mysql.php';
if(isset($_POST['register'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if($password){
        $sql    = "insert into user(`email`,`password`) VALUES ('$email','$password')";
        $result = mysqli_query($con,$sql);
        if($result){
            header("Location:login.php");
        }else{
            echo '<script>alert("fail to sign in");</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zxx"

<head>
    <title>Registration</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"      content=" " />
    <!-- //Meta tag Keywords -->
	 <link rel="stylesheet" href="css/register.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>
   <!-- /form-26-section -->
   <section class="form-26-1">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						<h2>Registration</h2>
                        <p>Alpha bulider</p>
                    </div>
					<div class="form-right-inf"> 
							<form action="" method="post" class="signin-form">
                                <div class="forms-gds">
                                    <div  class="form-input">
                                        <input type="email" name="email" placeholder="Email" required />
                                    </div>
                                    <div  class="form-input">
                                        <input type="password" name="password" placeholder="Password" required />
                                    </div>
                                    <div  class="form-input"><input type="submit" class="btn" name="register" value="Signup"></div>
                                </div>
							<h6 class="already">Already have an account? <a href="login.php"><span>Login Here<span></span></span></a></h6>
						</form>
						
                    </div>
					
                </div>
			</div>
		</div>
		    </div>
		</section>
      <!-- //form-26-section -->
</body>
</html>