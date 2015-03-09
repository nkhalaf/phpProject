<?php

     if(!isset($_GET['id']))
      die ("no access");
      $_id = (int)$_GET['id'];
      if($_id==0)
      die("Bad Access");
        require_once ('db.php');
        require_once ('usersAPI.php');
        $user = tinyf_users_get_by_id($_id);
        if($user==NULL){
            tinyf_db_close();
            die('bad User Id');
        }
        
if(!isset($_POST['userName']) || (!isset($_POST['password'])) || (!isset($_POST['email']))){
    die('bad access');
    echo 'bad';
}
require_once('db.php');
require_once('usersAPI.php');
$user = tinyf_users_get_by_name($_POST['userName']);
$pass =trim($_POST['password']);
if(strlen($pass)==0)
    $pass=null;
print_r($user);
$result = tinyf_users_update($_id,trim($_POST['userName']),$pass, trim($_POST['email']),0);


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>