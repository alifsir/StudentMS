<?php
	class CodeIgniterAjaxExample extends CI_Controller {
		
		function index()
		{
			$data = array();
			$this->load->database();
			$data['value'] = $this->db->get('ExampleTable')->result();
			$this->load->view('example_view', $data);
		}
		
		function ajaxSaveRequest()
		{
			$data = array(
				'value'	=>	1
			);
			$this->load->database();
			$this->db->insert('', $data);
		}
		
		function getValueAjax()
		{
			$this->load->db();
		}
	}
?>