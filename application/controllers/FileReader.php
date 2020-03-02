<?php
	class FileReader {
		
		public function readData($file_name)
		{
			$myfile = fopen($file_name, r) or die('Unable to open the file');
			$file_data .= fread($myfile, filesize($file_name));
			fclose($myfile);
			return $file_data;
		}
		
		public function writeData($file_name, $data)
		{
			$myfile = fopen($file_name, w) or die('Unable to open the file');
			fwrite($myfile, $data);
			fclose($myfile);
		}
		
		public function displayData($file_name)
		{
			
		}
	}
	
	$fr = new FileReader();
	$txt = 'Hello, this is to write the file using php';
	$fr->writeData('toWrite.txt', $txt);
	$fr->readData('toWrite.txt');
?>