<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->loginmedewerker($_POST['username'], $_POST['password']);
        //yurr
    }else{
        //do something
    }
}


?>