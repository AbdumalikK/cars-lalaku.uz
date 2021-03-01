<?php 
include 'includes/config.php';
include 'includes/header.php'; 
?>

<head>
	<link rel="stylesheet" href="./styles/css/search.css">
</head>


<div class="container-lg mx-lg-auto py-3 mb-4 bg-white">
	<div class="row">
		<div class="col-12 px-4">
			<form action="search_ajax">
				<div class="search-input">
					<input type="text" name="search" id="search" class="search-control" placeholder="Qidirish" autofocus autocomplete="off"><img class="search-img" src="styles/icons/search icon.svg" alt="">
				</div>
			</form>
	        <div id="display" class="mt-2"></div>
		</div>
	</div>

		<!-- <form action="search-general">
							<div class="row p-2">
											<div class="col-4 p-0 pl-2">
												<label class="mt-4 ml-3 search-option-title" for="marka">marka</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
												
												<label class="mt-4 ml-3 search-option-title" for="marka">i.ch.yili</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">region</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">egalik huquqi</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
                                            </div>

                                            <div class="col-4 p-0 px-2">
												<label class="mt-4 ml-3 search-option-title" for="marka">model</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
												
												<label class="mt-4 ml-3 search-option-title" for="marka">olingan yili</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">rayon</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">haydovchi</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
                                            </div>

                                            <div class="col-4 p-0 pr-2">
                                                <label class="mt-4 ml-3 search-option-title" for="marka">kuzov turi</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
												
												<label class="mt-4 ml-3 search-option-title" for="marka">sotilgan yili</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">javobgar shaxs</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>

												<label class="mt-4 ml-3 search-option-title" for="marka">yoqilg`i turi</label>		
												<select class="search-option" name="marka" id="marka">
													<option value="hammasi" selected>Hammasi</option>
													<option value="kaptiva">Kaptiva</option>
													<option value="kaptiva">Toyota</option>
												</select>
                                            </div>
			
							</div>
		<div class="row">
			<div class="col-12 text-center mt-4">
				<a href="search-result"><img src="styles/icons/search-icon.svg" alt="qidiruv"></a>
			</div>
		</div>
		</form> -->






</div>

<?php include "includes/footer.php"; ?>
<script src="styles/js/search.js"></script>