<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100vw;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
        }

        .container {
            margin-top: 2rem;
            border: 5px solid #4e48f8;
            padding: 2rem;
        }

        .d-block {
            display: block;
        }

        .form-title {
            color: #4e48f8;
            margin-bottom: 1rem;
        }

        .form-control {
            margin: 10px 0;
            padding: 5px;
        }

        .ml-5 {
            margin-left: 1.5rem;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="<?php ?>" method="post">
        <h1 class="form-title">Product Discount Calculator</h1>
        <div style="display: flex; justify-content: start;">
            <div>
                <p class="d-block form-control">Product Description:</p>
                <p class="d-block form-control">List Price:</p>
                <p class="d-block form-control">Standard Discount:</p>
                <p class="d-block form-control">Discount Amount:</p>
                <p class="d-block form-control">Discount Price:</p>
            </div>
            <div>
                <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $productName = $_POST['product'];
                    $price = $_POST['price'];
                    $discount = $_POST['discount'];
                    if($price > 0) {
                        $listPrice = number_format($price, 2);
                        $dAmount = $price * ($discount / 100);
                        $dAmountFormat = number_format($dAmount, 2);
                        $dPriceFormat = number_format($price - $dAmount);
                        echo "<p class='d-block form-control ml-5'>$productName</p>";
                        echo "<p class='d-block form-control ml-5'>$$listPrice</p>";
                        echo "<p class='d-block form-control ml-5'>$discount%</p>";
                        echo "<p class='d-block form-control ml-5'>$$dAmountFormat</p>";
                        echo "<p class='d-block form-control ml-5'>$$dPriceFormat</p>";
                    }

                }
                ?>
            </div>
        </div>
    </form>
</div>
</body>
</html>
