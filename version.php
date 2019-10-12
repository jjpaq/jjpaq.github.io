<?php 

$dbh = new PDO('sqlite:test.db') or die("cannot open the database");
$query =  "SELECT * FROM cars";
foreach ($dbh->query($query) as $row)
{
    echo $row[1],"\n";
}
$dbh = null;

?>
