<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Demographic</title>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<script type="text/javascript" src="view.js"></script>
</head>

<body id="main_body">

	<img id="top" src="./images/top.png" alt="">
	<div id="form_container">

		<h1><a>Demographic</a></h1>
		<form id="form_42741" class="appnitro" method="post" action="DemographicValidation.php">
			<div class="form_description">
				<h2>Demographic</h2>
				<p></p>
			</div>
			<ul>

				<li id="li_1">
					<label class="description" for="id_number">ID Number </label>
					<div>
						<input name="id_number" id="id_number" class="element text medium" type="text" maxlength="255" value="" />
					</div>
				</li>
				<li id="li_2">
					<label class="description" for="fname">Name </label>
					<span>
						<input name="fname" id=" fname" class="element text" maxlength="255" size="8" value="" />
						<label>First</label>
					</span>
					<span>
						<input name="lname" id="lname" class="element text" maxlength="255" size="14" value="" />
						<label>Last</label>
					</span>
				</li>
				<li id="li_3">
					<label class="description" for="dob">Date of Birth </label>
					<span>
						<input name="dob" id="dob" class="element text" size="2" maxlength="2" value="" type="date"> /
					</span>

					<span id="calendar_3">
						<img id="cal_img_3" class="datepicker" src="./images/calendar.gif" alt="Pick a date.">
					</span>
				</li>
				<li id="li_4">
					<label class="description" for="gender">Gender</label>
					<span>
						<input name="gender" id=" gender" class="element radio" type="radio" value="Male" />
						<label class="choice" for="element_4_1">Male</label>
						<input name="gender" id="gender" class="element radio" type="radio" value="Female" />
						<label class="choice" for="element_4_2">Female</label>

					</span>
				</li>

				<li class="buttons">
					<input type="hidden" name="form_id" value="42741" />

					<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>
			</ul>
		</form>
		<div id="footer">
			Completed by [1900204] [Sheldon Smith].
		</div>
	</div>
	<img id="bottom" src="./images/bottom.png" alt="">
	<?php
	session_start(); // Start the session
	// Check for error messages in session variables and display them
	if (isset($_SESSION['idNumberError'])) {
		echo '<div class="error-messages">';
		echo '<ul>';
		echo '<li>' . htmlspecialchars($_SESSION['idNumberError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['firstNameError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['lastNameError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['dateOfBirthError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['genderError']) . '</li>';
		echo '</ul>';
		echo '</div>';
	}
	?>
</body>

</html>