<!-- Mixed cars -->
                <div class="col-12">
                <div id="" class="allCars m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
              <h5 class="d-inline-block content-border ml-0 mb-0">'.$row["model"].'</h5>
            </a>
              <p class="content-who text-dark ml-0">haydovchi</p>
              <h5 class="content-p mb-0 ml-0">'.$row["driver_name"]." ".$row["driver_surname"].'</h5>
          
              
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 










<!-- Matiz toggle -->
                <div class="col-12">
                <div id="matiz" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) = 'matiz'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Matiz BEST toggle -->
                <div class="col-12">
                <div id="matizBest" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'matiz (be%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Damas toggle -->
                <div class="col-12">
                <div id="damas" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) = 'damas'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Labo toggle -->
                <div class="col-12">
                <div id="labo" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'damas%labo%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Van toggle -->
                <div class="col-12">
                <div id="van" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'damas%van%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Spark toggle -->
                <div class="col-12">
                <div id="spark" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'spark%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Nexia 1 toggle -->
                <div class="col-12">
                <div id="nexia" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'nexia%1%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


<!-- Nexia 2 toggle -->
                <div class="col-12">
                <div id="nexia2" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'nexia%2%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


  <!-- Nexia 3 toggle -->
                <div class="col-12">
                <div id="nexia3" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'nexia%3%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


 <!-- Cobalt toggle -->
                <div class="col-12">
                <div id="cobalt" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'cobalt%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 



 <!-- Lacetti toggle -->
                <div class="col-12">
                <div id="lacetti" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'lacetti%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 





   <!-- Gentra toggle -->
                <div class="col-12">
                <div id="gentra" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'gentra%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


   <!-- Malibu 1 toggle -->
                <div class="col-12">
                <div id="malibu" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'malibu%1%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


   <!-- Malibu 2 toggle -->
                <div class="col-12">
                <div id="malibu2" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'malibu%2%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 


 <!-- Captiva toggle -->
                <div class="col-12">
                <div id="captiva" class="toggle m-0">
 <?php 
$sql = "SELECT c.id, c.model, p.driver_name, p.driver_surname, p.d_phone_1, c.d_number
FROM car as c
INNER JOIN persons p ON c.id=p.id WHERE lower(model) like 'captiva%'
";
$result = $connect->query($sql);


if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo '
<div class="content mt-4">
<div class="content-bordered">
      <div class="row">
          <div class="col-5 pr-1">
            <div class="info">
            <a href="action/user-view.php?id='.$row["id"].'">
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
  echo "0 natija".$mysqli -> error;
}
// $connect->close();

 ?>              


                </div>
                </div>
  <!-- end --> 