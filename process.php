<?php

require 'user.class.php';
/* 
1- filter the post data 
2- santize the post data 
3- check the post data by use ctype
 */
if(isset($_POST['register'])){
    $user = new User();
    $name = $_POST['name'];
    echo $name;
    $user->dob = $_POST['dob'];
    
}
?>