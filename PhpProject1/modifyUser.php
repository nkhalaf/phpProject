<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        ?>
<html>
    <head>
        <title>تعديل بيانات المستخدم :<?php echo $user->name ; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="POST" action="updateUser.php?id=<?php echo $_id ; ?>">
       
        <table border="1" width="3" cellspacing="3" cellpadding="2">

            <tbody>
                <tr>
                    <td>اسم المستخدم</td>
                    <td><input type="text" name="userName" value="<?php echo $user->name ; ?>" /></td>
                </tr>
                <tr>
                    <td>كلمة السر</td>
                    <td><input type="password" name="password" value="" /></td>
                </tr>
                 <tr>
                    <td>البريد الالكتروني</td>
                    <td><input type="text" name="email" value="<?php echo $user->email ; ?>" /></td>
                </tr>
                <tr>
                    <td ><input type="submit" value=" تعديل بيانات المستخدم :<?php echo $user->name ; ?>" /></td>
                    
                </tr>
            </tbody>
        </table>
 </form>
    </body>
</html>
