<?php
if(isset($_POST['submit']))
{
$str=$_POST['str'];
$vowels=array('a','i','e','o','u','A','I','E','O','U');
$len=strlen($str);
$num=0;
for($i=0;$i<$len;$i++)
{
if(in_array($str[$i],$vowels))
{
$num++;
}
}
echo"<br><br> Number of vowels:$num";
}
?>
