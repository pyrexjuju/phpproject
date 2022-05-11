<html>
<head>
<title>SHOPPING CART</title>
<?php 

require("lib/phpfunctions.php");

// local php functions here 

function cartFunc()
{
    $items = array('Chicago Retro Ones', 'Gamma Blue 12s', 'Air Max 97',
    'High Top Vans', 'Original Bulls New Era Cap', 'Original White Sox Cap',
    'Lakers Cap', 'Atlanta Cap', 'Ripped Navy Jeans', 'Rehgualr Levi Jeans',
    'Nike Sweat Shorts', 'Black Ripped Jeans', 'Red Bape Zipup Hoodie', 'Regular
    Bape Camo Hoodie', 'Regular Nike Black Hoodie', 'Regular Orange Nike Hoodie');
    foreach ($items as $item)
    {
    if (isset($_SESSION[$item]) && $_SESSION[$item] > 0)
    { 
        echo $item;
        echo $_SESSION[$item];
        echo "<br>";
    }
    }
}



// local php startup code here 
session_start();
validate_or_bounce();
?>
</head>
<body>
<?php readfile("lib/header.html"); ?>


<?php cartFunc() ?>
<center>
<img src = 'images/shoppingcart.png'>
</center>

<?php require("lib/footer.php"); ?>
</body>
</html>


<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Julian Lopez
csc155201h -->
