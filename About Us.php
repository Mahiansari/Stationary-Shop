<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS\About-style.css">

        <!-- flowbite cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="java script/Sign in and Sign Up.js"></script>
    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->
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

        .yac {
            font-size: 50px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            text-align: center;
            color: transparent;
            -webkit-text-stroke: 1px black;
            background: url(st.jpg);
            -webkit-background-clip: text;
            background-position: 0 0;
            animation: back 20s linear infinite;
        }

        @keyframes back {
            100% {
                background-position: 2000px 0;
            }
        }

        #pag1 {
            background-color: #97c1d6;
            margin-left: 5%;
            margin-right: 5%;

        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 300px;
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 #97c1d6;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
            border-radius: 20px;
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border-radius: 20px;
        }

        .flip-card-front {
            background-color: #bbb;
            color: #b4d5e6;
            border-radius: 20px;
        }

        .flip-card-back {
            background-color: #1b4e68;
            color: white;
            transform: rotateY(180deg);
            padding: 20px 10px;
            border-radius: 20px;
        }

        .flip-card-back :nth-child(2) {
            text-decoration: none;
            color: white;
            border-radius: 20px;
        }

        /* Search bar End  */
    </style>

<body>
    <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">

        <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">
            <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">

                <!-- nav bar Start -->

                <?php include 'Components/navbar.php' ?>
                <?php include 'Components/searchbar.php' ?><br>
                <!-- Navbar End  -->


                <!-- start About Us Page -->
                <div class="container-fluid ">
                    <h1 class="yac">ABOUT PAPER PARADISE</h1>
                    <div class="row" style="margin: 0;">
                        <div class="col-lg-12 p-5">
                            <div class="text-box col-lg-9 m-auto p-3 story_div">
                                <p class="Stroy_Para">
                                    Welcome to <strong style="font-size: 25px;">Paper Paradise</strong>, the ultimate destination for all things stationery!
                                    Nestled in the heart of our shop is a haven for paper enthusiasts,
                                    creatives, and anyone who finds joy in the art of writing and crafting.At Paper
                                    Paradise, we curate a diverse collection of high-quality stationery supplies that
                                    cater to every need and passion.Come visit Paper Paradise today and explore the
                                    enchanting realm of stationery delights!
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="row" id="pag1">
                        <div class="col-lg-6" style="display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 5%;">
                            <h3 style=" font-size: 150%; color: #1b4e68; font-weight: bold;">Meet the Visionaries Behind Paper Paradise</h3>
                            <P style="color: white; font-size: 150%;">Almeer bring a wealth of experience and a
                                keen eye for detail to the realm of stationery. Their combined expertise in design, business acumen,
                                and a deep understanding of customers' desires have shaped Paper Paradise into a beacon for all things
                                paper-related.</P>

                        </div>

                        <div class="col-lg-6" style="display: flex; align-items: center; justify-content: center; flex-direction: column; padding: 5%;">
                            <img src="immm\istockphoto-1413766112-612x612.jpg" alt="" style="width:90%; border-radius: 150px;;" class="btn">
                        </div>
                    </div>
                    <br><br>

                </div>
                <!-- closs About Us Page -->
                <!-- Our Clinte Start -->
                <div class="row Client" style="margin: 0; width: 100%;">
                    <h1 class="yac">OUR CLIENTS</h1>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" style="justify-content: center; margin:10px 0;">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="immm\istockphoto-1297832726-612x612.jpg" alt="Ajay" style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-back">
                                    <h1 style="color: #b4d5e6;">Sir Omar</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur earum sint animi reprehenderit corporis odit ad incidunt vitae esse omnis ut sit modi aspernatur placeat numquam, quasi ipsa quaerat!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" style="justify-content: center; margin:10px 0;">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="immm\360_F_575076291_GzIf4UmIN0c5QrWCNJJEDHTsN44gPzgD.jpg" alt="George" style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-back">
                                    <h1 style="color: #b4d5e6;">Sir Qasim</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur earum sint animi reprehenderit corporis odit ad incidunt vitae esse omnis ut sit modi aspernatur placeat numquam, quasi ipsa quaerat!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" style="justify-content: center; margin:10px 0;">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="immm\istockphoto-154955498-612x612.jpg" alt="Kumar" style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-back">
                                    <h1 style="color: #b4d5e6;">Sir Sultan</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur earum sint animi reprehenderit corporis odit ad incidunt vitae esse omnis ut sit modi aspernatur placeat numquam, quasi ipsa quaerat!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 d-flex" style="justify-content: center; margin:10px 0;">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="immm\handsome-male-african-american-business-man-ceo-stylish-chic-suit-workplace-standing-confidently-front-financial-174374615.webp" alt="Michle" style="width:300px;height:300px;">
                                </div>
                                <div class="flip-card-back">
                                    <h1 style="color: #b4d5e6;">Sir Shahveer</h1>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum pariatur earum sint animi reprehenderit corporis odit ad incidunt vitae esse omnis ut sit modi aspernatur placeat numquam, quasi ipsa quaerat!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Our Clinte End -->

            </div>
            <!-- Footer Start  -->
            <?php include 'Components/footer.php' ?>
               
            <!-- Footer End  -->

        </div>
        <script src="bootstrap-5.0.2-dist\js\bootstrap.js"></script>
        <script>
            function initMap() {
                var Aptech = {
                    lat: 24.9289577,
                    lng: 67.0356264
                };
                var abc = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: Aptech
                });
                var marker = new google.maps.Marker({
                    position: Aptech,
                    map: abc
                });

            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg272BuCY-f0VDYyrc9O_1OYHXjDThoSQ
    &callback=initMap"></script>

</body>

</html>