
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
        
        
        $result = tinyf_users_delete($_id);
                    tinyf_db_close();
        if($result)
            die('sucess');
        else
            die('fail');
        ?>
<html>
    <head>
        <title>حذف المستخدم</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    </body>
</html>
