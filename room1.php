<?php
$host="localhost";
$uname="root";
$pswd="";
$dbn="system1";

$con=mysqli_connect($host,$uname,$pswd);
$db=mysqli_select_db($con,$dbn);

if(isset($_POST['Enter'])){ 

$no=$_POST['no'];

$sc=$_POST['sc'];




if($no!=''||$sc!='')
{
$query="insert into room(NO,SC) values('$no','$sc')";
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

if(isset($_POST['del'])){ 
    $id1=$_POST['drno'];

    if($id1!='')
    {

    $query1="delete from room where NO='$id1'";
    $res1=mysqli_query($con,$query1);
    
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