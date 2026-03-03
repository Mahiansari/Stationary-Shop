<?php
session_start();
include 'admin/conn.php';
$cust_id = $_SESSION['cust_login'];
$cust_query = "select * from customer where Cust_ID = $cust_id";
$cust_data = mysqli_fetch_assoc(mysqli_query($conn, $cust_query));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            color: #2b2c48;
            font-family: "Jost", sans-serif;
            background-image: url(sf.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }

        .card {
            margin: auto;
            overflow-y: auto;
            position: relative;
            z-index: 1;
            overflow-x: hidden;
            background-color: white;
            display: flex;
            transition: 0.3s;
            flex-direction: column;
            border-radius: 10px;
            box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.2);
            width: 30vw;
        }



        .card[data-state="#about"] .card-main {
            padding-top: 0;
        }

        .card[data-state="#contact"] {
            height: 430px;
        }

        .card[data-state="#experience"] {
            height: 550px;
        }

        .card.is-active .card-header {
            height: 80px;
        }

        .card.is-active .card-cover {
            height: 100px;
            top: -50px;
        }

        .card.is-active .card-avatar {
            transform: none;
            left: 20px;
            width: 50px;
            height: 50px;
            bottom: 10px;
        }

        .card.is-active .card-fullname,
        .card.is-active .card-jobtitle {
            left: 86px;
            transform: none;
        }

        .card.is-active .card-fullname {
            bottom: 18px;
            font-size: 19px;
        }

        .card.is-active .card-jobtitle {
            bottom: 16px;
            letter-spacing: 1px;
            font-size: 10px;
        }

        .card-header {
            position: relative;
            display: flex;
            height: 200px;
            flex-shrink: 0;
            width: 100%;
            transition: 0.3s;
        }

        .card-header * {
            transition: 0.3s;
        }

        .card-cover {
            width: 100%;
            height: 100%;
            position: absolute;
            height: 160px;
            top: -20%;
            left: 0;
            will-change: top;
            background-size: cover;
            background-position: center;
            filter: blur(30px);
            transform: scale(1.2);
            transition: 0.5s;
        }

        .card-avatar {
            width: 100px;
            height: 100px;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2);
            border-radius: 50%;
            -o-object-position: center;
            object-position: center;
            -o-object-fit: cover;
            object-fit: cover;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-64px);
        }

        .card-fullname {
            position: absolute;
            bottom: 0;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            white-space: nowrap;
            transform: translateY(-10px) translateX(-50%);
            left: 50%;
        }

        .card-jobtitle {
            position: absolute;
            bottom: 0;
            font-size: 11px;
            white-space: nowrap;
            font-weight: 500;
            opacity: 0.7;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-7px);
        }

        .card-main {
            position: relative;
            flex: 1;
            display: flex;
            padding-top: 10px;
            flex-direction: column;
        }

        .card-subtitle {
            font-weight: 700;
            font-size: 13px;
            margin-bottom: 8px;
        }

        .card-content {
            padding: 20px;
        }

        .card-desc {
            line-height: 1.6;
            color: #636b6f;
            font-size: 14px;
            margin: 0;
            font-weight: 400;
            font-family: "DM Sans", sans-serif;
        }

        .card-social {
            display: flex;
            align-items: center;
            padding: 0 20px;
            margin-bottom: 30px;
        }

        .card-social svg {
            fill: #a5b5ce;
            width: 16px;
            display: block;
            transition: 0.3s;
        }

        .card-social a {
            color: #8797a1;
            height: 32px;
            width: 32px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
            background-color: rgba(93, 133, 193, 0.05);
            border-radius: 50%;
            margin-right: 10px;
        }

        .card-social a:hover svg {
            fill: #637faa;
        }

        .card-social a:last-child {
            margin-right: 0;
        }

        .card-buttons {
            display: flex;
            background-color: #fff;
            margin-top: auto;
            position: sticky;
            bottom: 0;
            left: 0;
        }

        .card-buttons button {
            flex: 1 1 auto;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background: 0;
            font-size: 13px;
            border: 0;
            padding: 15px 5px;
            cursor: pointer;
            color: #5c5c6d;
            transition: 0.3s;
            font-family: "Jost", sans-serif;
            font-weight: 500;
            outline: 0;
            border-bottom: 3px solid transparent;
        }

        .card-buttons button.is-active,
        .card-buttons button:hover {
            color: #2b2c48;
            border-bottom: 3px solid #8a84ff;
            background: linear-gradient(to bottom, rgba(127, 199, 231, 0) 0%, rgba(207, 204, 255, 0.2) 44%, rgba(211, 226, 255, 0.4) 100%);
        }

        .card-section {
            display: none;
        }

        .card-section.is-active {
            display: block;
            -webkit-animation: fadeIn 0.6s both;
            animation: fadeIn 0.6s both;
        }

        @-webkit-keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translatey(40px);
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translatey(40px);
            }

            100% {
                opacity: 1;
            }
        }

        .card-timeline {
            margin-top: 30px;
            position: relative;
        }

        .card-timeline:after {
            background: linear-gradient(to top, rgba(134, 214, 243, 0) 0%, #516acc 100%);
            content: "";
            left: 42px;
            width: 2px;
            top: 0;
            height: 100%;
            position: absolute;
            content: "";
        }

        .card-item {
            position: relative;
            padding-left: 60px;
            padding-right: 20px;
            padding-bottom: 30px;
            z-index: 1;
        }

        .card-item:last-child {
            padding-bottom: 5px;
        }

        .card-item:after {
            content: attr(data-year);
            width: 10px;
            position: absolute;
            top: 0;
            left: 37px;
            width: 8px;
            height: 8px;
            line-height: 0.6;
            border: 2px solid #fff;
            font-size: 11px;
            text-indent: -35px;
            border-radius: 50%;
            color: rgba(134, 134, 134, 0.7);
            background: linear-gradient(to bottom, #a0aee3 0%, #516acc 100%);
        }

        .card-item-title {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .card-item-desc {
            font-size: 13px;
            color: #6f6f7b;
            line-height: 1.5;
            font-family: "DM Sans", sans-serif;
        }

        .card-contact-wrapper {
            margin-top: 20px;
        }

        .card-contact {
            display: flex;
            align-items: center;
            font-size: 13px;
            color: #6f6f7b;
            font-family: "DM Sans", sans-serif;
            line-height: 1.6;
            cursor: pointer;
        }

        .card-contact+.card-contact {
            margin-top: 16px;
        }

        .card-contact svg {
            flex-shrink: 0;
            width: 30px;
            min-height: 34px;
            margin-right: 12px;
            transition: 0.3s;
            padding-right: 12px;
            border-right: 1px solid #dfe2ec;
        }

        .contact-me {
            border: 0;
            outline: none;
            background: linear-gradient(to right, rgba(83, 200, 239, 0.8) 0%, rgba(81, 106, 204, 0.8) 96%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            color: #fff;
            padding: 12px 16px;
            width: 100%;
            border-radius: 5px;
            margin-top: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            font-family: "Jost", sans-serif;
            transition: 0.3s;
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

        .back_button {
            font-size: 16px;
            position: absolute;
            margin: auto;
            padding: 1em 2.5em 1em 2.5em;
            border: none;
            background: #fff;
            transition: all 0.1s linear;
            box-shadow: 0 0.4em 1em rgba(0, 0, 0, 0.1);
            top: 10px;
            left: 7px;
        }

        .back_button:active {
            transform: scale(0.95);
        }

        .back_button span {
            color: #464646;
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
    <a href="index.php">
        <button class="full-rounded back_button">
            <span><i class="fa-solid fa-arrow-left"></i></span>
            <div class="border full-rounded"></div>
        </button></a>
    <div class="card" data-state="#about">
        <div class="card-header">
            <div class="card-cover" style="background-image: url('https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80')">
            </div>
            <img class="card-avatar" src="https://images.unsplash.com/photo-1549068106-b024baf5062d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="avatar" />
            <h1 class="card-fullname">Hello Dear!</h1>
        </div>
        <div class="card-main">
            <div class="card-section is-active" id="about">
                <div class="card-content">
                    <h4><span style="font-size: 20px; font-weight:100;">User Name :</span>&nbsp;<?php echo $cust_data['Cust_Username'] ?></h4>
                    <h4><span style="font-size: 20px; font-weight:100;">Gmail :</span>&nbsp;<?php echo $cust_data['Cust_Email'] ?></h4>
                    <h4><span style="font-size: 20px; font-weight:100;">Contact Number :</span>&nbsp;<?php echo $cust_data['Cust_Contact'] ?></h4>
                    <h4><span style="font-size: 20px; font-weight:100;">Address :</span>&nbsp;123 avenue, Defense, karachi</h4>
                </div>
                <div class="card-social">
                    <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" />
                        </svg></a>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" />
                        </svg></a>
                    <a href="#"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
                            <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
                            <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" />
                        </svg></a>
                    <a href="#"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z" />
                        </svg></a>
                </div>
            </div>

        </div>

        <div class="card-buttons">
            <button data-section="#about" style="background-color: #1b4e68; color: white; font-size: 17px; " class="is-active">User Profile</button>

        </div>
    </div>


</body>

</html>