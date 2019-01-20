<?php
//отловить $_FILES переданные данные
//var_dump($_FILES['image']['tmp_name']) . '\n';
//var_dump($_FILES['image']['name']);die;

//try {
//	$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
//	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//} catch (Exception $e) {
//	var_dump($e);
//	exit;
//}

//1) Соединиться с бд
$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
// 2)sql запрос -запись в базу данных значения из формы со страницы create.php
$sql = "INSERT INTO breeds (title, content, image) VALUES (:title, :content, :image)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->bindParam(":image", $_FILES['image']['name']);
$statement->execute();
//$statement->fetchAll(PDO::FETCH_ASSOC);

function uploadImage($image_file){
	$name_img = $image_file['name'];
	$tmp_name_img = $image_file['tmp_name'];
	move_uploaded_file($tmp_name_img, "uploads/" . $name_img);
}

uploadImage($_FILES['image']);

header("Location: /");