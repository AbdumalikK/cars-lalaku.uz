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
    <!-- <link rel="stylesheet" href="../styles/js/dropzonejs/dropzone.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
    <!-- Reminder and made tasks -->
    <div class="container-lg mx-lg-auto text-center mt-4 bg-yellow fixed-top">
        <div class="row">
            <div class="col-5 mr-auto">
                <a class="text-decoration-none" href="edit">
                    <div class="tasks-border-top ml-4">
                        <h2 class="m-0 pt-2"><img src="../styles/icons/edit.svg" alt="edit"></h2>
                        <p class="m-0">Tuzatish</p>
                    </div>
                </a>
            </div>
            <div class="col-1 add-border-left p-0 m-0 my-2"></div>
            <div class="col-5">
                <a class="text-decoration-none" href="add">
                    <div class="tasks-border-top reminder-top ml-4">
                        <h2 class="m-0 pt-2"><img src="../styles/icons/car-add.svg" alt="car-add"></h2>
                        <p class="m-0">Qo`shish</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end -->


<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/sections/upload-manager.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/sections/sql_query_add.php';
?>

    <!-- Add information section -->
    <div class="container mx-lg-auto my-4 nav-fixed-margin">
		<form autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]); ?>" method="POST" enctype="multipart/form-data">
            <!-- Car -->
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/car.php'?>
            <!-- Documents -->
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/documents.php'?>
            <!-- Companies -->
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/companies.php'?>
            <!-- Persons -->
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/persons.php'?>
            <!-- Purchase -->
                    <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/purchase.php'?>
            <!-- Sell -->
                    <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/sell.php'?>
            <!-- Status -->
                    <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/status.php'?>
            <!-- Status -->
                    <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/fine.php'?>
                    <div class="col-12 p-0">
                    <input type="submit" name="submit" value="Saqlash" class="btn btn-save my-3">
                    </div>
        </form>
    </div>
    <!-- end add information section -->
    <?php //include '../includes/footer.php'; ?>

<!-- JS Files -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../styles/js/app.js"></script>
<!-- <script src="../styles/js/dropzonejs/dropzone.js"></script> -->

<?php 
} else {
	header("location: ../user/login");
}
?>