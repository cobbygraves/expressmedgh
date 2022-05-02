<?php
session_start();
include('connect.php');

// SELECT ALL RECORDS FROM A TABLE
function selectAll($table, $conditions = [])
{
    global $conn;
    $query = "SELECT * FROM $table";
    if (empty($conditions)) {
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $rows;
    } else {
        $i = 0;
        foreach ($conditions as $key => $value) {
            $escapedValue = mysqli_real_escape_string($conn, $value);
            if ($i === 0) {
                $query = $query . " WHERE $key = '$escapedValue'";
            } else {
                $query = $query .  " AND $key = '$escapedValue'";
            }
            $i++;
        }
        $result = mysqli_query($conn, $query);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $rows;
    }
}


// SELECT ONE RECORD FROM A TABLE
function selectOne($table, $conditions)
{
    global $conn;
    $query = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value) {
        $escapedValue = mysqli_real_escape_string($conn, $value);
        if ($i === 0) {
            $query = $query . " WHERE $key = '$escapedValue'";
        } else {
            $query = $query .  " AND $key = '$escapedValue'";
        }
        $i++;
    }
    $query = $query . " LIMIT 1";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function create($table, $data)
{
    global $conn;
    $query = "INSERT INTO $table SET";
    $i = 0;
    foreach ($data as $key => $value) {
        $escapedValue = mysqli_real_escape_string($conn, $value);
        if ($i === 0) {
            $query = $query . " $key = '$escapedValue'";
        } else {
            $query = $query .  ", $key = '$escapedValue'";
        }
        $i++;
    }
    mysqli_query($conn, $query);
    return mysqli_insert_id($conn);
         }

function update($table, $id, $data)
{
    global $conn;
    $query = "UPDATE $table SET";
    $i = 0;
    foreach ($data as $key => $value) {
        $escapedValue = mysqli_real_escape_string($conn, $value);
        if ($i === 0) {
            $query = $query . " $key = '$escapedValue'";
        } else {
            $query = $query .  ", $key = '$escapedValue'";
        }
        $i++;
    }
    $query = $query . " WHERE id = $id";
    mysqli_query($conn, $query);
}

function delete($table, $id)
{
    global $conn;
    $escapedID = mysqli_real_escape_string($conn, $id);
    $query = "DELETE FROM $table WHERE id = $escapedID";
    mysqli_query($conn, $query);
}

function searchPost($term)
{

    global $conn;
    $queryString = mysqli_real_escape_string($conn, $term);
    $query = "SELECT * FROM posts WHERE published=1 AND title LIKE '%$queryString%' OR body LIKE '%$queryString%'";
    $searchResult = mysqli_query($conn, $query);
    $records = mysqli_fetch_all($searchResult, MYSQLI_ASSOC);
    return $records;
}

function searchRelatedPost($term)
{

    global $conn;
    $queryString = mysqli_real_escape_string($conn, $term);
    $query = "SELECT * FROM posts WHERE published=1 AND topic_id = $queryString";
    $searchResult = mysqli_query($conn, $query);
    $records = mysqli_fetch_all($searchResult, MYSQLI_ASSOC);
    return $records;
}
