<?php

require('connect.php');

    function getUser($conn){
        $getUser = 'SELECT * FROM tbl_user';
        $runQuery = $conn->query($getUser);

        $result = array();

        while($row = $runQuery->fetch(PDO::FETCH_ASSOC)){
            // push each row of data into our array to make it easy to iterate over
            $result[] = $row;
        }
            return $result;
    }