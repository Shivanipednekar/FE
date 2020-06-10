<?php
$host="localhost";
$uname="root";
$pswd="";
$dbn="system1";

$con=mysqli_connect($host,$uname,$pswd);
$db=mysqli_select_db($con,$dbn);

if(isset($_POST['Enter'])){ 

$no=$_POST['no'];

$name=$_POST['nm'];

$nos=$_POST['nos'];



if($no!=''||$name!=''||$nos!='')
{
$query="insert into course(RNO,NAME,NOS) values('$no','$name','$nos')";
$res=mysqli_query($con,$query);

echo '<script language=javascript>';
echo 'alert("success")';
echo '</script>';

}
else
{
echo '<script language=javascript>';
echo 'alert("fail")';
echo '</script>';
}
}



?>