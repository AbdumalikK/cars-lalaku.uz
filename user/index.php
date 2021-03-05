<?php
require_once '../includes/config.php';

session_start();

if(isset($_SESSION["loggedin"])) {
	$content = '
		<div class="container mt-5 bg-white">
			<h4 class="text-center p-5">Modullar</h4>
			<div class="row text-center pb-5">
				<div class="col-6">
					<a href="../action/add">
					<button class="btn btn-success">Moshina qo`shish</button>
					</a>
				</div>
				<div class="col-6">
					<a href="../action/edit">
					<button class="btn btn-success">Moshina yangilash</button>
					</a>
				</div>
			</div>
		</div>
	';
} else {
	header("location: login");
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Admin boshqaruv</title>
<link rel="stylesheet" href="<?php echo $homeurl; ?>styles/source/bootstrap.min.css">
</head>
	<body style="background-color: yellow;">
		<?php echo $content; ?>
	</body>
</html>