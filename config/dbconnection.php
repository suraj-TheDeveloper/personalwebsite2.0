<?php
    try {
        $connection = new PDO("mysql:host=localhost;dbname=personal2.0", "root", "123456");
    } catch(Exception $e) {
        echo "ERROR", $e;
    }   
?>