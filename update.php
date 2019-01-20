<?php
//var_dump($_GET, $_POST);die;
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
$sql = "UPDATE breeds SET title=:title, content=:content WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->bindParam(":title" , $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->execute();

header("Location: /");
//var_dump($statement);
?>
