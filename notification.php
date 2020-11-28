<?php
include 'includes/config.php';
include 'includes/header.php'; 
?>

<!-- Reminder and made tasks -->
<div class="container-lg mx-lg-auto text-center mt-4 bg-yellow">
	<div class="row">
		<div class="col-6">
			<a class="text-decoration-none" href="notification.php"><div class="reminder tasks-border ml-4">
					<h2 class="m-0 pt-2">
						<?php 
						$totalNotif = mysqli_query($connect, "SELECT count(*) FROM documents WHERE item_status = 0"); 
						$totalCount = $totalNotif->fetch_row()[0];
						echo $totalCount;
						?> 
						</h2>
					<p class="m-0">Eslatma</p>
				</div></a>
		</div>
		<div class="col-6">
			<a class="text-decoration-none" href="notification2.php"><div class="finished ml-4">
					<h2 class="m-0 pt-2">40</h2>
					<p class="m-0">Qilinganlari</p>
				</div></a>
		</div>
	</div>
</div>
<!-- end -->

<div class="container-lg mx-lg-auto">
	<div class="row">
		<div class="col-12">
			
	<img class="content-shadow" src="styles/icons/shadow-of-reminder.svg" alt="">
		</div>
	</div>
</div>


<!-- Content data showing -->
<div class="container-lg mx-lg-auto py-3 mb-4 bg-white content-minus">
	<div class="content">


<?php 
  $sql = "SELECT * FROM documents WHERE item_status = 0";
  $result = mysqli_query($connect, $sql);

while ($notif = mysqli_fetch_assoc($result)) {

$expires = $notif['tex_pass_date'];
$now = strtotime("now");

$date_diff = (strtotime($expires) - $now) / 86400;

 ?>


			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">
								<a href="action/update.php?id='<?php echo $notif['id']; ?>'"><?php echo $notif['title']; ?></a>
							</h5>
							<p class="content-who text-dark"><?php echo $notif['object']; ?></p>
							<h5 class="content-p mb-2"><?php echo $notif['surname_name']; ?></h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12"><?php echo $notif['phone'] ?></h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day"><?php echo round($date_diff) ?></h4><p class="d-inline mr-3 content-day-color">k</p>

								<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

<?php } ?>

	</div>
</div>
<!-- end -->
<?php include 'includes/footer.php'; ?>