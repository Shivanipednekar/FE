<?php
$host="localhost";
$uname="root";
$pswd="";
$dbn="system1";

$con=mysqli_connect($host,$uname,$pswd);
$db=mysqli_select_db($con,$dbn);

if(isset($_POST['Enter'])){ 

$id=$_POST['subid'];

$class=$_POST['Class'];

$sname=$_POST['sname'];

$lps=$_POST['lps'];

$nos=$_POST['nos'];




if($id!=''||$name!='')
{
$query="insert into subject(id,class,subname,lps,nos) values('$id','$class','$sname','$lps','$nos')";
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
    $id1=$_POST['dsubid'];

    if($id1!='')
    {

    $query1="delete from subject where id='$id1'";
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