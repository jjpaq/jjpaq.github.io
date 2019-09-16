<!DOCTYPE html>


<?php


echo "<b>Hello World!</b><br>";




$hash=password_hash('rasmuslerdorf',PASSWORD_DEFAULT);



echo $hash,"<br>";



if (password_verify('rasmuslerdorf', $hash)) 
{ 
    
	echo 'Password is valid!'; 

} 
else 	
{
 
    	echo 'Invalid password.'; 

} 



echo exec('whoami');

?>
