<?php

// GET ALL DATA -> array ($publications)

require_once 'classes.php';

$publications = array();

// connect to databese

$con = mysqli_connect('localhost', 'root', '31000602114', 'testsite2');
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL' . mysqli_connect_error();
}

// make query

mysqli_set_charset($con, "utf8");
$sql = "SELECT * FROM publication";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $publications[] = new $row['type']($row);
}
