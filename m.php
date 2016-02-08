<?php

/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=timetable", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br>';


    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 203', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 222', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 204', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 242', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 243', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 244', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'CS 223', 'c')");
    $count = $dbh->exec("INSERT INTO roll(roll_no, name, course, type) VALUES ('140101026', 'HARSHIT RAI', 'HS 226', 'c')");
    /*** echo the number of affected rows ***/
    echo 'Entry successful!!';

    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
