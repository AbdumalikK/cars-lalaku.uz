<?php
include_once 'includes/config.php';
include_once 'includes/header.php'; 

if(isset($_SESSION["loggedin"])) {
?>

<!-- Reminder and made tasks -->
<div class="container-lg mx-lg-auto text-center mt-4 bg-yellow">
	<div class="row">
		<div class="col-6">
			<a class="text-decoration-none" href="notification"><div class="reminder tasks-border ml-4">
					<h2 class="m-0 pt-2">
						<?php 
						$sql = "SELECT count(*) FROM documents WHERE item_status = 0";
						$totalNotif = $connect->prepare($sql); 
						$totalNotif->execute();
						$totalCount = $totalNotif->fetchColumn();
						echo $totalCount;
						?> 
						</h2>
					<p class="m-0">Eslatma</p>
				</div></a>
		</div>
		<div class="col-6">
			<a class="text-decoration-none" href="notification_extended"><div class="finished ml-4">
					<h2 class="m-0 pt-2">
					<?php 
						$sql = "SELECT count(*) FROM documents WHERE item_status = 1";
						$totalNotif = $connect->prepare($sql); 
						$totalNotif->execute();
						$totalCount = $totalNotif->fetchColumn();
						echo $totalCount;
					?> 
					</h2>
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
  $sql = "SELECT p.id, p.driver_name, p.driver_surname, p.d_phone_1, d.tex_pass_date, d.ins_date, d.gas_date, d.renta_date, d.trust_date FROM persons p
	 LEFT JOIN documents d ON d.id = p.id
	 /*WHERE documents.item_status = 0*/
	";
  $result = $connect->prepare($sql);
  $result->execute();

  function RenderItem($title, $date_diff, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone, $bageColor, $connect) { 
	
	$addStatus = "UPDATE documents SET item_status = 0 WHERE id = '$notif_id'";
	$statusSql = $connect->prepare($addStatus);
	$statusSql->execute(); ?>
			
			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill <?php echo $bageColor; ?> badge-content-img d-inline-block content-img-size"><?php $titleStatus = substr($title, 0, 1); echo $titleStatus; ?></span>
							<h5 class="d-inline-block content-border ml-1 mb-0">
								<a href="action/update?id=<?php echo $notif_id; ?>">
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
									<h4 class="content-day"><?php echo $date_diff; ?></h4>
									<p class="d-inline mr-3 content-day-color">k</p>
									<a href="tel:<?php echo $notif_phone ?>"><img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php } ?>

<?php
while ($notif = $result->fetch()) {
	
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



	$day = round($date_diff);

	if($day <= 30 && $day >= 20) {
		$bageColor = "bageGreen";
		RenderItem($title[0], $day, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone, $bageColor, $connect);
	} else if($day <= 20 && $day >= 10) {
		$bageColor = "bageYellow";
		RenderItem($title[0], $day, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone, $bageColor, $connect);
	} else if($day <= 10 && $day >= 0) {
		$bageColor = "bageRed";
		RenderItem($title[0], $day, $notif_id, $notif_driver_name, $notif_driver_surname, $notif_phone, $bageColor, $connect);
	}

}


}


} 


?> 


	</div>
</div>
<!-- end -->
<?php include 'includes/footer.php'; 
} else {
	?>
	<script>
	window.location.replace("user/login");
	</script>
	<?php
}
?>