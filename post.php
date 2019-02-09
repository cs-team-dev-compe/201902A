<?php
require_once('db.php');

$insert_sql = 'INSERT INTO review (title, user_name, review) VALUES(:title, :user_name, :review)';

try{
    $db = new PDO($pdo, $db_user, $db_password);

    if(isset($_POST['submit'])){
        $title = trim($_POST['title']);
        $user_name = trim($_POST['user_name']);
        $review = trim($_POST['review']);

        $stmt = $db -> prepare($insert_sql);
        $stmt -> bindValue(':title', $title, PDO::PARAM_STR);
        $stmt -> bindValue(':user_name', $user_name, PDO::PARAM_STR);
        $stmt -> bindValue(':review', $review, PDO::PARAM_STR);
        
        $stmt -> execute();

        header('location: index.php');
        exit();   
    }
    
} catch(PDOException $e) {
    header('Content-Type: text/plain; charset=UTF-8', true , 500);
    exit($e->getMessage());
}

