<?php
require 'db.php';

$stmt = $pdo->query("SELECT title, likes, comments FROM photo_stats");
echo json_encode($stmt->fetchAll());
