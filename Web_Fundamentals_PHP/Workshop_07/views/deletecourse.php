<?php
include '../model/course.php';
$course = new course();
$course->deletecourse($_GET["id"]);
header('Location:listcourse.php');
