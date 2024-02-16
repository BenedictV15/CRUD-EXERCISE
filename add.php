<?php
include 'query.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>ADD USERS</title>
</head>

<body>
    <div class="container mt-5">
        <?php include 'message.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>ADD USER
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label class="form-label">Firstname</label>
                                <input type="text" class="form-control" name="firstname" placeholder="Your First Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lastname</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Your Last Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Age</label>
                                <input type="number" class="form-control" name="age" placeholder="Your Age" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>