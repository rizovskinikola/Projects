<?php

$sql = ("SELECT * FROM information");
$stmt = $db->prepare($sql);
$stmt->execute();
$games = $stmt->fetchAll();

?>