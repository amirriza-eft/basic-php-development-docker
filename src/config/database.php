<?php

$host = 'php81_dev_environment_database';
$db = 'php81_dev_environment';
$user = 'root';
$password = '1234';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


// class DB{
//     private $pdo;

//     const HOST = 'php81_dev_environment_database';
//     $db = 'php81_dev_environment';
//     $user = 'root';
//     $password = '1234';

//     public function __construct()
//     {
//         $this->pdo = new PDO(
//         "mysql:host=".self::HOST.";dbname=".self::DB.";charset=utf8mb4",
//         self::USER,
//         self::PASSWORD
//     );
//     }
// }