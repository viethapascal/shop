<?php
	// define Student class
	class Student{
		public $name;
		public $bdate;
		public $gender;
		function Student($n, $date, $gen){
			$this->name=$n;
			$this->bdate=$date;
			$this->gender=$gen;
		}
		
	}
	// push new student to list using array_push function
	function push_to_list($List, $tmp){
		Global $List;
		array_push($List, $tmp);
	}
	
	//main 
	
	$new_student = array("name"=>"Ha","bdate"=>1996,"gender"=>"male");
	$List = array();
	push_to_list($List, $new_student);//using variable
	push_to_list($List, array("name"=>"Thuan","bdate"=>1998,"gender"=>"female")); // using new object
	$n = count($List);
	for($i=0; $i<$n; $i++){
		echo $i.".<br>";
		echo "	".$List[$i]["name"]."<br>";
		echo "	".$List[$i]["bdate"]."<br>";
		echo "	".$List[$i]["gender"]."<br>";
	}
?>