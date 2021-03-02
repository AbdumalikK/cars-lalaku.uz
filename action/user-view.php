<?php include '../includes/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LaLaKoo Cars</title>
    <!-- Styles css-->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/source/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/css/style.css">
    <!-- <link rel="stylesheet" href="../styles/css/search.css"> -->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/css/image.css">
    <!-- <link rel="stylesheet" href="styles/source/all.min.css"> -->
    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/fonts/18VAGROUNDEDMBOLD_0.TTF">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/fonts/TITILLIUM-BOLD.OTF">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/fonts/TITILLIUM-REGULAR.OTF">
    <link rel="stylesheet" href="<?php echo $homeurl; ?>styles/fonts/TITILLIUM-THIN.OTF">
    <link rel="icon" href="<?php echo $homeurl; ?>favicon.ico" type="image/x-icon">
    <!-- JS Files -->
    <!-- <script src="<?php echo $homeurl; ?>styles/source/jquery.min.js"></script> -->
    <!-- <script src="<?php echo $homeurl; ?>styles/source/popper.min.js"></script>
    <script src="<?php echo $homeurl; ?>styles/source/bootstrap.min.js"></script>
    <script src="<?php echo $homeurl; ?>styles/js/doc-js/FileSaver.js"></script>
    <script src="<?php echo $homeurl; ?>styles/js/doc-js/jquery.wordexport.js"></script>
    <script src="<?php echo $homeurl; ?>styles/source/html2canvas.js"></script>
    <script src="<?php echo $homeurl; ?>styles/js/app.js"></script> -->
    <style>
    .hideToggle {
        display: none;
    }
    </style>
</head>
<body>


<!-- Container -->
<div class="loader">
<p id="loadText">LaLaKu <img src="<?php echo $homeurl; ?>styles/loader-logo.svg" width="50" height="50" alt="is loading..."></p>
</div>

<div class="container-fluid container-lg mx-lg-auto m-0">

   <!-- logo -->
        <div class="row m-0 p-0">
            <div class="col-md p-0">

                <div class="logo">
                  <img class="logo-press" src="<?php echo $homeurl; ?>styles/logo-background.svg">
                    

                    <a href="<?php echo $homeurl; ?>index"><img class="pos-top" src="<?php echo $homeurl; ?>styles/logo.svg" alt="logo"></a>
