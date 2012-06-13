<?php
require_once("../lib/bootstrap.php"); 

// Clear out the currently stored people.
people::get_instance()->clear_people();

// Load the post data into person objects into an array
$new_people = array();
foreach($_POST['firstname'] as $key => $firstname){
	$surname = $_POST['lastname'][$key];
	$job = $_POST['job'][$key];
	$new_person = person::factory()
		->setFirstname($firstname)
		->setSurname($surname)
		->setJobTitle($job);
	if($new_person->isValid()){
		$new_people[] = $new_person;
	}
}
people::get_instance()
	->set_people($new_people)
	->save();

header("Location: index.php");