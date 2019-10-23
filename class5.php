<!DOCTYPE HTML>
<html>

<head></head>

<body>
    Content:<br>    
    <?php
        //echo $_POST["py-content"];

        //$py_output = escapeshellcmd('/usr/local/bin/python3 print(\'it works!\')');

        file_put_contents("/home/public/php/php_test.py",$_POST["py-content"]);
        $py_command = escapeshellcmd('python3 /home/public/php/php_test.py');
        $py_output = shell_exec($py_command);

        echo $py_output;
    ?>
</body>

</html>
<!--
//echo $_POST["py-content"];

        //$py_output = escapeshellcmd('/usr/local/bin/python3 print(\'it works!\')');

        file_put_contents("/home/public/php/php_test.py",$_POST["py-content"]);
        $py_command = escapeshellcmd('python3 /home/public/php/php_test.py');
        $py_output = shell_exec($py_command);

        echo $py_output;
-->