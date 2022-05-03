<html>
<head>
<title>LOGIN PAGE</title>
<?php 
// php library loading first
require ("lib/phpfunctions.php");
// local php functions  

// local php startup code here 
session_start();   

$message="";
$username = getPost('nameuser');
$password = getPost('passwduser');
if (isset($_POST['choice']))
{
    if ($_POST['choice'] == 'Login')
    {
    if (validate_login($username, $password))
    { 
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
    }
    $message = "Incorrect username or password!";
    }
}  
?>
</head>
<body>
<form method='POST'>
Name: <input type='text' name='nameuser' value='<?php showPost('nameuser');?>'> <br>
Password: <input type='password' name='passwduser' value='<?php showPost('passwduser');?>'> <br>
<input type='submit' name='choice' value='Login'> <br>
name is juju, password is deals <br>
<div style='position: absolute; bottom: 10px; '><p><?php echo $message;?></p></div>

</body>
</html>

<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Julian Lopez
csc155201h -->
