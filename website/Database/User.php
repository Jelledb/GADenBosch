<?php

/**
 * Created by PhpStorm.
 * User: Jorik
 * Date: 2/15/2017
 * Time: 21:10
 */
include 'Database.class.php';
class User
{
    function login($email,$password){
        $db  = new Database('jjeening_db');
        $statement1 = $db->prepare('select password from user where email = ?');
        $statement1 -> bind_param('s', $email);
        $resultpassword1 = $statement1->execute();
        $statement1->close();
        $db->close();

        if ($password != $resultpassword1){
            return "inlog gegevens zijn incorrect";
        }

        return $email;


    }
    function register($firstname,$lastname,$city,$zipcode,$adress,$isadmin,$email,$password,$isfriend){
        $db  = new Database('jjeening_db');
         $statement = $db->prepare("INSERT INTO  `user`  ( firstname, lastname,city,zipcode,adress,isadmin,email,password,isfriend) VALUES (?,?,?,?,?,?,?,?,?)");
        $statement->bind_param('sssssissi',$firstname,$lastname,$city,$zipcode,$adress,$isadmin,$email,$password,$isfriend);
        $result = $statement->execute();
        $statement->close();
        $db->close();

        return $result;

    }

}