<?php

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


if(strpos($url, 'beta') !== false){
	echo "<h1>First Virtual Hosting Test Staging Domain</h1>";
	$database = "phpless_staging";
	echo "Database: staging. <br>";
} else {
	echo "<h1>First Virtual Hosting Test Production Domain</h1>";
	$database = "phpless_production";
	echo "Database: production. <br>";
}

$conn = new PDO('mysql:host=localhost;dbname='.$database.'','root', 'ci23845ebP?');
if($conn == false){
    echo "error: connectie mislukt";
}
$statement = $conn->prepare("SELECT name FROM country;");
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $country){
    echo $country[name];
echo "<br>";
}

?>
