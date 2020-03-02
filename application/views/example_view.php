<html>
	<head>
		<title>CodeIgniterAjaxExample</title>
	</head>
	<body>
		<div>
			<?php echo var_dump($value[0]); ?>
		</div>
		<form>
			<button type="submit" id="incr_val">Increment</button>
		</form>
		<script type="text/javascript">
		$.ready(function(){
			show_value();
			
			function show_value()
			{
				$.ajax({
					type		: 'ajax',
					url			: <?php echo site_url('CodeIgniterAjaxExample/getValueAjax') ?>
					assync		: true,
					dataType	: 'json',
					success		: function(data){
						var html = '';
						var i;
						for(i=0; i<data.length; i++)
						{
							html += "<div>"+data[0].value+"</div>";
						}
					}
				});
			}
			
			//Add User
			$('#incr_val').on('click', function(){
				$ajax({
					type		:	"POST",
					url			:	<?php echo site_url('Login/newUser'); ?>,
					dataType	:	"JSON",
					success		:	function(data){
						$('#add_user_modal').modal('hide');
						show_value();
					}
				});
				return false;
			});
		});
	</script>
	</body>
</html>