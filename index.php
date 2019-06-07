<?php 

$task = [
   'title' => 'Cleaning the bathroom',
   'due' => 'Tomorrow',
   'assigned_To' => 'Wife',
   'Status'=> false
];

$person = [
   'age'=> 45,
   'hair' => 'black',
   'Career' => 'Software Developer'

];

$animals = [
   'cow',
   'hoarse',
   'Goats'
];

//adding without a key 

$animals[] = 'elephantdddd';

// adding objects from an array

$person['name'] = 'Jeffrey'; 

// Remove a feature from an array

//unset($person['age']);



//echo $person [age];



// die(var_dump($person));

// die();

require 'index.view.php';

