<?php
// удаляем записть из бд
require 'connectdb.php';
$sql = "DELETE FROM breeds WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $_GET['id']);
$statement->execute();

header("Location: /"); exit;
?>