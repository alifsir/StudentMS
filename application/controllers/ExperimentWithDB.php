<?php
	class ExperimentWithDB extends CI_Controller {
		
		public function index()
		{
			$this->load->database();
			$prev_count = $this->db->count_all('exampletable');
			$this->db->where('name', 'ali');
			$db_output = $this->db->delete('exampletable');
			$upd_count = $this->db->count_all('exampletable');
			//$this->db->delete('exampletable');
			if($prev_count > $upd_count)
				echo 'delete just performed';
			else
				echo 'delete not performed';
		}
	}
?>