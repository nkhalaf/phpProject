<?php
function  tinyf_users_get($extra=''){
    global $tf_handle;
    $query=sprintf("SELECT * FROM `users` %s",$extra);
    $qresult = @mysql_query($query);
    if(!$qresult){
        return null;
    }
    $rcount =@mysql_num_rows($qresult);
    if($rcount==0){
        return null ;
    }
    $users=array();
    for($i=0 ; $i<$rcount ; $i++){
        $users[@count($users)]=@mysql_fetch_object($qresult);
    }
            @mysql_free_result($qresult);
            return $users;
}


function  tinyf_users_get_by_id($uid){
    $id = (int)$uid;
    if($id==0)
     return null ;
    $result = tinyf_users_get('WHERE `id` ='.$id);
    $user=$result[0]; 
    return $user;
}


function tinyf_users_add($name,$password,$email,$isadmin){
   if(empty($name)||(empty($password))||(empty($email)))
       return FALSE;
   global $tf_handle;
   $n_name=  mysql_real_escape_string(strip_tags($name),$tf_handle);
   $n_email=  mysql_real_escape_string(strip_tags($email),$tf_handle);
   if(!filter_var($n_email,FILTER_VALIDATE_EMAIL)){
       return false;
   }
   $pass = @md5(mysql_real_escape_string(strip_tags($password),$tf_handle));
   $n_isadmin = (int)$isadmin;
   if($n_isadmin!=0 && $n_isadmin!=1)
       $n_isadmin=0;
   $query= sprintf("INSERT INTO `users` VALUE(NULL ,'%s','%s','%s',%d)",$n_name,$pass,$n_email,$n_isadmin);
   $qresult = @mysql_query($query);
   if(!$qresult)
       return false;
   return true ;
}


function tinyf_users_delete($uid){
        $id = (int)$uid;
    if($id==0)
        return false ;
   $query = sprintf("DELETE FROM `users` WHERE `id`=%d",$id);
   $qresult = @mysql_query($query);
   if(!$qresult)
   return false;
   return true ;
}



function tinyf_users_update($uid,$name=Null,$password=Null,$email=Null,$isadmin=-1){
     global $tf_handle;
     
     $id = (int)$uid;
    if($id==0){
        return false ;
        echo 'id error';
    }
    $user = tinyf_users_get_by_id($uid);
    if(!$user){
         echo 'no user';
       return false;
       
    }
    
    $n_isadmin=(int)$isadmin;
    if(empty($name)&&(empty($password))&&(empty($email))&&$user->isadmin==$n_isadmin){
         echo 'no value';
          return FALSE;
    }
      
    $fields=array();
    $query="UPDATE  `users` SET";
    if(!empty($name))
    {
   $n_name=  mysql_real_escape_string(strip_tags($name),$tf_handle);
   $fields[count($fields)]="`name` = '$n_name' ";
    }
    
      if(!empty($password))
    {
   $n_pass=  @md5(mysql_real_escape_string(strip_tags($password),$tf_handle));
   $fields[count($fields)]="`password` = '$n_pass' ";
    }
     if(!empty($email))
    {
   $n_email=  mysql_real_escape_string(strip_tags($name),$tf_handle);

   $fields[count($fields)]="`email` = '$n_email' ";
    }
    if($n_isadmin==-1)
        $n_isadmin=$user->isadmin;
    $fields[@count($fields)]="`isadmin`='$n_isadmin'";
    $fcount =count($fields);
    if($fcount==1){
        $query  .= $fields[0]."WHERE `id` = ".$id;
        $qresult = @mysql_query($query);
        if(!$qresult)
            return  false;
        else
        return true ;
    }
    for($i=0 ;$i<$fcount ; $i++){
        $query .= $fields[$i];
        if($i!=$fcount-1){
            $query .=' , ';
        }
    }
    $query .="WHERE `id` = ".$id;
       $qresult = @mysql_query($query);
        if(!$qresult)
        return  false;
        else
        return true ;
     
}

function tinyf_users_get_by_name($name){
    global $tf_handle;
       $n_name=  mysql_real_escape_string(strip_tags($name),$tf_handle);

}

?>

