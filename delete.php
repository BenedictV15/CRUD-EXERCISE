<?php
session_start();
include 'conn.php';
if (isset($_GET['id'])) {
    // echo $_GET['id'];
    $id = $_GET['id']; // intialize

    $sql_delete = "DELETE FROM `crud1` WHERE id = '$id'";
    $result_delete = mysqli_query($conn, $sql_delete);
    if ($result_delete) {
        $_SESSION['del'] = 'Succcessfully deleted';
        header('Location: index.php');
        exit(0);
    } else {
        $_SESSION['del'] = 'Failed to delete user';
        header('Location: index.php');
        exit(0);
    }
}
