<?php

/**
 * Created by PhpStorm.
 * User: Jorik
 * Date: 2/15/2017
 * Time: 21:10
 */
class User
{
    function login($email,$password){
        $db  = new Database('jjeening_db2');
        $statement1 = $db->prepare('select password from user where email = ? ');
        $statement1 -> bind_param('s', $email);
        $resultpassword1 = $statement1->execute();
        $statement1->close();
        $db->close();

        if ($password != $resultpassword1){
            return "inlog gegevens zijn incorrect";
        }

        return $email;


    }

}