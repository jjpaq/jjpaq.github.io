<!DOCTYPE HTML>
<html>

<head></head>

<body>
    Content:<br>    
    <?php
        $descriptorspec = array(
            0 => array("pipe", "r"),
            1 => array("pipe", "w"),
            2 => array("file", "error-output.txt", "a")
         );
         
         $process = proc_open('/home/public/php/php_test.py', $descriptorspec, $pipes);
         
         $input = 20;
         $exp = 2;
         if (is_resource($process)) 
         {
             print fgets($pipes[1]);
             fwrite($pipes[0], $input . jkh"\n");
         
             print fgets($pipes[1]);
             fwrite($pipes[0], $exp . "\n");
         
             print fgets($pipes[1]);
         
             fclose($pipes[1]);
             fclose($pipes[0]);
             $return_value = proc_close($process);
         
             echo "command returned $return_value\n";
         }
         else 
         {
             echo "No resource available";
         }
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