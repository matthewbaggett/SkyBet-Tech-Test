<?php
require_once("../lib/bootstrap.php"); 
require_once("../controllers/index.php")
?>
<html>
	<head>
		<title>Sky technical test</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
		<script type="text/javascript" src="/js/skybet.js"></script>
	</head>
	<body>
		<form id="people" action="save.php" method="post" autocomplete="off">
			<table>
				<tr>
					<th>First name</th>
					<th>Last name</th>
					<th>Job</th>
				</tr>
				<tr class="blankrow">
					<td><input type="text" name="firstname[]" class="firstname" value="" /></td>
					<td><input type="text" name="lastname[]" class="lastname" value="" /></td>
					<td><input type="text" name="job[]" class="job" value="" /></td>
				</tr>
				
			</table>
			<input type="submit" value="  OK  " />
		</form>
	</body>
</html>
