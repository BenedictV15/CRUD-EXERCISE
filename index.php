<?php
include 'query.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
    <?php include 'message.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>LIST OF USERS</h3>
                        <a href="add.php" class="btn btn-primary">ADD USER</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_list = "SELECT * FROM `crud1`";
                                $result_list = mysqli_query($conn, $sql_list); //EXECUTE query

                                if (mysqli_num_rows($result_list) > 0) {
                                    foreach ($result_list as $users) {
                                        // echo $users['firstname'];
                                ?>
                                        <tr>
                                            <th scope="row"><?= $users['id']; ?></th>
                                            <td><?= $users['firstname']; ?></td>
                                            <td><?= $users['lastname']; ?></td>
                                            <td><?= $users['age']; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?= $users['id'];?>" class="btn btn-success">EDIT</a>
                                                <a href="delete.php?id=<?= $users['id'];?>" class="btn btn-danger">DELETE</a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo 'NO DATA on the database';
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>