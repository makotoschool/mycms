<?php
session_start();
$title=$_SESSION['post']['title'];
$content=$_SESSION['post']['content'];
require_once(__DIR__.'/../lib/dbh.php');
$stmt=$dbh->prepare('INSERT INTO posts(new_date,title,content) VALUES (now(),? ,? )');
$stmt->execute(array($title,$content));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="admin.css">
<title>確認</title>
</head>
<body>
<div class="container">
    <h1 class="maintitle">投稿管理画面</h1>
    <div class="content">
       <h2 class="subtitle">投稿完了しました</h2>
 

        
    </div>

    
            
</div>
</body>
</html>