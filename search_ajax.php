<?php

include "includes/config.php";

if (isset($_POST['search'])) {
   $Name = $_POST['search'];

   $Query = "SELECT id, driver_name FROM persons WHERE lower(driver_name) LIKE '$Name%' LIMIT 5";
   $stmt = $connect->prepare($Query);
   $stmt->execute();

   while ($Result = $stmt->fetch()) {
?>

<ul>
<div class="list-group">
   <li style="list-style-type: none;" onclick='fill("<?php echo $Result["driver_name"]; ?>")'>
       <a href="action/user-view?id=<?php echo $Result['id'];?>" class="list-group-item list-group-item-action" style="color: black;"><?php echo $Result['driver_name']; ?></a>
   </li>
</div>

<?php
}
}
?>
</ul>


<?php

if (isset($_POST['search_update'])) {
   $Name = $_POST['search_update'];

   $Query = "SELECT id, driver_name FROM persons WHERE lower(driver_name) LIKE '$Name%' LIMIT 5";
   $stmt = $connect->prepare($Query);
   $stmt->execute();

   while ($Result = $stmt->fetch()) {
?>

<ul>
<div class="list-group">
   <li style="list-style-type: none;" onclick='fill("<?php echo $Result["driver_name"]; ?>")'>
       <a href="update?id=<?php echo $Result['id'];?>" class="list-group-item list-group-item-action" style="color: black;"><?php echo $Result['driver_name']; ?></a>
   </li>
</div>

<?php
}
}
?>
</ul>





<style>
   .list-group > li {
      margin-bottom: 2px;
      border: 1px solid #194399;
   }
</style>