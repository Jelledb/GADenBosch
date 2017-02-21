<?php

/**
 * Created by PhpStorm.
 * User: Jorik
 * Date: 2/9/2017
 * Time: 09:29
 */
include 'User.php';

class Connect
{
    function __construct()
    {
        $us = new User();

//       echo $us->login('aa','geheim');
        $us->register("jan", "janssen", "vught","aaaa", "pietstraat" ,0, "jangmailcom", "geheim",0);
        
        

    }
}

$test = new Connect();

?>