<?php include 'query.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>EDIT USER</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>EDIT USER
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id']; //intialized

                            $sql_list = "SELECT * FROM `crud1` WHERE id = '$id'"; // CREATE A QUERY FOR SELECTING CERTAIN ID number
                            $result_list = mysqli_query($conn, $sql_list); // EXECUTE QUERY

                            if (mysqli_num_rows($result_list) > 0) {

                                $row = mysqli_fetch_array($result_list);

                                // echo $row['firstname'];
                        ?>
                                <form action="" method="post">
                                    <div class="mb-3">
                                        <label class="form-label">Firstname</label>
                                        <input type="text" class="form-control" name="firstname" value="<?= $row['firstname'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Lastname</label>
                                        <input type="text" class="form-control" name="lastname" value="<?= $row['lastname'] ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Age</label>
                                        <input type="number" class="form-control" name="age" value="<?= $row['age'] ?>" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                </form>

                        <?php

                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>