<?php

    session_start();

    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','shopping_cart');

    //kode untuk konek ke database
    $connect = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);

    if(isset($_POST['add_to_cart'])){
        if(isset($_SESSION['card'])) {
            $session_array_id = array_column($_SESSION['cart'],"id");
            if(!in_array($_GET['id'], $session_array_id)){
                $session_array = array(
                    'id' => $_GET['id'],
                    "name" => $_POST['name'],
                    "price" => $_POST['price'],
                    "quantity" => $_POST['quantity']
                );
                $_SESSION['cart'][] = $session_array;
            }
        } else {
            $session_array = array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity" => $_POST['quantity']
            );

            $_SESSION['cart'][] = $session_array;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko-sepatu barokah</title>

    <!-- Boootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="conatiner-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Sepatu T-shirt</h2>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                                $query = "SELECT * FROM cart_item";
                                $result = mysqli_query($connect,$query);

                                while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="col-md-4">
                                <form action="index.php?id=<?= $row['id'];?>" method="post">
                                    <img src="image/src/sepatu/<?= $row['image'];?>" style="height:150px;">
                                    <h5 class="text-center"><?= $row['name'];?></h5>
                                    <h5 class="text-center">$<?= number_format($row['price']);?></h5>
                                    <input type="hidden" name="name" value="<?= $row['name'];?>">
                                    <input type="hidden" name="price" value="<?= $row['price'];?>">
                                    <input type="number" name="quantity" value="1" class="form-control">
                                    <a href="index.php?id=<?= $row['id'];?>"><input type="submit" name="add_to_cart" class="btn btn-warning btn-block my-2" value="Add to cart"></a>
                                </form>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Item selected</h2>

                    <?php
                        $output = "";
                        $output .= "
                            <table class='table table-bordered table-striped'>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama item</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total price</th>
                                    <th>Action</th>
                                </tr>
                            </table>
                        ";

                        if(!empty($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $output .= "
                                    <tr>
                                        <td>".$value['id']."</td>
                                        <td>".$value['name']."</td>
                                        <td>".$value['price']."</td>
                                        <td>".number_format($value['price'] * $value['quantity']);."</td>
                                        <td>
                                            <a href='index.php?action=remove&id=".$value['id']"'></a>
                                            <button class='btn btn-danger btn-block'>Remove</button>
                                        </td>
                                    </tr>
                                ";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>