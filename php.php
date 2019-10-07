<!DOCTYPE HTML>

<?php
//echo "<p style='margin:auto;width:500px;background-color:lightgrey;border:1px solid black;text-align:center;'>Third Test</p>";

$command = escapeshellcmd('python3 class4.py');
$output = shell_exec($command);
echo $output;

?>