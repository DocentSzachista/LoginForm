<?php
if(isset($_SESSION['userId']) && isset($_SESSION['userName']))
{
    if( time()-$_SESSION['time']<5*60){
    echo $_SESSION['userId'];
    echo $_SESSION['userName'];
    
    $_SESSION['time']=time();
    }
    else{
        session_unset();
        session_destroy();
        header("Location: ./index.php?error=sessionexpired");
    }
}
else
{
    echo"Logaj się pierw";
    header("Location: ./index.php");
}
?>
