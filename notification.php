<?php
include_once 'includes/config.php';
include_once 'includes/header.php'; 
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
  $sql = "SELECT persons.id, persons.driver_name, persons.driver_surname, persons.d_phone_1, documents.tex_pass_date, documents.ins_date, documents.gas_date, documents.renta_date, documents.trust_date FROM persons
	 LEFT JOIN documents ON documents.id = persons.id
	 WHERE documents.item_status = 0
	";
  $result = mysqli_query($connect, $sql);
	
function RenderItem($title, $date_diff, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone) { ?>

			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">
								<a href="action/update.php?id=<?php echo $notif_id; ?>">
									<?php echo $title; ?>
								</a>
							</h5>
							<p class="content-who text-dark">haydovchi</p>
							<h5 class="content-p mb-2">
								<?php 
								echo $notif_driver_name; 
								if(!$notif_driver_surname){
									echo "";
								} else {
									echo $notif_driver_surname;
								}
								?>
								</h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12"><?php echo $notif_phone; ?></h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day"><?php echo round($date_diff); ?></h4><p class="d-inline mr-3 content-day-color">k</p>

								<a href="tel:<?php echo $notif_phone ?>">
									<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php } ?>

<?php
while ($notif = mysqli_fetch_assoc($result)) {

$notif_id = $notif['id'];
$notif_driver_name = $notif['driver_name'];
$notif_driver_surname = $notif['driver_surname'];
$notif_phone = $notif['d_phone_1'];

$now = strtotime("now");

$date_list = array("Tex"=>$notif['tex_pass_date'], "Ins"=>$notif['ins_date'], "Gas"=>$notif['gas_date'], "Rent"=>$notif['renta_date'], "Trust"=>$notif['trust_date']);

$listDates = [];

foreach ($date_list as $date) {

$title = [];

if ($date) {
	array_push($listDates, $date);
	switch ($date) {
		case $listDates[0]:
			array_push($title, "Tex.pasport");
			$date_diff = (strtotime($date) - $now) / 86400;
			// RenderItem($title, $date_diff);
			break;
		case $listDates[1]:
			array_push($title, "Sug'urta");
			$date_diff = (strtotime($date) - $now) / 86400;
			// RenderItem($title, $date_diff);
			break;
		case $listDates[2]:
			array_push($title, "Gaz akt");
			$date_diff = (strtotime($date) - $now) / 86400;
			// RenderItem($title, $date_diff);
			break;
		case $listDates[3]:
			array_push($title, "Ijara shartnomasi");
			$date_diff = (strtotime($date) - $now) / 86400;
			// RenderItem($title, $date_diff);
			break;
		case $listDates[4]:
			array_push($title, "Ishonchnoma");
			$date_diff = (strtotime($date) - $now) / 86400;
			// RenderItem($title, $date_diff);
			break;
		
		default:
			$title = "Nomalum";
			break;
	}

RenderItem($title[0], $date_diff, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone);
}


}


} 


?> 


	</div>
</div>
<!-- end -->
<?php include 'includes/footer.php'; ?>