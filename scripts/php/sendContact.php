<?php
$dsn = 'mysql:host=mysql.hostinger.co.uk;dbname=u848587893_con';
$user = 'u848587893_man';
$pass = 'portmore38';

try{
$dcon= new PDO($dsn,$user,$pass);
$dcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
echo $e->getMessage();

}

$fname = $_POST['fname'];
$conmail = $_POST['contactmail'];
$msg = $_POST['msg'];


$sql='INSERT INTO custInfo(fname,email,message)
       VALUES(:fname,:email,:message)';
 $sm = $dcon->prepare($sql);
 $sm->execute(array(
              ':fname'=>$fname,
              ':email'=>$conmail,
              ':message'=>$msg
 
               ));      
       




?>