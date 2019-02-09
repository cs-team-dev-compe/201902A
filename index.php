<?php

$sql = "SELECT * FROM review";
$result = $pdo->query($sql);
$result = $result->fetch();