<?php 
if(isset($_SESSION["loggedin"])) {
    echo '<a class="notification" href="./notification">
        <img src="'.$homeurl.'styles/icons/notification.svg" alt="Bildirishnoma"><span class="badge badge-pill badge-danger ntf">10</span>
    </a>';
} else {

}
 ?>


                <a href="./search">
                    <img class="search" src="<?php echo $homeurl; ?>styles/icons/search.svg" alt="Qidirish">
                </a>

                </div>

               
            </div>
        </div>
    <!-- Logo end -->

        <!-- section navbar -->
        <section class="container">
            <div class="row minus m-min">
                <!-- Modellar -->
                <div class="col-6 mb-lg-3 mb-2">
                    <button class="btn-nav font-titillium-bd" onclick="toggle('models')">Modellar <img src="<?php echo $homeurl; ?>styles/icons/arrow.svg">
                    </button>
                </div>
                <!-- end -->
                <!-- Mintaqalar -->
                <div class="col-6 mb-lg-3 mb-2 text-right">
                    <button class="btn-nav font-titillium-bd" onclick="toggle('provinces')">Mintaqalar <img src="<?php echo $homeurl; ?>styles/icons/arrow.svg"></button> 
                </div>
                <!-- end -->
            </div>
        </section>
        <!-- end -->

        <!-- Modellar, Mintaqalar -->
                        <!-- Models -->
                        <div class="col-12 px-2 m-0">
                                     <div id="models" style="display: none;" class="toggle m-0">
                                    <div class="col-12 px-0 m-0">
                                <div class="col-10 offset-1 content-border mt-2 mb-3">
                                </div>
                                    <div class="col-12">
                                        <div class="row">
                                        
                                            <div class="col-4 pl-0 pr-2 pt-0">
                                                <button onclick="toggle('matiz')" class="province-btn d-block">Matiz <div class="province-number">
                                                 <?php 
                                                    $sql = "SELECT count(*) FROM car WHERE lower(model) = 'matiz'";
                                                    $stmt = $connect->prepare($sql);
                                                    $stmt->execute();
                                                    // $matiz = $stmt->fetch();

                                                    $matizAmount = $stmt->fetchColumn();
                                                    echo '('.$matizAmount.')';
                                                    ?>   
                                                </div></button>
                                                <button onclick="toggle('matizBest')" class="province-btn d-block mt-3">Matiz Best <div class="province-number">
                                                    <?php 
                                                    $sql2 = "SELECT count(*) FROM car WHERE lower(model) like 'matiz (be%'";
                                                    $stmt = $connect->prepare($sql2);
                                                    $stmt->execute();
                                                

                                                    $matizBestAmount = $stmt->fetchColumn();
                                                    echo '('.$matizBestAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('damas')" class="province-btn d-block mt-3">Damas <div class="province-number">
                                                    <?php 
                                                    $sql3 = "SELECT count(*) FROM car WHERE lower(model) like 'damas'";
                                                    $stmt = $connect->prepare($sql3);
                                                    $stmt->execute();

                                                    $damasAmount = $stmt->fetchColumn();
                                                    echo '('.$damasAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('labo')" class="province-btn d-block mt-3">D.Labo <div class="province-number">
                                                    <?php 
                                                    $sql4 = "SELECT count(*) FROM car WHERE lower(model) like 'damas%labo%'";
                                                    $stmt = $connect->prepare($sql4);
                                                    $stmt->execute();

                                                    $laboAmount = $stmt->fetchColumn();
                                                    echo '('.$laboAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('van')" class="province-btn d-block mt-3">D.Van <div class="province-number">
                                                    <?php 
                                                    $sql5 = "SELECT count(*) FROM car WHERE lower(model) like 'damas%van%'";
                                                    $stmt = $connect->prepare($sql5);
                                                    $stmt->execute();

                                                    $vanAmount = $stmt->fetchColumn();
                                                    echo '('.$vanAmount.')';
                                                    ?> 
                                                </div></button>
                                                
                                            </div>
                                            <div class="col-4 px-2 pt-0">
                                                <button onclick="toggle('spark')" class="province-btn d-block">Spark <div class="province-number">
                                                    <?php
                                                    $sql6 = "SELECT count(*) FROM car WHERE lower(model) like 'spark%'"; 
                                                    $stmt = $connect->prepare($sql6);
                                                    $stmt->execute();

                                                    $sparkAmount = $stmt->fetchColumn();
                                                    echo '('.$sparkAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia')" class="province-btn d-block mt-3">Nexia 1 <div class="province-number">
                                                     <?php 
                                                    $sql7 = "SELECT count(*) FROM car WHERE lower(model) like 'nexia%1%'";
                                                    $stmt = $connect->prepare($sql7);
                                                    $stmt->execute();

                                                    $nexiaAmount = $stmt->fetchColumn();
                                                    echo '('.$nexiaAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia2')" class="province-btn d-block mt-3">Nexia 2 <div class="province-number">
                                                    <?php 
                                                    $sql8 = "SELECT count(*) FROM car WHERE lower(model) like 'nexia%2%'";
                                                    $stmt = $connect->prepare($sql8);
                                                    $stmt->execute();

                                                    $nexia2Amount = $stmt->fetchColumn();
                                                    echo '('.$nexia2Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia3')" class="province-btn d-block mt-3">Nexia 3 <div class="province-number">
                                                    <?php 
                                                    $sql9 = "SELECT count(*) FROM car WHERE lower(model) like 'nexia%3%'";
                                                    $stmt = $connect->prepare($sql9);
                                                    $stmt->execute();

                                                    $nexia3Amount = $stmt->fetchColumn();
                                                    echo '('.$nexia3Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('cobalt')" class="province-btn d-block mt-3">Cobalt <div class="province-number">
                                                    <?php 
                                                    $sql10 = "SELECT count(*) FROM car WHERE lower(model) like 'cobalt%'";
                                                    $stmt = $connect->prepare($sql10);
                                                    $stmt->execute();

                                                    $cobaltAmount = $stmt->fetchColumn();
                                                    echo '('.$cobaltAmount.')';
                                                    ?> 
                                                </div></button>
                                            </div>
                                            <div class="col-4 pl-2 pr-0 pt-0">
                                                <button onclick="toggle('lacetti')" class="province-btn d-block">Lacetti <div class="province-number">
                                                    <?php 
                                                    $sql11 = "SELECT count(*) FROM car WHERE lower(model) like 'lacetti%'";
                                                    $stmt = $connect->prepare($sql11);
                                                    $stmt->execute();

                                                    $lacettiAmount = $stmt->fetchColumn();
                                                    echo '('.$lacettiAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('gentra')" class="province-btn d-block mt-3">Gentra <div class="province-number">
                                                     <?php 
                                                    $sql12 = "SELECT count(*) FROM car WHERE lower(model) like 'gentra%'";
                                                    $stmt = $connect->prepare($sql12);
                                                    $stmt->execute();

                                                    $gentraAmount = $stmt->fetchColumn();
                                                    echo '('.$gentraAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('malibu')" class="province-btn d-block mt-3">Malibu 1 <div class="province-number">
                                                     <?php 
                                                    $sql13 = "SELECT count(*) FROM car WHERE lower(model) like 'malibu%1%'";
                                                    $stmt = $connect->prepare($sql13);
                                                    $stmt->execute();

                                                    $malibuAmount = $stmt->fetchColumn();
                                                    echo '('.$malibuAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('malibu2')" class="province-btn d-block mt-3">Malibu 2 <div class="province-number">
                                                     <?php
                                                    $sql14 = "SELECT count(*) FROM car WHERE lower(model) like 'malibu%2%'"; 
                                                    $stmt = $connect->prepare($sql14);
                                                    $stmt->execute();

                                                    $malibu2Amount = $stmt->fetchColumn();
                                                    echo '('.$malibu2Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('captiva')" class="province-btn d-block mt-3">Captiva <div class="province-number">
                                                     <?php 
                                                    $sql15 = "SELECT count(*) FROM car WHERE lower(model) like 'captiva%'";
                                                    $stmt = $connect->prepare($sql15);
                                                    $stmt->execute();

                                                    $captivaAmount = $stmt->fetchColumn();
                                                    echo '('.$captivaAmount.')';
                                                    ?> 
                                                </div></button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end -->

                                    <!-- Models border-bottom-->
                                    <div class="col-12 px-2">
                                     <div class="col-10 offset-1 content-border mt-3"></div>
                                    </div>
                                    <!-- end -->
                         </div>
                                    <!-- Models shadow -->
                                    <div class="col-12 p-0">
                                        <img class="province-shadow" src="<?php echo $homeurl; ?>styles/icons/province-shadow.svg" alt="province-shadow">
                                    </div>
                                    <!-- end -->
                            <!-- end -->
                                     </div>
                        </div>
                        <!-- end -->


                                    <!-- Provinces -->
                                     <div id="provinces" style="display: none;" class="toggle m-0">
                                <div class="col-12 px-2 m-0">
                                <div class="col-10 offset-1 content-border mt-2 mb-3">
                                </div>
                                    <div class="col-12">
                                        <div class="row">
                                        
                                            <div class="col-4 pl-0 pr-2 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('andijon')">Andijon <div class="province-number">
                                                    <?php
                                                    $sql = "SELECT count(*) FROM car WHERE region = 'Andijon'"; 
                                                    $stmt = $connect->prepare($sql);
                                                    $stmt->execute();

                                                    $andijonAmountCars = $stmt->fetchColumn();
                                                    echo '('.$andijonAmountCars.')';
                                                    ?>
                                                </div>
                                                </button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('buxoro')">Buxoro <div class="province-number">
                                                    <?php 
                                                    $sql1 = "SELECT count(*) FROM car WHERE region = 'Buxoro'";
                                                    $stmt = $connect->prepare($sql1);
                                                    $stmt->execute();

                                                    $BuxoroAmountCars = $stmt->fetchColumn();
                                                    echo '('.$BuxoroAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('jizzax')">Jizzax <div class="province-number">
                                                     <?php 
                                                    $sql2 = "SELECT count(*) FROM car WHERE region = 'Jizzax'";
                                                    $stmt = $connect->prepare($sql2);
                                                    $stmt->execute();

                                                    $JizzaxAmountCars = $stmt->fetchColumn();
                                                    echo '('.$JizzaxAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('qashqadaryo')">Qashqadaryo <div class="province-number">
                                                     <?php 
                                                    $sql3 = "SELECT count(*) FROM car WHERE region = 'Qashqadaryo'";
                                                    $stmt = $connect->prepare($sql3);
                                                    $stmt->execute();

                                                    $QashqadaryoAmountCars = $stmt->fetchColumn();
                                                    echo '('.$QashqadaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('toshkentv')">Toshkent v. <div class="province-number">
                                                     <?php 
                                                    $sql4 = "SELECT count(*) FROM car WHERE region = 'Toshkent v.'";
                                                    $stmt = $connect->prepare($sql4);
                                                    $stmt->execute();

                                                    $ToshkentAmountCars = $stmt->fetchColumn();
                                                    echo '('.$ToshkentAmountCars.')';
                                                    ?>
                                                </div></button>
                                                
                                            </div>
                                            <div class="col-4 px-2 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('namangan')">Namangan <div class="province-number">
                                                     <?php 
                                                    $sql5 = "SELECT count(*) FROM car WHERE region = 'Namangan'";
                                                    $stmt = $connect->prepare($sql5);
                                                    $stmt->execute();

                                                    $NamanganAmountCars = $stmt->fetchColumn();
                                                    echo '('.$NamanganAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('samarqand')">Samarqand <div class="province-number">
                                                     <?php 
                                                    $sql6 = "SELECT count(*) FROM car WHERE region = 'Samarqand'";
                                                    $stmt = $connect->prepare($sql6);
                                                    $stmt->execute();

                                                    $SamarqandAmountCars = $stmt->fetchColumn();
                                                    echo '('.$SamarqandAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('surxondaryo')">Surxondaryo <div class="province-number">
                                                     <?php 
                                                    $sql7 = "SELECT count(*) FROM car WHERE region = 'Surxondaryo'";
                                                    $stmt = $connect->prepare($sql7);
                                                    $stmt->execute();

                                                    $SurxondaryoAmountCars = $stmt->fetchColumn();
                                                    echo '('.$SurxondaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('sirdaryo')">Sirdaryo <div class="province-number">
                                                     <?php 
                                                    $sql8 = "SELECT count(*) FROM car WHERE region = 'Sirdaryo'";
                                                    $stmt = $connect->prepare($sql8);
                                                    $stmt->execute();

                                                    $SirdaryoAmountCars = $stmt->fetchColumn();
                                                    echo '('.$SirdaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('toshkentsh')">Toshkent sh. <div class="province-number">
                                                     <?php 
                                                    $sql9 = "SELECT count(*) FROM car WHERE region = 'Toshkent sh.'";
                                                    $stmt = $connect->prepare($sql9);
                                                    $stmt->execute();

                                                    $ToshkentShAmountCars = $stmt->fetchColumn();
                                                    echo '('.$ToshkentShAmountCars.')';
                                                    ?>
                                                </div></button>
                                            </div>
                                            <div class="col-4 pl-2 pr-0 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('fargona')">Farg'ona <div class="province-number">
                                                     <?php 
                                                    $sql10 = "SELECT count(*) FROM car WHERE region = 'Farg`ona'";
                                                    $stmt = $connect->prepare($sql10);
                                                    $stmt->execute();

                                                    $FargonaAmountCars = $stmt->fetchColumn();
                                                    echo '('.$FargonaAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('xorazm')">Xorazm <div class="province-number">
                                                     <?php 
                                                    $sql11 = "SELECT count(*) FROM car WHERE region = 'Xorazm'";
                                                    $stmt = $connect->prepare($sql11);
                                                    $stmt->execute();

                                                    $XorazmAmountCars = $stmt->fetchColumn();
                                                    echo '('.$XorazmAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('navoiy')">Navoiy <div class="province-number">
                                                     <?php 
                                                    $sql12 = "SELECT count(*) FROM car WHERE region = 'Navoiy'";
                                                    $stmt = $connect->prepare($sql12);
                                                    $stmt->execute();

                                                    $NavoiyAmountCars = $stmt->fetchColumn();
                                                    echo '('.$NavoiyAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('qoraqalpoq')">Qoraqalpoq <div class="province-number">
                                                     <?php 
                                                    $sql13 = "SELECT count(*) FROM car WHERE region = 'Qoraqalpoq'";
                                                    $stmt = $connect->prepare($sql13);
                                                    $stmt->execute();

                                                    $QoraqalpoqAmountCars = $stmt->fetchColumn();
                                                    echo '('.$QoraqalpoqAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('ozbekiston')">O`zbekiston <div class="province-number">
                                                     <?php 
                                                    $sql14 = "SELECT count(*) FROM car";
                                                    $stmt = $connect->prepare($sql14);
                                                    $stmt->execute();

                                                    $OzbekistonAmountCars = $stmt->fetchColumn();
                                                    echo '('.$OzbekistonAmountCars.')';
                                                    ?>
                                                </div></button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end -->

                                    <!-- Province border-bottom-->
                                    <div class="col-12 px-2">
                                     <div class="col-10 offset-1 content-border mt-3"></div>
                                    </div>
                                    <!-- end -->
                         </div>
                                    <!-- Province shadow -->
                                    <div class="col-12 p-0">
                                        <img class="province-shadow" src="../styles/icons/province-shadow.svg" alt="province-shadow">
                                    </div>
                                    <!-- end -->
                            <!-- end -->

                        </div>
                    <!-- end -->


            <!-- Categories -->
            <div class="container-fluid bg-yellow">
                <div class="row mx-1">
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('year')"><img class="img-fluid" src="../styles/icons/yili.svg" alt="yili"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('owner')"><img class="img-fluid" src="../styles/icons/egalik.svg" alt="egalik"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('gps')"><img class="img-fluid" src="../styles/icons/gps.svg" alt="gps"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('bought')"><img class="img-fluid" src="../styles/icons/harid.svg" alt="harid"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('sold')"><img class="img-fluid" src="../styles/icons/sotuv.svg" alt="sotuv"></button></div>
                    <div class="col-2 px2 text-center px12"><button class="btn-nav font-titillium-bd" onclick="toggle('fine')"><img class="img-fluid" src="../styles/icons/jarima.svg" alt="jarima"></button></div>
                </div>
            </div>
            <!-- end -->

                <!-- Modellar toggle -->
                <div class="row">
                    <div class="col-12">
                <div id="year" style="display: none;" class="toggle m-0">
                Hozircha bo`sh...
                </div>
                    </div>
                </div>
                <!-- end -->

                <!-- Mintaqalar toggle -->
                 <div class="row">
                    <div class="col-12">
                <div id="owner" style="display: none;" class="toggle m-0">
               Hozircha bo`sh...
                </div>
                </div>
             </div>
             <!-- end -->


             <!-- Categories toggles showing here -->
                 <div class="toggle-categories">
                    <!-- Categories -->
                     <div class="row">
                        <div class="col-12">
                                     <div id="gps" style="display: none;" class="toggle m-0">
                                    Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="bought" style="display: none;" class="toggle m-0">
                                     Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="sold" style="display: none;" class="toggle m-0">
                                     Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="fine" style="display: none;" class="toggle m-0">
                                    Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                 </div>
                <!-- end categories -->
            <!-- end -->

