<?php

$dsn = 'mysql:dbname=codeship_db;host=localhost';
  $user = 'root';
  $password = 'root';
  $pdo = new PDO($dsn,$user,$password,
  array(
    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    )
  );

} catch(PDOException $e) {
  echo $e->getMessage();
}