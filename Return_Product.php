<?php
session_start();
include 'admin/conn.php';
$cust_id = $_SESSION['cust_login'];
$item_name = $_GET['pro_name'];

if (isset($_POST['Return_submit'])) {
    $Return_Reason = $_POST['Return_Reason'];
    echo "<script>alert('Your Return Request is Bieng Process')
    window.location.href='Cust_order.php';
    </script>";
    $Return_Reason_Query = "insert into return_product (Cust_ID,Item_Name,Pro_reason,Status) value 
    ('$cust_id','$item_name','$Return_Reason','pending')";
    mysqli_query($conn, $Return_Reason_Query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        img {
            position: absolute;
            z-index: -1;
            height: 100vh;
            width: 100vw;
            /* opacity: 0.2; */

        }

        .reason_headding {
            background-color: #5872d1;
            width: 20vw;
            padding: 10px 5px;
            /* border-bottom: 8px solid #ffd60a; */
            color: white;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
            margin-bottom: 20px;
        
        }

        #pr_rw_box {
            border: 3px solid black;
            width: 70vw;
            border-radius: 15px;
            padding: 1rem;
            font-size: 25px;
            height: 220px;
        }

        .back_button {
            font-size: 16px;
            position: absolute;
            margin: auto;
            padding: 1em 2.5em 1em 2.5em;
            border: none;
            background: #000;
            transition: all 0.1s linear;
            box-shadow: 0 0.4em 1em rgba(0, 0, 0, 0.1);
            top: 10px;
            left: 7px;
            color: white;
        }

        .back_button:active {
            transform: scale(0.95);
        }

        .back_button span {
            color: white;
        }

        .back_button .border {
            position: absolute;
            border: 0.15em solid #fff;
            transition: all 0.3s 0.08s linear;
            top: 50%;
            left: 50%;
            width: 5.5em;
            height: 3em;
            transform: translate(-50%, -50%);
        }

        .back_button:hover .border {
            display: block;
            width: 6.9em;
            height: 3.7em;
        }

        .full-rounded {
            border-radius: 2em;
        }
    </style>
</head>

<body>
    <a href="Cust_order.php">
        <button class="full-rounded back_button">
            <span><i class="fa-solid fa-arrow-left"></i></span>
            <div class="border full-rounded"></div>
        </button></a>
    <img src="sf.jpeg" alt="">
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 reason_headding" >Reason</h1>
                <form action="" method="post">
                    <textarea name="Return_Reason" id="pr_rw_box" cols="30" rows="" required></textarea>
                    <button class="flex mx-auto mt-2 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="Return_submit">Submit</button>
                </form>
            </div>


        </div>
    </section>
</body>

</html>