<?php

include 'config.php';

if(isset($_POST['view'])){

if($_POST["view"] != '')

{
   $update_query = "UPDATE documents SET status = 1 WHERE status=0";
   mysqli_query($connect, $update_query);
}


$query = "SELECT * FROM documents ORDER BY id DESC LIMIT 5";
$result = mysqli_query($connect, $query);
$output = '';

// if(mysqli_num_rows($result) > 0)
// {

// while($row = mysqli_fetch_array($result))

// {

//   $output .= '
//   <li>
//   <a href="#">
//   <strong>'.$row["comment_subject"].'</strong><br />
//   <small><em>'.$row["comment_text"].'</em></small>
//   </a>
//   </li>

//   ';
// }
// }

// else{
//     $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
// }

$status_query = "SELECT * FROM documents WHERE status = 0";
$result_query = mysqli_query($connect, $status_query);
$count = mysqli_num_rows($result_query);

$data = array(
   'notification' => $output,
   'unseen_notification'  => $count
);

echo json_encode($data);
}
?>