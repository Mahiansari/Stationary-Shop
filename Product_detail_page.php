<?php
session_start();
if(!isset($_SESSION['cust_login'])){
    header("Location:login.php");
  }
include 'admin/conn.php';
$pro_id = $_GET['pro_id'];
$cust_id = $_SESSION['cust_login'];
$product_query = "SELECT * FROM `product` where ProductID = '$pro_id'";
$product_data = mysqli_fetch_assoc(mysqli_query($conn, $product_query));
if(isset($_POST['feedback_submit'])){
    // echo "<script>alert('submit');</script>";
    $feedback_message = $_POST['feedback_comment'];
    $feedback_submit_query = "insert into feedback(Cust_ID,ProductID,Comment) value 
    ('$cust_id','$pro_id','$feedback_message');";
    mysqli_query($conn, $feedback_submit_query);
}

$customer_feedbacks_query = "
select Cust_Username,Comment from feedback 
inner join customer 
on feedback.Cust_ID = customer.Cust_ID
where ProductID = $pro_id
;
";
$customer_feedbacks_data = mysqli_query($conn,$customer_feedbacks_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="Category Brands/Css files/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Literata&display=swap');

        body {
            font-family: 'Literata', serif;
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
            /* height: 0px; */

        }

        .sbtn:hover {
            border-radius: 0px 50px 50px 0px !important;
            background-color: #b4d5e6;
        }

        header {
            background: steelblue;
            height: 50%;
            position: absolute;
            width: 100%;
            z-index: -99;
        }

        header h1 {
            font-size: 2.5em;
            margin-left: 1em;
            margin-bottom: 0;
            color: white;
        }

        header h3 {
            margin-top: 0;
            margin-left: 2em;
            font-size: 1.3em;
            color: white;
            font-weight: 500;
        }

        [data-product-detail] {
            width: 90%;
            height: 400px;
            margin: 0 auto;
            position: relative;
            top: 200px;
            background: white;
            box-shadow: 2px 2px 7px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        [data-product-detail] .img-card {
            width: 40%;
            height: 80%;
            border: 1px solid lightgrey;
            border-radius: 5px;
        }

        .img-card .img {
            height: 80%;
            display: flex;
            flex-direction: column;
        }

        .img-card .img i {
            color: skyblue;
            margin-left: 21em;
            margin-top: 10px;
        }

        .img-card .img img {
            width: 70%;
            height: 200px;
            position: relative;
            left: 60px;
            top: 20px;
        }

        .img-card .img-options {
            border-top: 1px solid lightgrey;
        }

        [data-product-detail] .product-details {
            height: 80%;
            width: 50%;
            /*   border: 1px solid teal; */
            padding-left: 20px;
        }

        .product-details h2 {
            margin: 0;
            font-size: 35px;
        }

        .product-details p:first-of-type {
            margin: 0;
        }

        .product-details p:nth-of-type(2) {
            border: 1px solid lightgrey;
            width: 140px;
            height: 25px;
            padding-left: 5px;
        }

        .product-details p:nth-of-type(2) span {
            font-size: 12px;
            position: relative;
            bottom: 1px;
        }

        .product-details p:nth-of-type(3) {
            color: grey;
            margin-bottom: 0;
        }

        .product-details p:nth-of-type(4) {
            margin-top: 0;
        }

        .product-details p:nth-of-type(4) span:first-of-type {
            font-weight: 800;
            font-size: 25px;
            margin-right: 10px;
        }

        .product-details p:nth-of-type(4) span:nth-of-type(2) {
            text-decoration: line-through;
        }

        .product-details p:nth-of-type(4) span:nth-of-type(3) {
            color: teal;
            font-size: 17px;
            margin-left: 10px;
        }

        .product-details p:nth-of-type(5) {
            color: grey;
            font-size: 14px;
        }

        .product-details i.fas {
            color: #FFC107;
            margin-right: 5px;
        }

        .sample-colors {
            display: flex;
        }

        .sample-colors div {
            width: 30px;
            height: 25px;
            /*   border: 1px solid grey; */
        }

        .sample-colors div:first-of-type {
            margin-right: 15px;
            background: maroon;
        }

        .sample-colors div:first-of-type div {
            background: maroon;
            width: 10px;
            height: 10px;
            transform: translate(22px, -5px);
            border-radius: 50%;
            border: 2px solid white;
        }

        .sample-colors div:not(:first-of-type) {
            background: teal;
            margin: 0 15px;
        }

        .button {
            width: 170px;
            height: 35px;
            border: none;
            margin-top: 14px;
            font-family: 'Literata', serif;
        }

        .button:first-of-type {
            background: #4FC3F7;
            border-radius: 4px;
            margin-right: 10px;
        }

        .button:nth-of-type(2) {
            background: white;
            border: 2px solid #4FC3F7;
            border-radius: 4px;
        }

        .img-options {
            display: flex;
            padding-left: 10px;
        }

        .img-options div {
            border: 1px solid lightgrey;
            margin: 10px 20px;
            width: 40px;
            height: 40px;
        }

        .img-options div img {
            width: 80%;
            margin: 7px 4px;
        }

        .img-options div:nth-of-type(2) img {
            transform: rotate(90deg);
        }

        .img-options div:nth-of-type(3) img {
            transform: rotate(-45deg);
        }

        .img-options div:nth-of-type(4) img {
            transform: rotate(45deg);
        }
        #pr_rw_box{
            border: 3px solid black;
            width: 70vw;
            border-radius: 15px;
            padding: 1rem;
            font-size: 25px;
            height: 220px;
        }
    </style>
</head>

<body>
    <?php include 'Components/navbar.php' ?>
    <?php include 'Components/searchbar.php' ?>
    <section style="height: 100vh;background-image: url('https://images.pexels.com/photos/584305/pexels-photo-584305.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
">
        <header>
            <h1>PRODUCT DETAIL PAGE</h1>
            <h3>Covered AAA standard <br> of accessibility</h3>
        </header>
        <div data-product-detail>
            <div class="img-card">
                <div class='img'>
                    <i class="far fa-heart"></i>
                    <img style="width: 300px; height: 250px;" src="admin/img/product images/<?php echo $product_data['ProductImageName'] ?>" />
                </div>

            </div>
            <div class="product-details">
                <h2><?php echo $product_data['ProductName'] ?></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus ipsum cumque dolor dignissimos asperiores blanditiis.</p><br>
                <p><i class="fas fa-star"></i>4.5 | <span>2.5k reviews</span></p><br>
                <p>Price</p>
                <p><span>Rs : <?php echo $product_data['ProductPrice'] ?></span></p>
                <form action="manage_cart.php" method="POST">
                    <input type="hidden" name="Item_Name" value="<?php echo $product_data['ProductName'] ?>" />
                    <input type="hidden" name="Price" value="<?php echo $product_data['ProductPrice'] ?>" />
                    <button class="button" name="Add_To_Cart" type="submit">Add to Cart</button>
                </form>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Review / Feedback</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Give us Review</p>
                <form action="" method="post">
                <textarea name="feedback_comment" id="pr_rw_box" cols="30" rows="" required></textarea>
                <button class="flex mx-auto mt-2 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="feedback_submit">Submit</button>
                </form>
            </div>
            <h1 style="font-size: 30px;">Customer Feedbacks:</h1>
            <div class="flex flex-wrap -m-4">

                <?php while($row = mysqli_fetch_assoc($customer_feedbacks_data)) {?>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2"><?php echo $row['Cust_Username']?></h2>
                        <p class="leading-relaxed text-base"><?php echo $row['Comment']?></p>
                    </div>
                </div>
                <?php } ?>
 
            </div>
            
        </div>
    </section>
    <?php include 'Components/footer.php' ?>
</body>

</html>