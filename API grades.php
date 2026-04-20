<?php
session_start();
require '../config.php';
requireRole('professor');

if($_POST['action']=='save'){
 foreach($_POST['grades'] as $g){
  $pdo->prepare("
   INSERT INTO grades VALUES(?,?,?,?,?)
   ON DUPLICATE KEY UPDATE grade=?
  ")->execute([
   $g['student_id'],1,1,$_SESSION['user_id'],$g['grade'],$g['grade']
  ]);
 }
 echo json_encode(['success'=>true]);
}
