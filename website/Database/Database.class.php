<?php
/**
 * Created by PhpStorm.
 * User: Jorik
 * Date: 2/8/2017
 * Time: 13:28
 */


include 'config.inc.php';

class Database extends mysqli
{


    function __construct($database)
    {

        $this->connect(server(), username(), password(), $database);

        if ($this->connect_errno != 0) {
            die(" probleem bij leggen of selecteren van de database connectie");
        } else {
            echo "connectie geslaagd";
        }


    }


    public function showAll()
    {

        $result = $this->query('select * from user');

        echo "<table cellpadding=\"2\" border=\"1\">";
        echo "<tr><th>voornaam</th><th>achternaam</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            $voornaam = $row["firstname"];
            $achternaam = $row["lastname"];
            echo "<td>$voornaam</td><td>$achternaam</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}


