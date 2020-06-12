<?php
Class Task {

	private $title;
	private $description;

	public function __construct($title, $desc){

      $this->title = $title;
      $this->description = $desc;

	}


}


$task = new Task('LEARN OOP', 'This lesson is beign taught by Jeffray Way!!');


$task1 = new Task('LEARN LARAVEL', 'By Jeffray Way!');
//$task->title  = 'LEARN VUE';

var_dump($task1);
var_dump($task);



?>