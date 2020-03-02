<?php
	$this->load->helper('url');
	echo '<html>';
	echo 	'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
	echo 	'<body>';
	echo 		'<div id="MeDiv">'.$msg.'</div>';
	//echo 		'<div id="MeDiv">'.'</div>';
	//echo 		'<form>';
	//echo		'<input type="text" name="abc">';
	//echo 		'<button id="MeButton" type="submit">'.'Call Ajax Resp function';
	echo		'<input type="text" name="username">';
	echo		'<input type="password" name="password">';
	echo 		'<button id="MeButton" type="submit">'.'Call Ajax Resp function';
	echo 		'</button>';
	echo		'<br/>';
	echo 		'<button id="DelButton" type="submit">'.'Delete the text';
	echo 		'</button>';
	//echo 		'</form>';
?>
			<script type="text/javascript">
				//Add text function
				 $("#MeButton").click(function(){
					var uname = $("input[name='username']").val();
					var upass = $("input[name='password']").val();
					//var description = $("textarea[name='description']").val();
					$.ajax({
						url: "<?php echo base_url()?>index.php/XXX_Controller/ajaxResp",
						type: 'POST',
						dataType: 'JSON',
						//data: {title: title, description: description},
						data: {uname:uname,upass: upass},
						success: function(data) {
							var i;
								//$("#MeDiv").append($msg);
								//$("#MeDiv").append(data.msg);
								//$("#MeDiv").replaceWith(data.msg);
								//$("#MeDiv").text(data.msg);
								alert("function loaded successfully");
								for(i=0; i<data.length; i++){
									//data[i].msg;
									//$("#MeDiv").append(data[i].title);
									//$("#MeDiv").append(data.msg);
									//$("#MeDiv").text(data[i]);
									$("#MeDiv").append(" "+data[i]);
								}
								//$("#MeDiv").html(data.msg);
								//$("#MeDiv").replaceWith(data.msg);
						},
						error: function() {
							alert('Something is wrong');
						}
					});
				});
				
				//Delete text function
				$("#DelButton").click(function(){
					//var description = $("textarea[name='description']").val();
					$.ajax({
						url: "<?php echo base_url()?>index.php/XXX_Controller/ajaxResp",
						type: 'POST',
						dataType: 'JSON',
						//data: {title: title, description: description},
						data: {uname:uname,upass: upass},
						success: function(data) {
							var i;
								//$("#MeDiv").append($msg);
								//$("#MeDiv").append(data.msg);
								//$("#MeDiv").replaceWith(data.msg);
								//$("#MeDiv").text(data.msg);
								alert("function loaded successfully");
								for(i=0; i<data.length; i++){
									//data[i].msg;
									//$("#MeDiv").append(data[i].title);
									//$("#MeDiv").append(data.msg);
									//$("#MeDiv").text(data[i]);
									$("#MeDiv").append(" "+data[i]);
								}
								//$("#MeDiv").html(data.msg);
								//$("#MeDiv").replaceWith(data.msg);
						},
						error: function() {
							alert('Something is wrong');
						}
					});
				});
			</script>
<?php
	echo 	'</body>';
	echo '</html>';
?>