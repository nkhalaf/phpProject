<?php

$tf_host='localhost';
$tf_dbname='tinyform';
$tf_username='root';
$tf_password='';
$tf_handle= mysql_connect($tf_host,$tf_username,$tf_password);

if(!$tf_handle){
    die('connection problem');
}
if(!mysql_select_db($tf_dbname)){
    @mysql_close($tf_handle);
    die('connection problem...');
}
//die('ok');
//@mysql_close($tf_handle);

@mysql_query("set Names 'utf8'");

function  tinyf_db_close(){
    global $tf_handle;
    @mysql_close($tf_handle);
}
?>