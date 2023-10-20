<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Academic</title>
	<link rel="stylesheet" type="text/css" href="view.css" media="all">
	<script type="text/javascript" src="view.js"></script>

</head>

<body id="main_body">

	<img id="top" src="/images/top.png" alt="">
	<div id="form_container">

		<h1><a>Academic</a></h1>
		<form id="form_42741" class="appnitro" method="post" action="AcademicValidation.php">
			<div class="form_description">
				<h2>Academic</h2>
				<p></p>
			</div>
			<ul>

				<li id="li_1">
					<label class="description" for="academic">Academic Level </label>
					<div>
						<input name="academic" id="academic" class="element text small" type="text" maxlength="255" value="" />
					</div>
					<p class="guidelines" id="guide_1"><small>Levels go from 1 to 4</small></p>
				</li>
				<li id="li_2">
					<label class="description" for="mods">Number of Modules Taken </label>
					<div>
						<input name="mods" id="mods" class="element text medium" type="text" maxlength="255" value="" />
					</div>
				</li>
				<li id="li_3">
					<label class="description" for="degree">Degree Pursuing </label>
					<div>
						<select class="element select medium" id="degree" name="degree">
							<option value="" selected="selected"></option>
							<option value="Computer Network Systems">Computer Network Systems</option>
							<option value="Animation Development and Production">Animation Development and Production</option>
							<option value="Artificial Intelligence and Robotics">Artificial Intelligence and Robotics</option>

						</select>
					</div>
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
	<img id="bottom" src="/images/bottom.png" alt="">
	<?php
	session_start(); // Start the session
	// Check for error messages in session variables and display them
	if (isset($_SESSION['academicLevelError'])) {
		echo '<div class="error-messages">';
		echo '<ul>';
		echo '<li>' . htmlspecialchars($_SESSION['academicLevelError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['modulesTakenError']) . '</li>';
		echo '<li>' . htmlspecialchars($_SESSION['degreePursuingError']) . '</li>';
		echo '</ul>';
		echo '</div>';
	}
	?>
</body>

</html>