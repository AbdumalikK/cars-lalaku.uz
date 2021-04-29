<?php
session_start();
if(isset($_SESSION["loggedin"])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LaLaKoo Cars</title>
    <!-- Styles css-->
    <link rel="stylesheet" href="../styles/source/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/image.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>
<body>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center mt-5">
            <h1>LaLaKoo Cars</h1>
            <hr class="hr">
        </div>
        <div class="col-6 mt-5 py-5 text-center">
            <a href="add.php">
               <button class="btn btn-lg btn-success">Qo'shish</button>
            </a>
        </div>
        <div class="col-6 mt-5 py-5 text-center">
            <a href="edit.php">
               <button class="btn btn-lg btn-success">Yangilash</button>
            </a>
        </div>
    </div>
</div>
<div class="mt-5"></div>
<?php include '../includes/footer.php'; 
} else {
	?>
	<script>
	window.location.replace("../user/login");
	</script>
	<?php
}
?>