</div>
    
    <!-- Add information section -->
        <div class="container mt-4 p-2 text-center">
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-docs" onclick="getPDF()" id=""><img src="../styles/icons/pdf.svg" alt="pdf"></button>
                </div>
                <div class="col-3">
                    <button class="btn btn-docs" onclick="exportHTML()" id="doc-click"><img src="../styles/icons/doc.svg" alt="doc"></button>
                </div>
                <div class="col-3">
                    <!-- onclick="exportToExcel();" -->
                    <button name="export_excel" class="btn btn-docs" id="btnExport"><img src="../styles/icons/exl.svg" alt="exl"></button>
                </div>
                <div class="col-3">
                    <button class="btn btn-docs" onclick="downloadimage()" id=""><img src="../styles/icons/jpg.svg" alt="jpg"></button>
                </div>
            </div>
        </div>
        <div class="container parent mx-lg-auto my-4">
            <div class="pdf">
            <div id="img">
            <div id="doc">
            <div id="excel">
                <!-- Car -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/view/car.php'?>
                <!-- Documents -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/view/documents.php'?>
                <!-- Companies -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/view/companies.php'?>
                <!-- Persons -->
                <?php include $_SERVER['DOCUMENT_ROOT'].'/sections/view/persons.php'?>
                <!-- Purchase -->
                <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/view/purchase.php'?>
                <!-- Sell -->
                <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/view/sell.php'?>
                <!-- Status -->
                <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/view/status.php'?>
                <!-- Fine -->
                <?php //include $_SERVER['DOCUMENT_ROOT'].'/sections/view/fine.php' ?>
            </div>
            </div>
            </div>
            
                        <div class="col-12 p-0">
                            <a href="update?id=<?php echo $id; ?>">
                                <button class="btn btn-save mt-3">Tuzatish</button>
                            </a>
                        </div>

        </div>
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="<?php echo $homeurl; ?>styles/js/doc-js/FileSaver.js"></script>
    <script src="<?php echo $homeurl; ?>styles/js/doc-js/jquery.wordexport.js"></script>
    <script src="<?php echo $homeurl; ?>styles/source/html2canvas.js"></script>
    <script src="<?php echo $homeurl; ?>styles/js/app.js"></script>
	<script src="<?php echo $homeurl; ?>styles/js/loader.js"></script>