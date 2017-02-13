<?php

/**
 * Created by PhpStorm.
 * User: Jorik
 * Date: 2/9/2017
 * Time: 09:29
 */
include 'Database.class.php';

class Connect
{
    function __construct()
    {
        $testdb  = new Database('jjeening_db');
        $testdb->showAll();
        $testdb->close();

    }
}

$test = new Connect();

?>