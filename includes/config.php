<?php 

// define(DB_SERVER, 'localhost');
// define(DB_USERNAME, 'root');
// define(DB_PASSWORD, 'root');
// define(DB_NAME, 'lalaku-cars');

$localWhiteList = array('127.0.0.1', 'lalaku-cars.uz');
$protocol = strtolower(substr($_SERVER['SERVER_PROTOCOL'],0,strpos($_SERVER["SERVER_PROTOCOL"],'/'))).'://';

if(in_array($_SERVER['REMOTE_ADDR'], $localWhiteList)){
	// local connect
	$DB_SERVER = 'localhost';
	$DB_USERNAME = 'root';
	$DB_PASSWORD = 'root';
	$DB_NAME = 'lalaku-cars';
	// try {
	// 	$connect = new PDO("mysql:host=$DB_SERVER;dbname=lalaku-cars", $DB_USERNAME, $DB_PASSWORD);
	// 	// set the PDO error mode to exception
	// 	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "Connected successfully";
	//   } catch(PDOException $e) {
	// 	echo "Connection failed: " . $e->getMessage();
	//   }
} else {
	// server connect
	$currentUrl = 'http://' . $_SERVER['SERVER_PROTOCOL'] . $_SERVER['REQUEST_URI'];
	$homeUrl = 'http://'.$_SERVER['SERVER_NAME'];

	$DB_SERVER = 'localhost';
	$DB_USERNAME = 'root';
	$DB_PASSWORD = '';
	$DB_NAME = 'lalaku-cars';
	// try {
	// 	$connect = new PDO("mysql:host=$DB_SERVER;dbname=lalaku-cars", $DB_USERNAME, $DB_PASSWORD);
	// 	// set the PDO error mode to exception
	// 	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 	echo "Connected successfully";
	//   } catch(PDOException $e) {
	// 	echo "Connection failed: " . $e->getMessage();
	//   }

}



$connect = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// $connect = new PDO("mysql:host=$DB_SERVER;dbname=$DB_NAME",$DB_USERNAME ,$DB_PASSWORD);

if ($connect->connect_error) {
	die("Bazaga ulanmadi: " . $connect->connect_error);
}