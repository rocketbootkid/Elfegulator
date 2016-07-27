<html>


<head>
<title>Elfegulator</title>
</head>

<body>

<!-- Form to accept URL -->
	<form id="url" method="post" action="elfegulator.php">
		<input id="text" type="text" name="text" size="100"></input>
		<input id="noise" type="text" name="noise" size="10"></input>
		<input name="button" type="submit" value="Elfegulate!"/> 
	</form>

<?php

	include('bin/functions.php');
	
	if (isset($_POST['text'])) {
		if ($_POST['noise'] != "") {
			$noise = $_POST['noise'];
		} else {
			$noise = "lfeg";
		}
		echo strtoupper($noise) . "ULATED TEXT<P>" . elfegulate($_POST['text'], $noise);
	}
	
	#displayLog();

?>

</body>

</html>