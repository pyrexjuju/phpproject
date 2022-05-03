<?php
function validate_or_bounce()
{
    if (!isset($_SESSION['username']))
    header("Location: login.php");

}

function showPost($key) 
{
    if ( isset($_POST[$key]) )
    echo htmlspecialchars($_POST[$key]);
}

function getPost($key) 
{
    if ( isset($_POST[$key]) )
    return htmlspecialchars($_POST[$key]);
    return "";
}

function validate_login($username, $password)
{
    if ($username=="juju" && $password=="deals")
    return true;
    return false;
}


?>

<!--  I honor Parkland's core values by affirming that I have 
followed all academic integrity guidelines for this work.
Julian Lopez
csc155201h -->
