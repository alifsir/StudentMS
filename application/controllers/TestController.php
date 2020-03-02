<?php
	class TestController extends CI_Controller {
		
		public $variable = 20;
		
		public function index()
		{
			$variable = 10;
			//global $variable;
			//echo GLOBALS[$variable];
			$a = new TestController();
			echo $a->variable;
			echo $variable;
			echo $a->variable < $variable;
		}
	}
?>