<?php

// require VIEWS.'/delete.view.php';
$db=connectMysql($dsn,$dbuser,$dbpassword);
$id=filter_input(INPUT_GET,'id');
if(deletebooks($db,'books',$id)){
    header('Location:admin');
} else{
    header('Location:home');
}


