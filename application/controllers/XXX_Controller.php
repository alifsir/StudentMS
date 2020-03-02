<?php
	class XXX_Controller extends CI_Controller {
		
		public function index()
		{
			$data['msg'] = "load index";
			$this->load->view('xxx_view.php', $data);
			//$this->load->view('ajax-jquery');
		}
		
		public function printNewLine()
		{
			echo nl2br("\n");
		}
		
		public function arrayTest()
		{
			$arr1 = array('one'=>1, 'two'=>2);
			$arr2 = array('two'=>2, 'one'=>1, 'three'=>3);
			if($arr1 == $arr2)
				echo 'equal';
			else
				echo 'not equal';
		}
		
		public function ajaxResp()
		{
			$this->load->database();
			$this->db->set('userauth', 'hl');
			$this->db->where('userid', 3);
			$this->db->update('user_info');
		}
		
		public function equalityTest()
		{
			$a = 'B';
			$a2 = 'A';
			echo $a;
			$this->printNewLine();
			echo $a2;
			$this->printNewLine();
			if(!strcmp('SAME', 'SAME'))
				echo 'strcmp: equal';
			else
				echo 'strcmp: not equal';
			$this->printNewLine();
			echo '-------------------';
			$this->printNewLine();
			echo 'BC' < 'ABC';
			$this->printNewLine();
			echo '-------------------';
			$this->printNewLine();
			$x = -65;
			if($x)
				echo 'not zero';
			else
				echo 'zero';
			/*echo '$a = ABC, $a2 = ABC';
			$this->printNewLine();
			if($a == $a2)
				echo '==: equal';
			else
				echo '==: not equal';
			$this->printNewLine();
			if(strcmp($a, $a2) == 0)
				echo 'strcmp: equal';
			else
				echo 'strcmp: not equal';
			$this->printNewLine();
			$this->printNewLine();
			$this->printNewLine();
			echo '$a = ABC, $a2 = $a';
			$a = 'ABC';
			$a2 = $a;
			$this->printNewLine();
			if($a == $a2)
				echo '==: equal';
			else
				echo '==: not equal';
			$this->printNewLine();
			if(strcmp($a, $a2) == 0)
				echo 'strcmp: equal';
			else
				echo 'strcmp: not equal';
			*/
		}
	}
?>