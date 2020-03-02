<?php

	class XXX_Model extends CI_Model {
		
		public function insertIntoFileAndRead($file_name, $uname, $upass)
		{
			$data = $uname.', '.$upass;
			/*
			$myfile = fopen($file_name, w) or die('Unable to open the file');
			fwrite($myfile, $data);
			fclose($myfile);
			$myfileRead = fopen($file_name) or die('unable to read the file');
			$file_data = fread($myfile, filesize($file_name));
			fclose($myfileRead);
			*/
			//return $file_data;
			$this->load->database();
			$data = $this->db->get('exampletable')->result();
			return $data;
		}
	}
?>