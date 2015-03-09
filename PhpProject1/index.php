<html><head><title>Arrays</title></head>
<!-- arrays.php COMP519 -->
<body>


<?php
$arr=array(5 => 43, 32, 56, "b" => 12);
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
$arr=array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br></br> \n";
?>

<?php
$arr = array(5 => 1, 12 => 2);
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
$arr[] = 56;    // the same as $arr[13] = 56;
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
$arr["x"] = 42; // adds a new element
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
unset($arr[5]); // removes the element
foreach ($arr as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
unset($arr);    // deletes the whole array
$a = array(1 => 'one', 2 => 'two', 3 => 'three',"rr"=>'four');
foreach ($a as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
unset($a[2]);
$b = array_values($a);
foreach ($b as $key=>$value){echo $key, '=>', $value, ',';}
echo "</br> \n";
$arr = array("a"=>"nabeel","bb"=>"mohammad",1=>"khalaf");
extract($arr,EXTR_PREFIX_SAME, "dup");
echo $dup_1;

?>


</body>
</html>
