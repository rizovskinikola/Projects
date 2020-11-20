<?php
$id = $_GET['myID'];
$sql = ("SELECT * FROM information WHERE id=$id");
$stmt = $db->prepare($sql);
$stmt->execute();
$currentGame = $stmt->fetchAll();

?>