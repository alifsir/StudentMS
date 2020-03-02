<?php
	$this->load->helper('url');
	$this->load->helper('form');
	echo '<html>';
	echo '<head>';
	echo '<title>Admin Home Page</title>';
	/*
	echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
	echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">'.'</script>';
	echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">'.'</script>';
	*/
	echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">'.'</script>';
	echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">'.'</script>';
	echo '</head>';
	echo '<body>';
	echo '<div>';
	echo 'Welcome <h2>'.$user.'</h2>';
	if(isset($message))
		echo '<p>'.$message.'</p>';
	echo '<button type="button" name="add_user" value="" class= "" data-toggle="modal" data-target="#add_user_modal">+</button>';
	//Add User Modal
	echo '<div id="add_user_modal" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">';
	echo '<div class="modal-dialog">';
	echo '<div class="modal-content">';
	echo '<div class="modal-header">';
	echo '<button typ="button" class="close" data-dismiss="modal">'.'&times;'.'</button>';
	echo '<h4 class="modal-title">'.'New user'.'</h4>';
	echo '</div>';
	echo '<div class="modal-body">';
	/*
	echo form_open('Login/addNewUser');
	echo form_input('uname', 'username');
	echo '<br/>';
	echo form_input('fname', 'first name');
	echo '<br/>';
	echo form_input('lname', 'last name');
	echo '<br/>';
	echo form_input('pword', 'password');
	echo '<br/>';
	echo form_input('ucontact', 'contact number');
	echo '<br/>';
	echo form_submit('add_user_req', 'Add');
	echo form_close();
	*/
	?>
	<!--<form>-->
	<input type="text" id="moduname" name="muname" placeholder="username">
	<br/>
	<input type="text" id="modfname" name="mfname" placeholder="first name">
	<br/>
	<input type="text" id="modlname" name="mlname" placeholder="last name">
	<br/>
	<input type="text" id="modurole" name="murole" placeholder="user role">
	<br/>
	<input type="text" id="modupass" name="mupass" placeholder="password">
	<br/>
	<input type="text" id="moducont" name="mucont" placeholder="Contact Number">
	<br/>
	<button type="submit" id="btn_add">Add</button>
	<!--</form>-->
	<?php
	echo '</div>';
	echo '<div class="modal-footer">';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<table>';
	echo '<tr>';
	echo '<th>First Name</th>'.'<th>Last Name</th>'.'<th>Contact</th>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$fname.'</td>'.'<td>'.$lname.'</td>';//.'<td>'.$hopecounts.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<table id="usertable">';
	echo '<tr>';
	//Not working
	//echo '<td>'.anchor('student_info', 'Edit Student Info').'</td>';
	//Working
	//echo '<td>'.anchor('login/redirectUser/student_info', 'Edit Student Info').'</td>';
	//echo '<th>'.'Username'.'</th>'.'<th>'.'User Id'.'</th>'.'<th>'.'First Name'.'</th>'.'<th>'.'Last Name'.'</th>'.'<th>'.'Role'.'</th>'.'<th>'.'Password'.'</th>';
	//New design
	echo form_open('login/requestUsername');
	echo '<th>';
	echo	'<input type="text" name="" value="" placeholder="Username">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo '<th>';
	echo 	'<input type="text" name="" value="" placeholder="User Id">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo '<th>';
	echo 	'<input type="text" name="" value="" placeholder="First Name">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo '<th>';
	echo 	'<input type="text" name="" value="" placeholder="Last Name">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo '<th>';
	echo 	'<input type="text" name="" value="" placeholder="Role">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo '<th>';
	echo 	'<input type="text" name="" value="" placeholder="Password">';
	echo 	'<button type="submit">'.'<img src='.base_url('search_icon.png').' alt="search your query" width="10" height="10">'.'</button>';
	echo '</th>';
	echo form_close();
	echo '</tr>';
	foreach($ulist as $user)
	{
		echo '<tr>';
		echo '<td>'.$user['username'].'</td>';
		echo '<td>'.$user['userid'].'</td>';
		echo '<td>'.$user['firstname'].'</td>';
		echo '<td>'.$user['lastname'].'</td>';
		echo '<td>'.$user['userauth'].'</td>';
		echo '<td>'.$user['userpass'].'</td>';
		echo '<td>'.'<button type="submit" id="" name="del_user">'.'<img src='.base_url('delete_button_icon.png').' alt="search your query" width="10" height="10">'.'</button>'.'</td>';
		echo '<td>'.'<button type="button" id="" name="btn_edit_user" class="" data-toggle="modal" data-target="#edit_user_modal'.$user['userid'].'">'.'<img src='.base_url('edit-icon-2.jpg').' alt="edit user information" width="10" height="10">'.'</button>'.'</td>';
		/*
		echo '<td>'.'<button type="submit" id="" name="del_user" class="" data-toggle="modal" data-target="del_user_modal">'.'<img src='.base_url('delete_button_icon.png').' alt="search your query" width="10" height="10">'.'</button>'.'</td>';
		echo '<div id="del_user_modal" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">';
		echo '<div class="modal-dialog">';
		echo '<div class="modal-content">';
		echo '<div class="modal-header">';
		echo '<button typ="button" class="close" data-dismiss="modal">'.'&times;'.'</button>';
		echo '<h4 class="modal-title">'.'Remove user'.'</h4>';
		echo '</div>';
		echo '<div class="modal-body">';
		echo '<button type="submit" id="" name="user_deletion">Delete</button>';
		echo '</div>';
		echo '<div class="modal-footer">';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
		*/
		echo '<div id="edit_user_modal'.$user['userid'].'" class="modal" role="dialog" data-backdrop="static" data-keyboard="false">';
		echo 	'<div class="modal-dialog">';
		echo 		'<div class="modal-content">';
		echo 			'<div class="modal-header">';
		echo 				'<button typ="button" class="close" data-dismiss="modal">'.'&times;'.'</button>';
		echo 				'<h4 class="modal-title">'.'Remove user'.'</h4>';
		echo 			'</div>';
		echo 			'<div class="modal-body">';
		echo				'<input type="text" name="meuid" value='.$user['userid'].' placeholder="Userid" disabled>';
		echo				'<br>';
		echo				'<input type="text" name="meuname" value='.$user['username'].' placeholder="Username" disabled>';
		echo				'<br>';
		echo				'<input type="text" name="mefname" value='.$user['firstname'].' placeholder="First Name">';
		echo				'<br>';
		echo				'<input type="text" name="melname" value='.$user['lastname'].' placeholder="Last Name">';
		echo				'<br>';
		echo				'<input type="text" name="meupass" value='.$user['userpass'].' placeholder="Passphrase">';
		echo				'<br>';
		echo				'<input type="text" name="meurole" value='.$user['userauth'].' placeholder="User Role" disabled>';
		echo				'<br>';
		echo 				'<button type="submit" id='.$user['userid'].' name="user_edition">Save</button>';
		echo 			'</div>';
		echo 		'<div class="modal-footer">';
		echo 	'</div>';
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<a href="">Logout</a>';
	echo '</div>';
	?>
	<script type="text/javascript">
		$.ready(function(){
			show_users();

			function show_users()
			{
				$.ajax({
					type		: 'POST',
					url			: "<?php echo base_url()?>Login/getAdminUserInfoAjax",
					//assync		: true,
					dataType	: 'JSON',
					//data		: {un:muname, uf:mfname, ul:mlname, ur:murole, up:mupass, uc:mucont},
					success		: function(data){
						var html = '';
						var i;
						alert("success- show_users");
						/*
						for(i=0; i<data.length; i++)
						{
							html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
							$("#usertable").append(html);
						}
						*/
					},
					error		: function(){
						//alert("record insertion failed");
						alert("failure- show_users");
					}
				});
			}
			/*
			function add_user()
			{
				var un = $("input[name='muname']").val();
				var uf = $("input[name='mfname']").val();
				var ul = $("input[name='mlname']").val();
				var ur = $("input[name='murole']").val();
				var up = $("input[name='mupass']").val();
				var uc = $("input[name='mucont']").val();
				$.ajax({
					type		: 'POST',
					url			: "<?php echo base_url().'Login/newUser' ?>",
					//assync		: "true",
					dataType	: 'JSON',
					data		: {un:muname, uf:mfname, ul:mlname, ur:murole, up:mupass, uc:mucont},
					success		: function(data){
						var html = '';
						var i;
						/*for(i=0; i<data.length; i++)
						{
							html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
							$("#usertable").append(html);
						}
						*/
						/*if(data.res)
							alert("record inserted successfully");
						else
							alert("record insertion failed at server side");
					},
					error		: function(){
						alert("record insertion failed");
					}
				});
			}
			*/
			//Add User
			//$('#btn_add').on('click', function(){
				//add_user();
				/*
				var uname	=	$('#moduname').val();
				//var uid	=	$('').val();
				var fname	=	$('#modfname').val();
				var lname	=	$('#modlname').val();
				var urole	=	$('#modurole').val();
				var upass	=	$('#modupass').val();
				var ucont	=	$('#moducont').val();
				$ajax({
					type		:	"POST",
					url			:	<?php echo site_url('Login/newUser'); ?>,
					dataType	:	"JSON",
					data		:	{username:uname, firstname:fname, lastname:fname, userrole:urole, password:upass, contact:ucont},
					success		:	function(data){
						$('#add_user_modal').modal('hide');
						show_users();
					}
					error		:	function(){
						alert("record insertion failed");
					}
				});
				return false;
				*/
			//});
		});
		function add_user()
			{
				var un = $("input[name='muname']").val();
				var uf = $("input[name='mfname']").val();
				var ul = $("input[name='mlname']").val();
				var ur = $("input[name='murole']").val();
				var up = $("input[name='mupass']").val();
				var uc = $("input[name='mucont']").val();
				/*
				console.log("un"+un);
				console.log("uf"+uf);
				console.log("ul"+ul);
				console.log("ur"+ur);
				console.log("up"+up);
				console.log("uc"+uc);
				*/
				$.ajax({
					url			: "<?php echo base_url()?>index.php/Login/newUser",
					type		: "POST",
					dataType	: "JSON",
					//data		: {un:un, uf:uf, ul:ul, ur:ur, up:up, uc:uc},
					data		: {uname:un, ufirst:uf, ulast:ul, urole:ur, upass:up, ucont:uc},
					success		: function(data){
						alert("I am here after success");
						var html = '';
						var i;
						//console.log(data.res);
						/*for(i=0; i<data.length; i++)
						{
							html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
							$("#usertable").append(html);
						}
						*/
						console.log(data);
						if(data.res)
							alert("record inserted successfully");
						else
							alert("record insertion failed at server side");
					},
					error		: function(jqXHR, textStatus, errorThrown){
						alert("record insertion failed");
						alert('Error: ' + textStatus + ' ' + errorThrown);
						console.log(un);
						console.log(uf);
						console.log(ul);
						console.log(ur);
						console.log(up);
						console.log(uc);
					}
				});
				$('#add_user_modal').modal('hide');
			}
			
			$("button[name='user_edition']").click(function() {
				edit_user(this.id);
				//alert('id: '+this.id);
			});
			
			function edit_user(id)
			{
				//alert("id: "+id);
				var ui = $("#edit_user_modal"+id+" :input[name='meuid']").val();
				var uf = $("#edit_user_modal"+id+" :input[name='mefname']").val();
				var ul = $("#edit_user_modal"+id+" :input[name='melname']").val();
				var up = $("#edit_user_modal"+id+" :input[name='meupass']").val();
				
				console.log("un"+ui);
				console.log("uf"+uf);
				console.log("ul"+ul);
				//console.log("ur"+ur);
				console.log("up"+up);
				//console.log("uc"+uc);
				
				$.ajax({
					url			: "<?php echo base_url()?>index.php/Login/editUser",
					type		: "POST",
					dataType	: "JSON",
					//data		: {un:un, uf:uf, ul:ul, ur:ur, up:up, uc:uc},
					data		: {uid:ui, ufirst:uf, ulast:ul, upass:up},
					success		: function(data){
						//alert("I am here after success");
						var html = '';
						var i;
						//console.log(data.res);
						/*for(i=0; i<data.length; i++)
						{
							html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
							$("#usertable").append(html);
						}
						*/
						//console.log("returned data: "+data);
						console.log('returned: '+JSON.parse(data));
						if(JSON.parse(data.res))
							alert("record edition successfully");
						else
							alert("record edition failed at server side");
					},
					error		: function(jqXHR, textStatus, errorThrown){
						alert("record edition failed");
						alert('Error: ' + textStatus + ' ' + errorThrown);
						console.log(ui);
						console.log(uf);
						console.log(ul);
						//console.log(ur);
						console.log(up);
						//console.log(uc);
					}
				});
				$('#edit_user_modal'+id).modal('hide');
			}
			
			//Add User
			$('#btn_add').on('click', function(){
				add_user();
				//show_users();
				/*
				var uname	=	$('#moduname').val();
				//var uid	=	$('').val();
				var fname	=	$('#modfname').val();
				var lname	=	$('#modlname').val();
				var urole	=	$('#modurole').val();
				var upass	=	$('#modupass').val();
				var ucont	=	$('#moducont').val();
				$ajax({
					type		:	"POST",
					url			:	<?php echo site_url('Login/newUser'); ?>,
					dataType	:	"JSON",
					data		:	{username:uname, firstname:fname, lastname:fname, userrole:urole, password:upass, contact:ucont},
					success		:	function(data){
						$('#add_user_modal').modal('hide');
						show_users();
					}
					error		:	function(){
						alert("record insertion failed");
					}
				});
				return false;
				*/
			});
			
			//Delete user entry
			$("button[name='del_user']").click(function(){
				var del_row = $(this).closest("tr");
				//for(int i=0; i<del_row.length; i++)
				//	console.log(del_row[i]);
				var uname = del_row.find("td:eq(0)").text();
				//console.log(uname);
				delete_user(uname);
				
				function delete_user(username)
				{
					$.ajax({
						url			: "<?php echo base_url()?>index.php/Login/deleteUser",
						type		: 'POST',
						dataType	: 'JSON',
						data		: {uname:username},
						success		: function(data){
							alert("I am here after delete success");
							var html = '';
							var i;
							console.log("reached in delete's success");
							//console.log(data.res);
							/*for(i=0; i<data.length; i++)
							{
								html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
								$("#usertable").append(html);
							}
							*/
							if(data.res)
								alert("record deleted successfully");
							else
								alert("record deletion failed at server side");
						},
						error		: function(jqXHR, textStatus, errorThrown){
							alert("record deletion failed");
							alert('Error: ' + textStatus + ' ' + errorThrown);
						}
					});
					//$('#del_user_modal').modal('hide');
				}
			});
			/*
			function delete_user(username)
			{
				$.ajax({
					url			: "<?php echo base_url()?>index.php/Login/deleteUser",
					type		: 'POST',
					dataType	: 'JSON',
					data		: {uname:username},
					success		: function(data){
						alert("I am here after delete success");
						var html = '';
						var i;
						//console.log(data.res);
						////multi-line comment end symbol
						for(i=0; i<data.length; i++)
						//{
						//	html += "<tr><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td><td>"+data.+"</td></tr>";
						//	$("#usertable").append(html);
						//}
						//multi-line comment end symbol
						if(data.res)
							alert("record inserted successfully");
						else
							alert("record insertion failed at server side");
					},
					error		: function(){
						alert("record insertion failed");
					}
				});
				//$('#del_user_modal').modal('hide');
			}
			*/
	</script>
	<?php
	echo '</body>';
	echo '</html>';
?>