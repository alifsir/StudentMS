<?php
	class Login extends CI_Controller {
		
		public function verify()
		{
			$form_value = array(
				'user' => $this->input->post('fusername'),
				'pass' => $this->input->post('fpass')
				
			);
			$data = array();
			if($this->validate($form_value['user'], $form_value['pass']))
			{
				$this->load->model('LoginModel', 'lm');
				$data['user'] 	= $form_value['user'];
				//One approach
				$all_user_details = $this->lm->getAllUserInformationDB();
				//array_push($user_details, );
				$user_details 	= $this->lm->getUserInformation($form_value['user']);
				if($user_details['userauth'] == 'admin')
				{
					$admin_details = $this->lm->getAdminInfo($form_value['user']);
					//some get admin info method to display admin related details
					$data['fname'] 	= $user_details['firstname'];
					$data['lname'] 	= $user_details['lastname'];
					//$data['hopecount'] 	= $admin_details['hopecounts'];
					$data['ulist'] 	= $all_user_details;
					//$this->redirectUser('main_page_view', $data);
					$this->redirectUser('admin_home', $data);
				}
				else if($user_details['userauth'] == 'teacher')
				{
					$teacher_details = $this->lm->getTeacherInfo($form_value['user']);
					$data['fname'] 	= $user_details['firstname'];
					$data['lname'] 	= $user_details['lastname'];
					$data['tsubs'] 	= $teacher_details['teaching_subjects'];
					$this->redirectUser('teacher_home', $data);
				}
				else
				{
					//echo var_dump($user_details);
					//echo nl2br("\n\n\n\n\n");
					$stud_details = $this->lm->getStudentInfo($form_value['user']);
					//some get student info method to display student related details
					$data['fname'] 	= $user_details['firstname'];
					$data['lname'] 	= $user_details['lastname'];
					$data['udept'] 	= $stud_details['userdept'];
					$data['uhod'] 	= $stud_details['HOD'];
					$data['usubs'] 	= $stud_details['subjects'];
					$data['uscore']	= $stud_details['scorecard'];
					//$this->redirectUser('main_page_view', $data);
					$this->redirectUser('student_home', $data);
				}
				//another approach
				//array_push($data, $this->lm->getUserInformation($form_value['user']));
				//$data['pass'] = $form_value['pass'];
			}
			else
			{
				$data['user'] = $form_value['user'];
				$this->redirectUser('login_view', $data);
			}
		}
		
		public function addNewUser()
		{
			$this->load->helper('form');
			$this->load->model('LoginModel', 'lm');
			$form_value = array(
				'user' => $this->input->post('fusername'),
				'pass' => $this->input->post('fpass')
				
			);
			$data['user'] 	= $form_value['user'];
			//One approach
			$all_user_details = $this->lm->getAllUserInformation();
			//array_push($user_details, );
			$user_details 	= $this->lm->getUserInformation($form_value['user']);
			if($user_details['userauth'] == 'admin')
			{
				$admin_details = $this->lm->getAdminInfo($form_value['user']);
				//some get admin info method to display admin related details
				$data['fname'] 	= $user_details['firstname'];
				$data['lname'] 	= $user_details['lastname'];
				//$data['hopecount'] 	= $admin_details['hopecounts'];
				$data['ulist'] 	= $all_user_details;
				//$this->redirectUser('main_page_view', $data);
				//$this->redirectUser('admin_home', $data);
			}
			else if($user_details['userauth'] == 'teacher')
			{
				$teacher_details = $this->lm->getTeacherInfo($form_value['user']);
				$data['fname'] 	= $user_details['firstname'];
				$data['lname'] 	= $user_details['lastname'];
				$data['tsubs'] 	= $teacher_details['teaching_subjects'];
				//$this->redirectUser('teacher_home', $data);
			}
			else
			{
				//echo var_dump($user_details);
				//echo nl2br("\n\n\n\n\n");
				$stud_details = $this->lm->getStudentInfo($form_value['user']);
				//some get student info method to display student related details
				$data['fname'] 	= $user_details['firstname'];
				$data['lname'] 	= $user_details['lastname'];
				$data['udept'] 	= $stud_details['userdept'];
				$data['uhod'] 	= $stud_details['HOD'];
				$data['usubs'] 	= $stud_details['subjects'];
				$data['uscore']	= $stud_details['scorecard'];
				//$this->redirectUser('main_page_view', $data);
				//$this->redirectUser('student_home', $data);
			}
			$username = $this->input->post('uname');
			$firstname = $this->input->post('fname');
			$lastname = $this->input->post('lname');
			$password = $this->input->post('pword');
			$contact = $this->input->post('ucontact');
			$user_add_success = $this->newUser($username, $firstname, $lastname, $password, $contact);
			if($user_add_success)
			{
				$data['message'] = 'User added successfully';
			}
			else
			{
				$data['message'] = 'User not added';
			}
			$this->redirectUser('admin_home', $data);
		}
		
		public function validate($username, $password)
		{
			$this->load->model('LoginModel', 'lm');
			$returned_pass = $this->lm->getPasswordForUser($username);
			if($returned_pass !== null and $returned_pass == $password)
				return true;
			return false;
		}
		
		//public function newUser($username, $fname, $lname, $role, $password, $mobno)
		public function newUser()
		{
			$this->load->model('LoginModel', 'lm');
			//$is_added = $this->lm->addUser($username, $fname, $lname, $password, $mobno);
			$username 	= $this->input->post('uname');
			$fname 		= $this->input->post('ufirst');
			$lname 		= $this->input->post('ulast');
			$role 		= $this->input->post('urole');
			$password 	= $this->input->post('upass');
			$mobno 		= $this->input->post('ucont');
			//--$res = $this->lm->addUserToDB($username, $fname, $lname, $role, $password, $mobno);
			$res['username'] = $username;
			$res['fname'] = $fname;
			$res['lname'] = $lname;
			$res['role'] = $role;
			$res['password'] = $password;
			$res['mobno'] = $mobno;
			$res['res'] = true;
			/*
			if($is_added)
				return true;
			else
				return false;
			*/
			echo json_encode($res);
		}
		
		public function redirectUser($view, $values=array())
		{
			if(empty($values))
			{
				$this->load->view($view);
			}
			else
			{
				$this->load->view($view, $values);
			}
		}
		
		public function requestUsername($user_value)
		{
			
		}
		
		public function getAdminUserInfoAjax()
		{
			$this->load->model('LoginModel','lm');
			return $this->lm->getAllUserInformationDB();
		}
		
		public function addUserAjax()
		{
			$this->load->model('LoginModel', 'lm');
			$username 	=	$this->input->post('un');
			$fname		=	$this->input->post('uf');
			$lname		=	$this->input->post('ul');
			$role		=	$this->input->post('ur');
			$password	=	$this->input->post('up');
			$mobno		=	$this->input->post('uc');
			$res = $this->lm->addUserToDB($username, $fname, $lname, $role, $password, $mobno);
			//return json_encode($res);
			echo json_encode($res);
		}
		
		public function deleteUser()
		{
			$this->load->model('LoginModel', 'lm');
			$user = $this->input->post('uname');
			$res = $this->lm->removeUserEntryFromDB($user);
			//return json_encode($res);
			echo json_encode($res);
		}
		
		public function editUser()
		{
			$userid = $this->input->post('uid');
			$ufname = $this->input->post('ufirst');
			$ulname = $this->input->post('ulast');
			$upass  = $this->input->post('upass');
			/*$data = array(
				'userid' => $this->input->post('uid'),
				'ufname' => $this->input->post('ufirst'),
				'ulname' => $this->input->post('ulast'),
				'upass'=> $this->input->post('upass')
				);*/
			//$this->load->view('temporary', $data);
			//echo $userid.', '.$ufname.', '.$ulname.', '.$upass;
			//exit(0);
			$this->load->model('LoginModel', 'lm');
			$res = $this->lm->editUserEntry($userid, $ufname, $ulname, $upass);
			echo json_encode($res);
		}
	}
?>