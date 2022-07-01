<?php

// echo phpinfo();

echo 'Hello, World!';

$host = 'mariadb:3306';
$dbname = 'mydatabase';
$user = 'root';
$password = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $stmt = $pdo->query('SELECT * FROM visitor', PDO::FETCH_ASSOC);
    $results = $stmt->fetchAll();
    
    echo '<pre>';
    var_dump($results);
    echo '</pre>';
}
catch (PDOException $e) {
    echo $e->getMessage();
}