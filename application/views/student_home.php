<?php
	$this->load->helper('form');
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
	echo '<th>First Name</th>'.'<td>'.'<input type="text" value="'.$fname.'" placeholder="Firstname">'.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th>Last Name</th>'.'<td>'.'<input type="text" value="'.$lname.'" placeholder="Lastname">'.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th>Department</th>'.'<td>'.'<input type="text" value="'.$udept.'" placeholder="Department">'.'</td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th>HOD</th>'.'<td>'.'<input type="text" value="'.$uhod.'" placeholder="Head of Department">'.'</td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<table>';
	echo '<tr>';
	echo '<th>'.'Subject / Term'.'</th>';
	foreach($uscore as $term => $scores)
	{
		echo '<th>'.$term.'</th>';
	}
	echo '</tr>';
	foreach($usubs as $subject)
	{
		echo '<tr>';
		echo '<th>'.$subject.'</th>';
		foreach($uscore as $term => $scorecard)
		{
			echo '<td>'.$scorecard[$subject].'</td>';
		}
		echo '</tr>';
	}
	echo '<tr>';
	echo '<th>'.'TOTAL'.'</th>';
	foreach($uscore as $term => $scorecard)
	{
		echo '<td>'.$scorecard['total'].'</td>';
	}
	echo '</tr>';
	//New Approach, not working as it will print subject wise and not term wise
	/*
	foreach($uscore as $term => $scorecard)
	{
		echo '<th>'.$term.'</th>';
		foreach($scorecard as $subject => $marks)
		{
			echo '<tr>'.'<th>'.$subject.'</th>'.'<td>'.$marks.'</td>'.'</tr>';
		}
	}
	*/
	/*
	foreach($uscore as $subject => $marks)
	{
		echo '<tr>'.'<th>'.$subject.'</th>'.'<td>'.$marks.'</td>'.'</tr>';
	}
	*/
	//echo '<td>'.$udept.'</td>'.'<td>'.$usubs.'</td>'.'<td>'.$uscore.'</td>';
	//echo '</tr>';
	//echo '<tr>';
	//echo '<th>'.'TOTAL'.'</th>'.'<td>'.$uscore['total'].'</td>';
	//echo '</tr>';
	echo '</table>';
	echo '</div>';
	echo '<div>';
	echo '<button>'.'SAVE'.'</button>';
	echo '<button>'.'RESET'.'</button>';
	echo '</div>';
	echo '<div>';
	echo '<a href="">Logout</a>';
	echo '</div>';
	echo '</body>';
	echo '</html>';
?>