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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/search.css">
    <link rel="stylesheet" href="../styles/css/image.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="../styles/fonts/18VAGROUNDEDMBOLD_0.TTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-BOLD.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-REGULAR.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-THIN.OTF">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>

<!-- Reminder and made tasks -->
<div class="container-lg mx-lg-auto text-center mt-4 bg-yellow fixed-top">
	<div class="row">
		<div class="col-5 mr-auto">
			<a class="text-decoration-none" href="edit"><div class="tasks-border-top ml-4">
					<h2 class="m-0 pt-2"><img src="../styles/icons/edit.svg" alt=""></h2>
					<p class="m-0">Tuzatish</p>
				</div></a>
		</div>
		<div class="col-1 add-border-left p-0 m-0 my-2"></div>
		<div class="col-5">
			<a class="text-decoration-none" href="add"><div class="tasks-border-top ml-4">
					<h2 class="m-0 pt-2"><img src="../styles/icons/car-add.svg" alt=""></h2>
					<p class="m-0">Qo`shish</p>
				</div></a>
		</div>
	</div>
</div>
<!-- end -->


<!-- Search -->
    <div class="container nav-fixed-margin">
        <div class="row">
            <div class="col-12 p-4">
                <form action="search.php">
                    <div class="search-input">
                        <input type="text" id="search_update" class="search-control" placeholder="Qidirish" autofocus><img class="search-img" src="../styles/icons/search icon.svg" alt="qidirish">
                    </div>
                </form>
                <div id="display" class="mt-2"></div>
            </div>
        </div>
    </div>
<!-- end search -->

<?php
include_once '../includes/config.php';
include_once '../sections/upload-manager.php';
include_once '../sections/update/sql_query_update.php';
?>

 <!-- Add information section -->
    <div class="container mx-lg-auto my-4">
    <form autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" method="POST" enctype="multipart/form-data">
		<!-- Car -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/car.php'?>
		<!-- Documents -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/documents.php'?>
		<!-- Companies -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/companies.php'?>
		<!-- Persons -->
        <?php include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/persons.php'?>
        <!-- Purchase -->
        <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/purchase.php'?>
		<!-- Sell -->
        <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/sell.php'?>
        <!-- Status -->
        <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/status.php'?>
        <!-- Fine -->
        <?php //include_once $_SERVER['DOCUMENT_ROOT'].'/sections/update/fine.php' ?>
        <div class="col-12 p-0">
        <input type="submit" name="update" value="Yangilash" class="btn btn-save my-3">
        </div>
    </form>
</div>


<?php //} else {
    //echo "Wrong request";
    //} ?>

    <!-- JS Files -->
    <?php include '../includes/footer.php'; ?>
    <script src="../styles/js/search.js"></script>
<?php
    } else {
?>
	<script>
	    window.location.replace("../user/login");
	</script>
<?php
}
?>
