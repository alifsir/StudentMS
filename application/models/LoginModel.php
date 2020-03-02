<?php
	class LoginModel extends CI_Model {
		
		//User's Authentication information
		public $credentials = array(
			//'Ali asger' => 'Ali123',
			//'Hozefa' => 'Huz123',
			//'Fakhruddin' => 'Fak123',
			//'Ismail' => 'Ism123'
			array(
				'username' 	=> 'ali@admin',
				'userpass'	=> 'Ali123'
			),
			array(
				'username' 	=> 'hozefa@student',
				'userpass'	=> 'Huz123'
			),
			array(
				'username' 	=> 'fakhruddin@admin',
				'userpass'	=> 'Fak123'
			),
			array(
				'username' 	=> 'ismail@student',
				'userpass'	=> 'Ism123'
			),
			array(
				'username' 	=> 'arwa@teacher',
				'userpass'	=> 'Arw123'
			),
			array(
				'username' 	=> 'batul@teacher',
				'userpass'	=> 'Bat123'
			)
		);
		
		//User's information
		public $user_info = array(
		array(
				'userid' 	=> '1',
				'username' 	=> 'ali@admin',
				'firstname'	=> 'Ali asger',
				'lastname'	=> 'Sir',
				'userpass'	=> 'Ali123',
				'userauth'	=> 'admin',
				'ucontact'	=> '7676680678'
			),
			array(
				'userid' 	=> '2',
				'username' 	=> 'hozefa@student',
				'firstname'	=> 'Huzefa',
				'lastname'	=> 'Saeed',
				'userpass'	=> 'Huz123',
				'userauth'	=> 'student',
				'ucontact'	=> '7676680678'
			),
			array(
				'userid' 	=> '3',
				'username' 	=> 'fakhruddin@admin',
				'firstname'	=> 'Fakhruddin',
				'lastname'	=> 'Tahery',
				'userpass'	=> 'Fak123',
				'userauth'	=> 'admin',
				'ucontact'	=> '7676680456'
				),
			array(
				'userid' 	=> '4',
				'username' 	=> 'ismail@student',
				'firstname'	=> 'Ismail',
				'lastname'	=> 'Badri',
				'userpass'	=> 'Ism123',
				'userauth'	=> 'student',
				'ucontact'	=> '7676680678'
			),
			array(
				'userid' 	=> '5',
				'username' 	=> 'arwa@teacher',
				'firstname'	=> 'Arwa',
				'lastname'	=> 'Miyaji',
				'userpass'	=> 'Arw123',
				'userauth'	=> 'teacher',
				'ucontact'	=> '7676680321'
			),
			array(
				'userid' 	=> '6',
				'username' 	=> 'batul@teacher',
				'firstname'	=> 'Batul',
				'lastname'	=> 'Bhukhiya',
				'userpass'	=> 'Bat123',
				'userauth'	=> 'teacher',
				'ucontact'	=> '7676680543'
			)
		);
		
		//User's Role information
		public $user_auth = array(
			array(
				'username'	=> 'ali@admin',
				'userauth'	=> 'admin'
			),
			array(
				'username'	=> 'hozefa@student',
				'userauth'	=> 'student'
			),
			array(
				'username'	=> 'fakhruddin@admin',
				'userauth'	=> 'admin'
			),
			array(
				'username'	=> 'ismail@student',
				'userauth'	=> 'student'
			),
			array(
				'username'	=> 'arwa@teacher',
				'userauth'	=> 'teacher'
			),
			array(
				'username'	=> 'batul@teacher',
				'userauth'	=> 'teacher'
			)
		);
		
		//Admin's information
		public $admin_info = array(
			array(
				'userid' 	=> '1',
				'username' 	=> 'ali@admin',
				'adminid'	=> '1',
				'firstname'	=> 'Ali asger',
				'lastname'	=> 'Sir',
				'userpass'	=> 'Ali123',
				'ucontact'	=> '7676680678',
				'hopecounts'=> '5'
			),
			array(
				'userid' 	=> '3',
				'username' 	=> 'fakhruddin@admin',
				'adminid'	=> '2',
				'firstname'	=> 'Fakhruddin',
				'lastname'	=> 'Tahery',
				'userpass'	=> 'Fak123',
				'ucontact'	=> '7676680456',
				'hopecounts'=> '3'
			)
		);
		
		//Teacher's information
		public $teacher_info = array(
			array(
				'userid' 			=> '5',
				'username' 			=> 'arwa@teacher',
				'teaching_subjects'	=> array('English', 'Hydraulics', 'Energy Dismission'),
				),
				array(
				'userid' 			=> '6',
				'username' 			=> 'batul@teacher',
				'teaching_subjects'	=> array('Data Structures', 'Machine Learning')
				)
			);
		
		//Student's information
		public $student_info = array(
			array(
				'userid' 	=> '2',
				'username' 	=> 'hozefa@student',
				'userdept'	=> 'Mechanical',
				'HOD'		=> 'Fatema Jamali',
				'subjects'	=> array('English', 'Hindi', 'Kinematics', 'Hydraulics', 'Energy Dismission'),
				/*
				'userscore'	=> array(
					'English' => '75',
					'Hindi' => '80',
					'Kinematics' => '85',
					'Hydraulics' => '65',
					'Energy Dismission' => '50',
					'total'				=> '355'
				)
					*/
				'scorecard'	=> array(
					'1'	=> array(
						'English' => '75',
						'Hindi' => '80',
						'Kinematics' => '85',
						'Hydraulics' => '65',
						'Energy Dismission' => '50',
						'total'				=> '355'
					),
					'2'	=> array(
						'English' => '65',
						'Hindi' => '70',
						'Kinematics' => '75',
						'Hydraulics' => '55',
						'Energy Dismission' => '40',
						'total'				=> '305'
					)
				)
			),
			array(
				'userid' 	=> '4',
				'username' 	=> 'ismail@student',
				'userdept'	=> 'Computer Science',
				'HOD'		=> 'Burhanuddin Vakil',
				'subjects'	=> array('English', 'Hindi', 'Java', 'Data Structures', 'Machine Learning', 'Analytics', 'Python'),
				/*
				'userscore'	=> array(
					'English' => '85',
					'Hindi' => '80',
					'Java' => '72',
					'Data Structures' => '69',
					'Machine Learning' => '53',
					'Analytics' => '79',
					'Python' => '90',
					'total'				=> '528'
					*/
				'scorecard'	=> array(
					'1'	=> array(
						'English' => '85',
						'Hindi' => '80',
						'Java' => '72',
						'Data Structures' => '69',
						'Machine Learning' => '53',
						'Analytics' => '79',
						'Python' => '90',
						'total'				=> '528'
					),
					'2'	=> array(
						'English' => '95',
						'Hindi' => '90',
						'Java' => '82',
						'Data Structures' => '79',
						'Machine Learning' => '63',
						'Analytics' => '89',
						'Python' => '100',
						'total'				=> '598'
					),
					'3'	=> array(
						'English' => '75',
						'Hindi' => '70',
						'Java' => '62',
						'Data Structures' => '59',
						'Machine Learning' => '43',
						'Analytics' => '69',
						'Python' => '80',
						'total'				=> '458'
					)
				)
			)
		);
		
		/*
		public function verify($username, $password)
		{
			foreach($credentials as $user => $pass)
			{
				if($user == $username)
					if($pass == $password)
						return true;
				return false;
			}
		}
		*/
		
		public function getAllUsers()
		{
			$users = array();
			foreach($credentials as $user)
			{
				array_push($users, $user);
			}
			return $users;
		}
		
		public function getAllUsersDB()
		{
			$users = array();
			$this->db->select('username');
			$users=$this->db->get('credentials');
			return $users;
		}
		
		public function getPasswordForUser($username)
		{
			/*
			foreach($this->credentials as $user => $pass)
			{
				if($user == $username)
					return $pass;
			}
			*/
			foreach($this->credentials as $credential)
			{
				if($credential['username'] == $username)
					return $credential['userpass'];
			}
			return null;
		}
		
		public function getUserInformation($username)
		{
			foreach($this->user_info as $userinfo)
			{
				if($userinfo['username'] == $username)
					return $userinfo;
			}
			return null;
			/*
			if($this->getUserAuth($username) == 'admin')
				{
					foreach($this->admin_info as $userinfo)
					{
						if($userinfo['username'] == $username)
							return $userinfo;
					}
					return null;
				}
				else
				{
					foreach($this->student_info as $userinfo)
					{
						if($userinfo['username'] == $username)
							return $userinfo;
					}
					return null;
				}
				*/
		}
		
		public function getUserAuth($username)
		{
			foreach($this->user_auth as $user => $auth)
			{
				if($user == $username)
					return $auth;
			}
			return null;
		}
		
		public function getStudentInfo($username)
		{
			foreach($this->student_info as $student)
			{
				if($student['username'] == $username)
					return $student;
			}
			return null;
		}
		
		public function getAdminInfo($username)
		{
			foreach($this->admin_info as $admin)
			{
				if($admin['username'] == $username)
					return $admin;
			}
			return null;
		}
		
		public function getTeacherInfo($username)
		{
			foreach($this->teacher_info as $teacher)
			{
				if($teacher['username'] == $username)
					return $teacher;
			}
		}
		
		public function getAllUserInformation()
		{
			return $this->user_info;
		}
		
		public function getAllUserInformationDB()
		{
			$this->load->database();
			$user_info = array();
			$result=$this->db->get('user_info');
			foreach($result->result_array() as $user)
			{
				array_push($user_info,$user);
			}
			return $user_info;
		}
		
		public function addUser($username, $fname, $lname, $role, $password, $contact)
		{
			$prev_count = count($this->user_info);
			$user = array(
				'userid' 	=> '7',
				'username' 	=> $username,
				'firstname'	=> $fname,
				'lastname'	=> $lname,
				'userpass'	=> $password,
				'userauth'	=> $role,
				'ucontact'	=> $contact
			);
			array_push($this->user_info, $user);
			$curr_count = count($this->user_info);
			if($curr_count > $prev_count)
				return true;
			else
				return false;
		}
		
		public function addUserToDB($username, $fname, $lname, $role, $password, $contact)
		{
			$this->load->database();
			$prev_count = $this->db->count_all('user_info');
			$sys_gen_uid = $prev_count + 1;
			$user = array(
				'userid' 	=> $sys_gen_uid,
				'username' 	=> $username,
				'firstname'	=> $fname,
				'lastname'	=> $lname,
				'userpass'	=> $password,
				'userauth'	=> $role,
				'ucontact'	=> $contact
			);
			$result["isAddSuccess"] = $this->db->insert('user_info', $user)->result();
			$curr_count = $this->db->count_all('user_info');
			return $result;
		}
		
		public function removeUserEntryFromDB($uname)
		{
			$this->load->database();
			$before_del = $this->db->count_all('user_info');
			//$this->db->where('username', $uname);
			//return $this->db->affected_rows();
			//$this->db->delete('user_info');
			$this->db->select('userauth');
			if($this->db->get('user_info') == 'admin')
			{
				$this->db->where('username', $uname);
				$this->db->delete('user_info, admin_info');
				return true;
			}
			else if($this->db->get('user_info') == 'student')
			{
				$this->db->where('username', $uname);
				$this->db->delete('user_info, student_info');
				return true;
			}
			else
			{
				return false;
			}
			//$this->db->delete();
			$after_del = $this->db->count_all('user_info');
			$isDelSuccess = false;
			if($before_del > $after_del)
				$isDelSuccess = true;
			else
				$isDelSuccess = false;
			$result = array(
				"isDelSuccess"	=>	$isDelSuccess
			);
			return $result;
		}
		
		public function editUserEntry($userid, $ufname, $ulname, $upass)
		{
			$this->load->database();
			$this->db->select('userauth');
			$this->db->where('userid', $userid);
			$role = $this->db->get('user_info')->result()[0]->userauth;
			//if($role == "admin")
			//echo json_encode('<script type="text/javascript">');
			//echo json_encode('console.log("role value in LoginModel line 467: "+'.$role.')');
			//echo json_encode('</script>');
			if(strcmp($role, "admin"))
			{
				$this->db->set('firstname', $ufname);
				$this->db->set('lastname', $ulname);
				$this->db->set('userpass', $upass);
				$this->db->where('userid', $userid);
				$this->db->update('user_info');
				//$this->db->update('admin_info');
				return true;
			}
			//elseif($role == "student")
			elseif(strcmp($role, "student"))
			{
				$this->db->set('firstname', $ufname);
				$this->db->set('lastname', $ulname);
				$this->db->set('userpass', $upass);
				$this->db->where('userid', $userid);
				$this->db->update('user_info');
				//$this->db->update('student_info');
				return true;
			}
			else
			{
				return false;
			}
			/*$this->db->where('userid', $userid);
			$query_user_info = $this->db->get('user_info');
			foreach($query_user_info->result() as $row)
				$updated_result_set = $row->urole;
				*/
		}
	}
?>


















