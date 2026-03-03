<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="Category Brands/Css files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
    <style>
        body{
            background-color: white;
        }
        nav {
            border-radius: 0 0 20px 20px;
            width: 99.5vw;
            box-shadow: 0px 5px 15px 5px;
            background-color: #b4d5e6;
        }

        nav body {
            background-color: #1b4e68 !important;
        }

        .navbar-brand img {
            width: 40px !important;
            margin: 5px 0 5px 10px !important;
        }

        .nav-item a {
            text-align: center;
            border-radius: 5px;
            /* background-color: #ffc107; */
            color: #b4d5e6 !important;
            margin: 2px 2px;
            box-sizing: border-box;
            font-size: 100%;
            font-weight: bold;
        }

        .nav-item a:hover {
            text-align: center;
            /* border: 1px solid white; */
            background-color: #b4d5e6;
            color: black !important;
            border-radius: 10px;
        }

        .dropbtn {
            padding: 6px;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
            background: none;
            color: #b4d5e6 !important;
            margin: 2px 2px;
            font-size: 100%;
            height: 90%;
            font-weight: bold;
            border: none;

        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            border-radius: 10px;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 8px 10px;
            text-decoration: none;
            display: block;
            text-align: center;
            border-bottom: 1px solid black;
        }

        .dropdown-content a:nth-child(1) {
            border-radius: 10px 10px 0 0;
        }

        .dropdown-content a:nth-child(4) {
            border-bottom: none;
            border-radius: 0 0 10px 10px;
        }


        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            text-align: center;
            /* border: 1px solid white; */
            background-color: #b4d5e6;
            border-radius: 10px;
            color: black !important;
        }

        .btn-primary-huz {
            margin: 3px 10px;
            width: 100%;
            background: none !important;
            border-color: #b4d5e6 !important;
            transition: 0.5s !important;
            color: white;
        }

        .btn-primary-huz:hover {
            color: white;
            border-radius: 15px;
        }

        .btn-primary:hover {
            border-radius: 15px !important;
        }

        /* nav bar End  */

        /* Search bar Start  */
        .Search_bar_row {
            margin: 0;
        }

        .sbar {
            border-radius: 50px 0 0 50px;
            margin: 20px 0 5px 0;
            border: 1px solid black !important;

        }

        .sbtn {
            border-radius: 0px 50px 50px 0px;
            background-color: #b4d5e6;
            margin: 20px 0 5px 0;
            width: 30%;
            border: 1px solid black !important;
            text-align: center;
            padding: none;
            font-size: 100%;

        }

        .sbtn:hover {
            border-radius: 0px 50px 50px 0px !important;
            background-color: #b4d5e6;
        }
    </style>
</head>

<body>
    <?php include 'Components/navbar.php'?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1 style="font-size: 25px;">MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial #</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                      
                        
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $serial_No = $key + 1;

                                echo "<tr>
                                            <td> $serial_No</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='item_price' value='$value[Price]'</td>
                                                <td>
                                                <form action='manage_cart.php' method='post'>
                                                <input class='text-center item_quantity' type='number' value='$value[Quantity]' name='prod_quanttity' onchange='this.form.submit()' min='1' max='10'>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                                </form>
                                                </td>
                                                <td class='itotal'></td>
                                                <form action='manage_cart.php' method='post'>
                                                <td>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                                </td>
                                                </form>
                                                </tr>";
                            }
                        }
                        else {
                             echo "<tr><td colspan='4'><b>No items in cart</b><td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="grand_total"></h5> <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

                    ?>
                        <form action="purchase.php" method="post">
                            <div class="form-group">
                                <label>User Full Name</label>
                                <input type="text" name="Full_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="Address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone No:</label>
                                <input type="number" name="Phone_No" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="COD" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Delivery </label><br>
                                <input class="form-check-input" type="radio" name="COD" value="OP" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Online Payment</label>
                            </div>
                            <br><br><br>
                            <button name="purchase" type="submit" class="btn btn-primary btn-block text-center">Make Purchase</button>
                        </form>
                    <?php } ?>
                </div>
            </div>



        </div>
    </div>
    <script>
        var grand_total = 0;
        var iprice = document.getElementsByClassName('item_price');
        var iquantity = document.getElementsByClassName('item_quantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('grand_total');

        function subTotal() {
            grand_total = 0;
            for (i = 0; i < iprice.length; i++) {
                var calc = (iprice[i].value) * (iquantity[i].value);
                itotal[i].innerText = calc;
                grand_total = grand_total + calc;
            }

            gtotal.innerText = grand_total;
        }

        subTotal();
    </script>



</body>

</html>