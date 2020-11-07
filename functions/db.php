<?php

    $con = mysqli_connect('127.0.0.1', 'root', 'root', 'login_db');


    function escape($string){
        global $con;

       return mysqli_real_escape_string($con, $string);
    }

    function query($query){
        global $con;

        return mysqli_query($con, $query);
    }

    function confirm($result){
        global $con;

        if(!$result){
            die("QUERY FAILED");
        }

        
    }

    function fetch_array($result){
        global $con;


        return mysqli_fetch_array($result);
    }

?>