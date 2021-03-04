<?php

require_once "../includes/config.php";

if(isset($_REQUEST['btn_register'])) //button name "btn_register"
{
	$username	= strip_tags($_REQUEST['txt_username']);	//textbox name "txt_email"
	$password	= strip_tags($_REQUEST['txt_password']);	//textbox name "txt_password"
		
	if(empty($username)){
		$errorMsg[]="Please enter username";	//check username textbox not empty 
	} else if(empty($password)){
		$errorMsg[]="Please enter password";	//check passowrd textbox not empty
	}
	else if(strlen($password) < 6){
		$errorMsg[] = "Password must be atleast 6 characters";	//check passowrd must be 6 characters
	}
	else
	{	
		try
		{	
			$select_stmt=$connect->prepare("SELECT username FROM users WHERE username=:uname"); // sql select query
			
			$select_stmt->execute(array(':uname'=>$username)); //execute query 
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
			
			if($row["username"]==$username){
				$errorMsg[]="Sorry username already exists";	//check condition username already exists 
			} else if(!isset($errorMsg)) //check no "$errorMsg" show then continue
			{
				$new_password = password_hash($password, PASSWORD_DEFAULT); //encrypt password using password_hash()
				
				$insert_stmt=$connect->prepare("INSERT INTO users	(username,password) VALUES
																(:uname,:upassword)"); 		//sql insert query					
				
				if($insert_stmt->execute(array(	':uname'	=>$username, 
												':upassword'=>$new_password))){
													
					$registerMsg="Register Successfully..... Please Click On Login Account Link"; //execute query success message
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Ro'yxatdan o'tish</title>
		
<link rel="stylesheet" href="<?php echo $homeurl; ?>styles/source/bootstrap.min.css">		
</head>

	<body>
	
	
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="alert alert-danger">
					<strong>WRONG ! <?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		if(isset($registerMsg))
		{
		?>
			<div class="alert alert-success">
				<strong><?php echo $registerMsg; ?></strong>
			</div>
        <?php
		}
		?>   
			<center><h2>Ro'yxatdan o'tish</h2></center>
			<form method="post" class="form-horizontal">
				<div class="form-group">
				<label class="col-sm-3 control-label">Login</label>
				<div class="col-sm-6">
				<input type="text" name="txt_username" class="form-control" placeholder="Login kiriting" />
				</div>
				</div>
					
				<div class="form-group">
				<label class="col-sm-3 control-label">Parol</label>
				<div class="col-sm-6">
				<input type="password" name="txt_password" class="form-control" placeholder="Parol kiriting" />
				</div>
				</div>
					
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				<input type="submit" name="btn_register" class="btn btn-primary " value="Saqlash">
				</div>
				</div>
				
				<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9 m-t-15">
				Accountingiz bormi? <a href="login.php"><p class="text-info">Accountga kirish</p></a>		
				</div>
				</div>
			</form>
			
		</div>
		
	</div>
			
	</div>
										
	</body>
</html>