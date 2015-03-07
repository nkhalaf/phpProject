<?php
if(!isset($_POST['userName']) || (!isset($_POST['password'])) || (!isset($_POST['email']))){
    die('bad access');
    echo 'bad';
}
require_once('db.php');
require_once('usersAPI.php');
$user = tinyf_users_get_by_name($_POST['userName']);
if($user==null){
$result = tinyf_users_add($_POST['userName'], $_POST['password'], $_POST['email'],0);
if($result){
    echo 'added';
}
}
else{
    echo 'choos another name';
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>