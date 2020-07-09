<?php
session_start();
if(isset($_SESSION['userId']) && isset($_SESSION['userName']))
{
    echo $_SESSION['userId'];
    echo $_SESSION['userName'];
}
else
{
    echo"Logaj się pierw";
    header("Location: ./index.php");
}

?>
