<?php
// удаляем записть из бд
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
$sql = "DELETE FROM breeds WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();

header("Location: /"); exit;
?>