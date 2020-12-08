<?php
include_once 'includes/config.php';
include_once 'includes/header.php';
?>
 <div class="container-fluid container-lg mx-lg-auto bg-yellow">
 	<div class="row mx-1 font-titillium-bd">
 		<div class="col-3 br-blue text-center">
      <h3 class="font-weight-bold">
      <?php 

  $res = mysqli_query(
  $connect,
  "SELECT count(id) FROM car"
);
if (!$res)
  die(mysqli_error($link));
$amountCars = $res->fetch_row()[0];
      echo $amountCars; 
      ?>
    </h3>
    <p class="font-titillium-regular">Jami</p></div>
 		<div class="col-3 br-blue text-center"><h3 class="font-weight-bold">
  0
    </h3><p class="font-titillium-regular">Aktiv</p></div>
 		<div class="col-3 br-blue text-center"><h3 class="font-weight-bold">
      <?php 
  $res = mysqli_query(
  $connect,
  "SELECT count(driver_name) FROM persons WHERE driver_name = (NULL)"
);
if (!$res)
  die(mysqli_error($link));
$activCars = $res->fetch_row()[0];
      echo $activCars; 
      ?>  
    </h3><p class="font-titillium-regular">Passiv</p></div>
 		<div class="col-3 px12 text-center"><h3 class="font-weight-bold">
      <?php 
 
  $res = mysqli_query(
  $connect,
  "SELECT count(driver_name) FROM persons"
);
if (!$res)
  die(mysqli_error($link));
$activCars = $res->fetch_row()[0];
      echo $activCars; 
      ?>  
    </h3><p class="font-titillium-regular">Istemolda</p></div>
 	</div>
 </div>



 <div class="container-fluid container-lg mx-lg-auto shadow py-2 bg-white">

<?php 
include_once "model_cars.php"; 
include_once "provinces_cars.php";
?>


 </div>


<?php include 'includes/footer.php' ?>