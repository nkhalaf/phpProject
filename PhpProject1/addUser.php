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
        <form method="POST" action="saveUser.php">
       
        <table border="1" width="3" cellspacing="3" cellpadding="2">

            <tbody>
                <tr>
                    <td>اسم المستخدم</td>
                    <td><input type="text" name="userName" value="" /></td>
                </tr>
                <tr>
                    <td>كلمة السر</td>
                    <td><input type="password" name="password" value="" /></td>
                </tr>
                 <tr>
                    <td>البريد الالكتروني</td>
                    <td><input type="text" name="email" value="" /></td>
                </tr>
                <tr>
                    <td ><input type="submit" value="تسجيل المستخدم " /></td>
                    
                </tr>
            </tbody>
        </table>
 </form>
    </body>
</html>
