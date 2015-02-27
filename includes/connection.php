<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cms', 'root', 'password');
} catch (PDOException $e) {
    exit('Database error.');
}
?>
