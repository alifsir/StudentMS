<?php
	echo '<html>';
	echo '<head>';
	echo '<title>Student Home Page</title>';
	echo '</head>';
	echo '<body>';
	echo '<div>';
	echo 'Welcome <h2>'.$user.'</h2>';
	echo '<table>';
	echo '<tr>';
	/*
	echo '<th>First Name</th>'.'<th>Last Name</th>'.'<th>Contact</th>';
	echo '</tr>';
	echo '<tr>';
	echo '<td>'.$fname.'</td>'.'<td>'.$lname.'</td>';//.'<td>'.$ucont.'</td>'
	echo '</tr>';
	*/
	echo '<th>First Name</th>'.'<td>'.$fname.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th>Last Name</th>'.'<td>'.$lname.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th>'.'SUBJECTS'.'</th>';
	foreach($tsubs as $subject)
	{
		echo '<td>'.$subject.'</td>';
	}
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<table>';
	echo '<tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '</div>';
	echo '<div>';
	echo '<a href="">Logout</a>';
	echo '</div>';
	echo '</body>';
	echo '</html>';
?>