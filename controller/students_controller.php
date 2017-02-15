<?php

require(ROOT . "model/students_model.php");

$students = getAllStudents();

require(ROOT . "view/templates/header.php");
require(ROOT . "view/students/index.php");
require(ROOT . "view/templates/footer.php");