<?php	
	echo '<html>';
	echo '<head>';
	echo '</head>';
	echo '<body>';
	echo '<div>';
	echo 'Welcome <h2>'.$user.'</h2>';
	echo '<table>';
	echo '<tr>';
	echo '<th>First Name</th>'.'<th>Last Name</th>'.'<th>Contact</th>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$fname.'</td>'.'<td>'.$lname.'</td>'.'<td>'.$ucont.'</td>';//
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<a href="">Logout</a>';
	echo '</div>';
	echo '</body>';
	echo '</html>';
?>