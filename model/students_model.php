<?php

function getStudent($id) {

}

function getAllStudents() {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM students";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();

}

function editStudent() {

}

function deleteStudent() {

}

function createStudent() {
	
}