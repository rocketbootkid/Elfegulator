<html>


<head>
<title>Elfegulator</title>
</head>

<body>

<!-- Form to accept URL -->
	<form id="url" method="post" action="elfegulator.php">
		<input id="text" type="text" name="text" size="100"></input>
		<input name="button" type="submit" value="Elfegulate!"/> 
	</form>

<?php

	include('bin/functions.php');
	
	if (isset($_POST['text'])) {
		echo "ELFEGULATED TEXT<P>" . elfegulate($_POST['text']);
	}
	
	#displayLog();

?>

</body>

</html>