<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="jstyle.css">
</head>
<body>
    <p id="c4_form_preview_name">
    <!--<?php
        echo "<table style='border: solid 1px black;'>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

        class TableRows extends RecursiveIteratorIterator 
        {
            function __construct($it) 
            {
                parent::__construct($it, self::LEAVES_ONLY);
            }

            function current() 
            {
                return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
            }

            function beginChildren()
            {
                echo "<tr>";
            }

            function endChildren() 
            {
                echo "</tr>" . "\n";
            }
        }


        $servername = "jaccounts.db";
        $username = "jjpaq";
        $password = "CAlgary403";

        try 
        {
            $dbh = new PDO("mysql:host=$servername;dbname=accounts", $username, $password);
            // set the PDO error mode to exception
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";

            $stmt = $dbh->prepare("SELECT id, name, email FROM accounts WHERE uname LIKE \"" . $_POST["name"] . "\"");
            $stmt->execute();
            
            //
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            $number_of_rows = $stmt->fetchColumn();

            echo "<br>Number of rows: ", $number_of_rows, "<br>";

            $return = $stmt->fetchAll();

            var_dump($return);

            /*foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) 
            {
                echo $v;
            }*/
             
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }

        //$dbh = new PDO('sqlite:test.db') or die("cannot open the database");


        $dbh = null;
    
    ?>
    </p>

</body>






