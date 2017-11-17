<h1>First Virtual Hosting Test Production Domain</h1>

<?php
public function getData(){
    $conn = new PDO('mysql:host=localhost; dbname=phpless_production', 'root', 'ci23845ebP?');
    $statement = $conn->prepare("SELECT name FROM country;");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

$data = getData();

foreach ($data as $country){
    echo $country;
}
?>
