<?php
session_start();
include 'admin/conn.php';
$cust_id = $_SESSION['cust_login'];
$query = "SELECT Order_Id, Cust_Username, Product_Id,Item_Name,Price,Quantity,user_orders,order_date,customer.Cust_Id
FROM user_orders
INNER JOIN customer ON user_orders.Cust_Id = customer.Cust_Id
 where customer.Cust_Id = $cust_id;
    ";
$data = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="Category Brands/Css files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <style>
        body {
            background-color: rgb(255, 251, 251);
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

        /* Search bar End  */


        h2 {
            margin-bottom: 50px;
        }

        .container {
            text-align: center;
            overflow: hidden;
            width: 100%;
            margin: 0 auto;

        }

        .container table {
            width: 100%;
        }

        .container td,
        .container th {
            padding: 10px;
        }

        .container td:first-child,
        .container th:first-child {
            padding-left: 20px;
        }

        .container td:last-child,
        .container th:last-child {
            padding-right: 20px;
        }

        .container th {
            border-bottom: 1px solid #ddd;
            position: relative;
        }

        input[type="button"] {
            transition: all .3s;
            border: 1px solid #ddd;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
        }

        input[type="button"]:not(.active) {
            background-color: transparent;
        }

        .active {
            background-color: #111111;
            color: #fff;
        }

        input[type="button"]:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <?php include 'Components/searchbar.php' ?>


    <section class="container">

        <table id="myTable" class="order-table">
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Return</th>
                <th>Exchange</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?php echo $row['Order_Id'] ?></td>
                    <td><?php echo $row['order_date'] ?></td>
                    <td><?php echo $row['Cust_Username'] ?></td>
                    <td><?php echo $row['Item_Name'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><?php echo $row['Quantity'] ?></td>
                    <td><?php echo $row['Quantity'] * $row['Price'] ?></td>
                    <td>
                        <?php
                        $item_name = $row['Item_Name'];
                        $check_query = "SELECT * FROM eproject.return_product where Cust_ID='$cust_id' and Item_Name = '$item_name';";
                        $check_data = mysqli_query($conn, $check_query);
                        if ($row2 = mysqli_fetch_assoc($check_data)) { ?>
                            <button type="submit" class="btn "><?php echo ($row2['Status']=='pending')?'Process':'Money Returned'?></button>

                        <?php } else {
                        ?>
                            <form action="Return_Product.php" method="get">
                                <input type="hidden" name="pro_name" value="<?php echo $row['Item_Name'] ?>">
                                <button type="submit" class="btn btn-primary">Return</button>
                            </form>
                        <?php } ?>
                    </td>
                    <td><a href="Replace_Product.php?replace_pro=<?php echo $row['user_orders'] ?>"><button type="button" class="btn btn-primary">Replace</button></a></td>
                </tr>
            <?php } ?>




        </table>

</html>