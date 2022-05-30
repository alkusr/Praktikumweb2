<?php
function koneksi()
{
    try {
        $pdo_conn = new PDO(
            'mysql:host=localhost;dbname=db_praktikum6',
            'root',
            '',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
        die();
    }
    return $pdo_conn;
}
