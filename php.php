<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" type="text/css" href="jstyle.css">
</head>
<body>
    <p id="c4_form_preview_name">
        <?php
        $dbh = new PDO('sqlite:test.db') or die("cannot open the database");
        if($_POST["name"])
        {
            // echo $_POST["name"];
        
            
            //$query =  "SELECT * FROM accounts WHERE username=\"" . $_POST["name"] . "\";";
            $query =  "SELECT * FROM accounts WHERE username LIKE '" . $_POST['name'] . "'";

            $res = $dbh->query($query);

            $numColumns = $res->fetchColumn();

            //echo "Password: ", $pass, "\n";

            if($numColumns == 1)
            {
                //echo("Got this far\n\n <br>");

                foreach($dbh->query($query) as $res) 
                {
                    if(password_verify($_POST["password"],$res['password_hash']))
                    {
                        echo "Good login.";
                    }
                    else
                    {
                        echo "Incorrect password.";
                    }
                }
            }
            else
            {
                echo("Incorrect user name.");
            }
            
            //var_dump($res);

            $dbh = null;
        }
        ?>
    </p>

</body>






