<?php
session_start();
include 'conn.php';
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $sql_delete = "DELETE FROM `crud1` WHERE id = '$id'";
    $result_delete = mysqli_query($conn,$sql_delete);
    if($result_delete){
        $_SESSION ['del'] = 'Succcessfully deleted';
        header('Location: index.php');
        exit(0);
    }else{
        $_SESSION ['del'] = 'Failed to delete user';
        header('Location: index.php');
        exit(0);
    }
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $sql_update = "UPDATE `crud1` SET `firstname`='$firstname',`lastname`='$lastname',`age`='$age' WHERE `id` = '$id'";
    $result_update = mysqli_query($conn, $sql_update); //EXECUTE QUERY

    if ($result_update) {
        $_SESSION['update'] = 'User Successfully updated!';
        header('Location: index.php');
        exit(0);
    } else {
        $_SESSION['update'] = 'Failed to update user!';
        header('Location: index.php');
        exit(0);
    }
}

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $sql_add = "INSERT INTO `crud1`(`firstname`, `lastname`, `age`) VALUES ('$firstname','$lastname','$age')";
    $result_add = mysqli_query($conn, $sql_add); //EXECUTE QUERY

    if ($result_add) {
        $_SESSION['add'] = 'User Successfully Added!';
        header('Location: add.php');
        exit(0);
    } else {
        $_SESSION['add'] = 'Failed to add user!';
        header('Location: add.php');
        exit(0);
    }
}
