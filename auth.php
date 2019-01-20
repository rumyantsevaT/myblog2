<?php
//поймать данные из формы со страницы login

$pdo = new PDO("mysql:host=localhost;dbname=myblog.loc;charset=utf8", "root", "root");
$statement = $pdo->prepare("INSERT INTO users (name, password) VALUE (:name, :password"));
