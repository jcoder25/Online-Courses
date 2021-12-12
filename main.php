<?php
    session_start();
    $f=$_SESSION['login'];
    if(!isset($f))
    {
        header('location:home.html');
    }
    else{
        $_SESSION['check']=1;
    
    }

    if($_SESSION['check']==1)
    {
        header('location:page.php');
    }
    else{
        header('location:home.html');
    }



?>




