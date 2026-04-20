<?php
session_start();
require 'config.php';

$page=$_GET['page']??'login';

if($page=='login' || $page=='logout'){
 require 'controllers/AuthController.php';
 (new AuthController())->handle($page);
}
elseif(str_starts_with($page,'admin')){
 requireRole('admin');
 require 'controllers/AdminController.php';
 (new AdminController())->handle($page);
}
elseif(str_starts_with($page,'professor')){
 requireRole('professor');
 require 'controllers/ProfessorController.php';
 (new ProfessorController())->handle($page);
}
elseif(str_starts_with($page,'student')){
 requireRole('student');
 require 'controllers/StudentController.php';
 (new StudentController())->handle($page);
}
