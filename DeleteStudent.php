<?php
include_once "Student.php";
include_once "StudentManager.php";

$studentManager = new StudentManager();
$id = $_GET["id"];
$studentManager->deleteStudentId($id);
header("Location:index.php");
