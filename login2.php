<?php
if(isset($_POST['Enter'])){ 

    $id=$_POST['uname'];
    
    $pws=$_POST['pwd'];

    if($id=='admin'&& $pws=='admin')
    {
       header('Location:Mainmenu.html');

    }
}
    ?>