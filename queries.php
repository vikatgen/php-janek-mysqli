<?php

function selectAll ($tableName = 'names') {
    global $link;

    $sql = "SELECT * FROM " . $tableName;

    $result = mysqli_query($link, $sql);

    $array = [];
    while ($row = mysqli_fetch_assoc ($result)) {
        $array[] = $row;
    }

    return $array;
}

function insert ($array, $tableName = 'names') {
    global $link;

    //INSERT INTO table_name (`column1`, `column2`, `column3`)
    //VALUES ('value1', 'value2', 'value3');

    $sql = "INSERT INTO " . $tableName . " (`" . join("`, `", array_keys($array))
        . "`) VALUES ('" . join("','", array_values($array)) . "')";

    $result = mysqli_query($link, $sql);
    echo $sql;

    return $result;
}

function select ($id, $tableName = 'names') {
    global $link;

    $ID = (int)$id;

    if (empty($ID)) {
        return [];
    }

    $sql = "SELECT * FROM " . $tableName . " WHERE id=" . $ID;

    $result = mysqli_query($link, $sql);

    return mysqli_fetch_assoc ($result);

}