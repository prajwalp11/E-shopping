<?php
ob_start();
    // Process delete operation after confirmation
    require_once "config.php";
    if(isset($_POST["delete"])) {
        // $image = '';               //Will try next time
        $name =  trim($_POST["name"]); 
        // $query = "SELECT image FROM `products` WHERE id = '$id'";
        // $result = mysqli_query($link, $query);
        // while($row = mysqli_fetch_array($result)) {
        //     $image = $row['image'];
        // }
        // $fileName = './uploads/products/'.$image;

        $sql = "DELETE FROM orders WHERE name = '$name'";
        if (mysqli_query($link, $sql)) {
            // if(file_exists($fileName)) {
            //     unlink($fileName);
            // }
            header("Location: orders.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($link);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>e-grocery - Delete Users</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style type="text/css">
    .wrapper {
        width: 500px;
        margin: 0 auto;
    }
    </style>
</head>

<body>
        <div class=" container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2 class="bg-danger p-3 my-3 text-center text-white text-uppercase">Delete Record</h2>
                    </div>
                    <form action="delete-order.php" method="POST">
                        <div class="alert alert-danger">
                            <input type="hidden" name="name" value="<?php echo trim($_GET["name"]); ?>" />
                            <p>Are you sure you want to delete this record?</p><br>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger" name="delete">
                                <a href="orders.php#users" class="btn btn-primary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>