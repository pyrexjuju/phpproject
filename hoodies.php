<html>
<head>
<title>	HOODIES</title>
<?php 

require("lib/phpfunctions.php");

// local php functions

// local php startup code 
session_start();
validate_or_bounce();

$ITEM = 'Red Bape Zipup Hoodie';

if (! isset( $_SESSION[$ITEM] ))
{   
    
    $_SESSION[$ITEM] = 0;
}

if ( isset( $_POST['choice'] ) )
{   
    $choice = $_POST['choice'];
    if ($choice == 'Add 1')
    {
    $_SESSION[$ITEM] += 1;
    }
    else if ($choice == 'Add 10')
    {
    $_SESSION[$ITEM] += 10;
    }
    else if ($choice == 'Remove All')
    {
    $_SESSION[$ITEM] = 0;
    }
}

$ITEM2 = 'Regular Bape Camo Hoodie';

if (! isset( $_SESSION[$ITEM2] ))
{

    $_SESSION[$ITEM2] = 0;
}

if ( isset( $_POST['choice1'] ) )
{
    $choice1 = $_POST['choice1'];
    if ($choice1 == 'Add 1')
    {
    $_SESSION[$ITEM2] += 1;
    }
    else if ($choice1 == 'Add 10')
    {
    $_SESSION[$ITEM2] += 10;
    }
    else if ($choice1 == 'Remove All')
    {
    $_SESSION[$ITEM2] = 0;
    }
}

$ITEM3 = 'Regular Nike Black Hoodie';

if (! isset( $_SESSION[$ITEM3] ))
{

    $_SESSION[$ITEM3] = 0;
}

if ( isset( $_POST['choice2'] ) )
{
    $choice2 = $_POST['choice2'];
    if ($choice2 == 'Add 1')
    {
    $_SESSION[$ITEM3] += 1;
    }
    else if ($choice2 == 'Add 10')
    {
    $_SESSION[$ITEM3] += 10;
    }
    else if ($choice2 == 'Remove All')
    {
    $_SESSION[$ITEM3] = 0;
    }
}

$ITEM4 = 'Regular Orange Nike Hoodie';

if (! isset( $_SESSION[$ITEM4] ))
{   
    
    $_SESSION[$ITEM4] = 0;
}

if ( isset( $_POST['choice3'] ) )
{   
    $choice3 = $_POST['choice3'];
    if ($choice3 == 'Add 1')
    {
    $_SESSION[$ITEM4] += 1;
    }
    else if ($choice3 == 'Add 10')
    {
    $_SESSION[$ITEM4] += 10;
    }
    else if ($choice3 == 'Remove All')
    {
    $_SESSION[$ITEM4] = 0;
    }
}


?>
</head>
<body>
<?php readfile("lib/header.html"); ?>
<center>
<h2>
<?php echo $_SESSION[$ITEM] . " $ITEM <br>"; ?>
</h2>
<form method='POST'>
<input type='submit' name='choice' value='Add 1'>
<input type='submit' name='choice' value='Add 10'>
<input type='submit' name='choice' value='Remove All'>
</form>
<img src='images/redbapecamo.jfif'>
</center>

<center>
<h2>
<?php echo $_SESSION[$ITEM2] . " $ITEM2 <br>"; ?>
</h2>
<form method='POST'>
<input type='submit' name='choice1' value='Add 1'>
<input type='submit' name='choice1' value='Add 10'>
<input type='submit' name='choice1' value='Remove All'>
</form>
<img src='images/bapebasiccamo.jpg'>
</center>

<center>
<h2>
<?php echo $_SESSION[$ITEM3] . " $ITEM3 <br>"; ?>
</h2>
<form method='POST'>
<input type='submit' name='choice2' value='Add 1'>
<input type='submit' name='choice2' value='Add 10'>
<input type='submit' name='choice2' value='Remove All'>
</form>
<img src='images/blacknikehood.jpg'>
</center>

<center>
<h2>
<?php echo $_SESSION[$ITEM4] . " $ITEM4 <br>"; ?>
</h2>
<form method='POST'>
<input type='submit' name='choice3' value='Add 1'>
<input type='submit' name='choice3' value='Add 10'>
<input type='submit' name='choice3' value='Remove All'>
</form>
<img src='images/orgnikehoodie.jfif'>
</center>

<?php require("lib/footer.php"); ?>
</body>
</html>

<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Julian Lopez
csc155201h -->
