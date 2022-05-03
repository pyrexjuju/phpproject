<html>
<head>
<title>SOURCE PAGE</title>
<?php 

require("lib/phpfunctions.php");

// local php functions here 

// local php startup code here
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>



<?php require("lib/footer.php"); ?>
</body>
</html>
