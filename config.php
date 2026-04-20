<?php
$pdo = new PDO("mysql:host=localhost;dbname=gpa_db","root","");

function requireRole($r){
 if(!isset($_SESSION['role']) || $_SESSION['role']!=$r){
  header("Location:?page=login"); exit;
 }
}
