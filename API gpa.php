<?php
session_start();
require '../config.php';
requireRole('student');

$stmt=$pdo->prepare("
 SELECT c.name,g.grade
 FROM courses c
 LEFT JOIN grades g 
 ON g.course_id=c.id AND g.student_id=?
");
$stmt->execute([$_SESSION['user_id']]);

echo json_encode($stmt->fetchAll());
