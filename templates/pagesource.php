<html>
<head>
<title>Ken's Class Site</title>
<?php 
// php library loading first
require("lib/phpfunctions.php");

// local php functions go here 

// local php startup code goes here 
session_start();
validate_or_bounce();

?>
</head>
<body>
<?php readfile("lib/header.html"); ?>

<!-- Content goes here -->

<?php require("lib/footer.php"); ?>
</body>
</html>
