<?php
$host="localhost";
$uname="root";
$pswd="";
$dbn="system1";

$con=mysqli_connect($host,$uname,$pswd);
$db=mysqli_select_db($con,$dbn);

if(isset($_POST['Enter'])){ 

$id=$_POST['id'];

$name=$_POST['name'];

$sub=$_POST['sub'];



if($id!=''||$name!=''||$sub!='')
{
$query="insert into faulty(id,name,sub) values('$id','$name','$sub')";
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


if(isset($_POST['Del'])){ 

    $id1=$_POST['dfid'];
    
    
    if($id1!='')
    {
    $query="delete from faulty where id='$id1'";
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