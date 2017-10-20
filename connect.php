<?php
$user='root';
$pass='';
$db='testdb';
 
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

echo "great work"

$x=$_POST['t1'];
//$y=$_POST['t2'];
$c=mysql_query("select *from students where usn='$x' and room_num='$y';");
$m=mysql_num_rows($c);
if($m==true)
{$_SESSION['usn']=$x;
header("location:home.php");
}
else
{echo "invalid usn";
}
?>