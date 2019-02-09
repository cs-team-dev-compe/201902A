<?php

$searchBtn = $_POST['search'];
$search = $_POST['search'];

if (!empty($searchBtn)) {
  if (!empty($search)) {
    $sql = "SELECT * FROM review where title ='{$search}'";
    $result = $pdo->query($sql);
    $result = $result->fetch();
  } else {
    header('location: index_sch.html');
  }
}