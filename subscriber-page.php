<?php
include_once 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nikolina | Subscriber Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--==** Fav-icon **==-->
    <link rel="icon" href="assets/img/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Template Main Css Start -->
    <link href="assets/css/base.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    l
</head>
<body>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <h2>Subscriber Lists</h2> 
            <div class="py-3">
                <?php
                if (isset($_REQUEST['msg']) == true) {
                    echo "Your Data successfully Deleted";
                }
                ?>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Subscriber Email</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        $sql = "SELECT * FROM subscribe";
                        $query = mysqli_query($conn, $sql);
                        $s = 1;
                        while ($row = mysqli_fetch_assoc($query)) {

                        ?>
                        <tr>
                            <td><?php echo $s++ ?></td>
                            <td><?php echo $row['subscribe_mail'] ?></td>
                            <td>
                                <a href="subscriber_delete.php?id=<?php echo $row['id'] ?>">
                                <div class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </div>
                            </a>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                    <div class="mb-3">
                        <a href="index.php" class="btn btn-info">Back To Home</a>
                    </div>

                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>



