<?php
$dsn = 'mysql:host***************';
$user = '***********';
$pass = '*******';

try{
 $dcon=new PDO($dsn,$user,$pass);
 //echo 'Connection Successfull';
 $dcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo $e->getMessage();

}



$greetCus=$_POST['greetCus'];
$serverCus=$_POST['serverCus'];
$cookCus=$_POST['cookCus'];
$restCus=$_POST['restCus'];
$foodCus=$_POST['foodCus'];
$custEmail=$_POST['custEmail'];



$sql='INSERT INTO fiveQuestions(greetCust,serverCust,kitchenCust,restCust,foodCust,custEmail)
         VALUES(:greetCust,:serverCust,:kitchenCust,:restCust,:foodCust,:custEmail)';

$sm=$dcon->prepare($sql); 

$sm->execute(array(
               ':greetCust'=>$greetCus,
               ':serverCust'=>$serverCus,
               ':kitchenCust'=>$cookCus,
               ':restCust'=>$restCus,
               ':foodCust'=>$foodCus,
               ':custEmail'=>$custEmail
               ));
               
$headers = 'From: webmaster@example.com';                
$subject = 'Thank you for taking our Survey';
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";
               
mail($custEmail, $subject, $message, $headers);
               
        




?>