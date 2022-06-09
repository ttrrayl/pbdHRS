<?php
 
    try {
        $connection=new PDO("pgsql:host=localhost;dbname=hrs","postgres","diligent3012");
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>