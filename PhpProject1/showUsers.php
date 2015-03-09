<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>تسجيل مستخدم جديد</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        require_once ('db.php');
        require_once ('usersAPI.php');
        $users = tinyf_users_get();
        if($users==null)
            die("problem");
        $ucount = count($users);       
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                    for($i=0 ; $i<$ucount ; $i++){
                echo '<tr>';
                     
                   $user = $users[$i];                  
                    echo "<td><a href=\"userProfile.php?id=$user->id\">$user->name</a></td>";
                    echo "<td>$user->email</td>";
                    echo "<td><a href=\"deleteUser.php?id=$user->id\">delete</a></td>";
                    echo "<td><a href=\"modifyUser.php?id=$user->id\">update</a></td>";
                    }
            
                    
                echo '</tr>';
                    ?>
          
             
            </tbody>
        </table>

        
        
    </body>
</html>
