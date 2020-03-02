<?php
?>
<html>
	<head>
		<title>Ajax-JQuery</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="aa">Ajax-JQuery</div>
		<button id="changeit">change text</button>
		<script type="text/javascript">
			$("#changeit").click(function(){
				$("#aa").html("changed");
			});
		</script>
	</body>
</html>