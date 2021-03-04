<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}
 
// Include config file
require_once "../includes/config.php";
 
if(isset($_REQUEST['login']))	//button name is "btn_login" 
{
	$username	=strip_tags($_REQUEST["username"]);	//textbox name "txt_username_email"
	$password	=strip_tags($_REQUEST["password"]);			//textbox name "txt_password"
		
	if(empty($username)){						
		$errorMsg[]="please enter username or email";	//check "username/email" textbox not empty 
	} else if(empty($password)){
		$errorMsg[]="please enter password";	//check "passowrd" textbox not empty 
	}
	else
	{
		try
		{
			$select_stmt=$connect->prepare("SELECT * FROM users WHERE username=:uname"); //sql select query
			$select_stmt->execute(array(':uname'=>$username));	//execute query with bind parameter
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
			
			if($select_stmt->rowCount() > 0)	//check condition database record greater zero after continue
			{
				if($username==$row["username"]) //check condition user taypable "username or email" are both match from database "username or email" after continue
				{
					if(password_verify($password, $row["password"])) //check condition user taypable "password" are match from database "password" using password_verify() after continue
					{
						$_SESSION["loggedin"] = "loggedin";	//session name is "user_login"
						$loginMsg = "Siz tizimga kirdingiz...";		//user login success message
						header("refresh:2; ../index");			//refresh 2 second after redirect to "index.php" page
					}
					else
					{
						$errorMsg[]="wrong password";
					}
				}
				else
				{
					$errorMsg[]="wrong username";
				}
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Styles css-->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/source/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/css/style.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/css/image.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; margin: 0 auto; }
    </style>
</head>
<body>
<div class="loader">
    <p id="loadText">LaLaKu <img src="../styles/loader-logo.svg" width="50" height="50" alt="is loading..."></p>
</div>


<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($loginMsg))
		{
		?>
			<div class="alert alert-success">
				<strong><?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?>   





    <div class="wrapper text-center">
        <h2>Kirish</h2>
        <p>Bildirishnomani ko'rish uchun Ism va Parolingizni kiriting.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Ism</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Parol</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <button type="submit" name="login" class="btn btn-success">Kirish</button>
            </div>
            <!-- <p>Don't have an account? <a href="register.php">Sign up now</a>.</p> -->
        </form>
    </div>    

    <script src="<?php echo $homeurl; ?>styles/source/jquery.min.js"></script>
	<script src="<?php echo $homeurl; ?>styles/js/loader.js"></script>

</body>
</html>
