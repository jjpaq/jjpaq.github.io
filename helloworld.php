<!DOCTYPE html>


<?php


echo "<b>Hello World!</b><br>";

echo "Aahd: ", password_hash('rasmuslerdorf',PASSWORD_DEFAULT), "\n\n";


$hash=password_hash('rasmuslerdorf',PASSWORD_DEFAULT);


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
