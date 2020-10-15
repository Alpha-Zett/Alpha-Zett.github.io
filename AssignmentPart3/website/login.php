<?php
include_once './mysql.php';
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if($password){
        $sql    = "select * from user where `email` = '$email'";
        $row = mysqli_fetch_assoc(mysqli_query($con,$sql));
        if($row){
            if($password != $row['password']){
                echo '<script>alert("wrong password");</script>';
            }else{
                $_SESSION['user'] = $row['email'];
                header("Location:index.php");
            }
        }else{
            echo '<script>alert("The user does not exist");</script>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"       content="" />
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>
<!-- /form-26-section -->
<section class="form-26">
    <div class="form-26-mian">
        <div class="layer">
            <div class="wrapper">
                <div class="form-inner-cont">
                    <div class="forms-26-info">
                        <h2>Login</h2>
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
                                <div  class="form-input"><input type="submit" class="btn" name="login" value="Login"></div>
                            </div>
                            <h6 class="already"> Dont have an account? <a href="register.php"><span>Register Here<span></span></span></a></h6>
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