<?php
require_once("../lib/bootstrap.php"); 
$view['people'] = people::get_instance()->get_people();
?>
<html>
	<head>
		<title>Sky technical test</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	</head>
	<body>
		<form id="people" action="save.php" method="post">
			<table>
				<tr>
					<th>First name</th>
					<th>Last name</th>
					<th>Job</th>
				</tr>
				<?php foreach($view['people'] as $key => $person): ?>
					<tr>
						<td><input type="text" name="firstname[<?=$key?>]" id="firstname[<?=$key?>]" value="<?=$person->getFirstname()?>" /></td>
						<td><input type="text" name="lastname[<?=$key?>]" id="lastname[<?=$key?>]" value="<?=$person->getSurname()?>" /></td>
						<td><input type="text" name="job[<?=$key?>]" id="job[<?=$key?>]" value="<?=$person->getJobTitle()?>" /></td>
					</tr>
				<?php endforeach; ?>
				<tr>
					<td><input type="text" name="firstname[<?=$key+1?>]" id="firstname[<?=$key+1?>]" value="" /></td>
					<td><input type="text" name="lastname[<?=$key+1?>]" id="lastname[<?=$key+1?>]" value="" /></td>
					<td><input type="text" name="job[<?=$key+1?>]" id="job[<?=$key+1?>]" value="" /></td>
				</tr>
				
			</table>
			<input type="submit" value="  OK  " />
		</form>
	</body>
</html>
