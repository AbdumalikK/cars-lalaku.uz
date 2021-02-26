<!-- Provinces -->
  <!-- Andijon toggle -->
                <div class="col-12">
                <div id="andijon" class="toggle m-0">

<?php 


if(!isset($_GET[''])) {

  if($_GET['Andijon']) {
    $province = $_GET['Andijon'];
  } else if($_GET['Buxoro']) {
    $province = $_GET['Buxoro'];
  } else if($_GET['Jizzax']) {
    $province = $_GET['Jizzax'];
  } else if($_GET['Qashqadaryo']) {
    $province = $_GET['Qashqadaryo'];
  } else if($_GET['Toshkent v.']) {
    $province = $_GET['Toshkent v.'];
  } else if($_GET['Namangan']) {
    $province = $_GET['Namangan'];
  } else if($_GET['Samarqand']) {
    $province = $_GET['Samarqand'];
  } else if($_GET['Surxondaryo']) {
    $province = $_GET['Surxondaryo'];
  } else if($_GET['Sirdaryo']) {
    $province = $_GET['Sirdaryo'];
  } else if($_GET['Toshkent sh.']) {
    $province = $_GET['Toshkent sh.'];
  } else if($_GET['Farg`ona']) {
    $province = $_GET['Farg`ona'];
  } else if($_GET['Xorazm']) {
    $province = $_GET['Xorazm'];
  } else if($_GET['Navoiy']) {
    $province = $_GET['Navoiy'];
  } else if($_GET['Qoraqalpoq']) {
    $province = $_GET['Qoraqalpoq'];
  }  else if($_GET['ozbekiston']) {
    $province = $_GET['ozbekiston'];
  }

}








$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Andijon'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}

?>

                </div>
                </div>
  <!-- end -->

 <!-- Buxoro toggle -->
                <div class="col-12">
                <div id="buxoro" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Buxoro'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 
  <!-- Jizzax toggle -->
                <div class="col-12">
                <div id="jizzax" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Jizzax'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end --> 

  <!-- Qashqadaryo toggle -->
                <div class="col-12">
                <div id="qashqadaryo" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Qashqadaryo'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Toshkent v. toggle -->
                <div class="col-12">
                <div id="toshkentv" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Toshkent v.'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Namangan toggle -->
                <div class="col-12">
                <div id="namangan" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Namangan'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Samarqand toggle -->
                <div class="col-12">
                <div id="samarqand" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Samarqand'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end --> 

  <!-- Surxondaryo toggle -->
                <div class="col-12">
                <div id="surxondaryo" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Surxondaryo'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                 <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Sirdaryo toggle -->
                <div class="col-12">
                <div id="sirdaryo" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Sirdaryo'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Toshkent sh. toggle -->
                <div class="col-12">
                <div id="toshkentsh" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Toshkent sh.'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Farg`ona toggle -->
                <div class="col-12">
                <div id="fargona" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Farg`ona'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                 <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- Xorazm toggle -->
                <div class="col-12">
                <div id="xorazm" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Xorazm'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end --> 

  <!-- Navoiy toggle -->
                <div class="col-12">
                <div id="navoiy" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Navoiy'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end --> 

  <!-- Qoraqalpoq toggle -->
<div class="col-12">
<div id="qoraqalpoq" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE region = 'Qoraqalpoq'
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
  <!-- end -->

  <!-- O`zbekiston toggle -->
<div class="col-12">
<div id="ozbekiston" class="toggle m-0">
              
<?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE c.id = p.id
";
$stmt = $connect->prepare($sql);
$stmt->execute();


if ($stmt->fetchColumn() > 0) {
  while ($row = $stmt->fetch()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name" ]." ".$row["driver_surname"].'</h5>
          
              
            </div>
          </div>
          
          <div class="col-6">
            <div class="info-2 mt-2">
              
              <div class="row">
                <div class="col-5 px-0 pr-2">
              <div class="d-inline-block br-3"></div>
              <p class="mb-0 font-8">telefon</p>
              <h5 class="mb-0 font-12">'.$row["d_phone_1"].'</h5>
                </div>
              <!-- </div>

              <div class="row"> -->

              <div class="col-5 d-inline px-0">
              <div class="d-inline-block"></div>
              <p class="mb-0 font-8">dav.raqami</p>
              <h5 class="mb-0 font-12">'.$row["d_number"].'</h5>
              </div>
                
                <div class="col-1 py-4 pl-2">
                  <a href="tel:'.$row["d_number"].'">
                  <img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
    ';

  }
} else {
  echo "0 natija";
}
// $connect->close();

 ?>        

                </div>
                </div>
