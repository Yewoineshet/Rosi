<?php
    function connect(){
        $host='localhost';
        $user='root';
        $pass='';
        $dbname='gto';
        return new mysqli ($host, $user, $pass, $dbname);
    }
    
?>