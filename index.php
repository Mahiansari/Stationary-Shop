<?php 
session_start();
if(isset($_POST['logout_button'])){
    // session_unset();
    // session_destroy();
    echo "<script>alert('unset')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/2.jpg" type="image/icon type">
    <title>Home</title>
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

    .yac1 {
        font-size: 40px;
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

    /* Search bar End  */
</style>

</head>

<body>
    <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">

        <!-- nav bar Start -->
        <?php include 'Components/navbar.php' ?>
        <?php include 'Components/searchbar.php' ?><br>
        <?php include 'Components/slider.php' ?>
        <!-- Insert to your webpage where you want to display the slider -->
        
        <!-- End of body section HTML codes --><br><br><br>

        <h1 class="yac">Category</h1><br>
        <div class="row" style="width: 100%; margin: 0; display: flex;justify-content: space-evenly;">

        <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category.php?cat=pen"><img src="immm\Cross_Pens_Top_10_Pen_Brands.webp" style="height: 250px;" class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category.php?cat=pen" class="cdtitle">
                        <h5 class="card-title">PENS</h5>
                    </a>
                </div>
            </div>


            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category.php?cat=bag"><img src="immm\bag.jpg" style="height: 250px; width: 400px;" class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category.php?cat=bag" class="cdtitle">
                        <h5 class="card-title">BAGS</h5>
                    </a>
                </div>
            </div>

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category.php?cat=calculator"><img src="immm\ENS041-550x550.jpg" style="height: 250px; width: 400px;" class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category.php?cat=calculator" class="cdtitle">
                        <h5 class="card-title">CALCULATORS</h5>
                    </a>
                </div>
            </div>

            <div class="card col-lg-3 cat_col_div" style="width: 18rem;">
                <a href="Category.php?cat=book"><img src="immm\books.avif" style="height: 250px;" class="card-img-top cdimg" alt="..."></a>
                <div class="card-body">
                    <a href="Category.php?cat=book" class="cdtitle">
                        <h5 class="card-title">BOOKS</h5>
                    </a>
                </div>
            </div>




        </div>
    </div><br><br><br>
    <!-- Category Section End  -->


    <!-- Brands Section Start  -->
    <h1 class="yac">Stationary Brands</h1><br>
    <div class="row" style="width: 100%; margin: 0; display: flex; justify-content: center; align-items: center;">
        <div class="col-lg-3 col-md-4" style="text-align: center;">
        <a href="Category.php?cat=chase"><span><img src="immm\60422f9228ca827caa97708f82450803.jpg" alt="" class="Brands_images"></span></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
        <a href="Category.php?cat=staedtler"><span><img src="immm\download.png" alt="" class="Brands_images"></span></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
        <a href="Category.php?cat=rifle"> <span><img src="immm\riflepaperco.webp" alt="" class="Brands_images"></span></a>
        </div>
        <div class="col-lg-3 col-md-4" style="text-align: center;">
        <a href="Category.php?cat=muji">  <span><img src="immm\f38f5f1b20c696cec1237a41736fb9b4.jpg" alt="" class="Brands_images"></span></a>
        </div>
    </div>
    </div><br><br>
    <!-- Brands Section End  -->


    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="immm\s1.png" alt="" style="border-radius: 20px; width: 100%;"></div>
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">ABOUT STATIONARY</h2>
            <p style="text-align: justify;">Stationery refers to commercially manufactured writing materials, including cut paper, envelopes, writing implements, continuous form paper, and other office supplies.</p>
        </div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">CREATIVITY</h2>
            <p style="text-align: justify;">
                Creativity is the ability to create items that inspire and inform others, often in aesthetically pleasing ways. Aldo Sarellano. Creativity is thinking outside of society's norm. It is being able to express oneself in different varieties of arts - painting, poetry, sculpture, style, fashion, etc. </p>
        </div>
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="immm\s2.webp" alt="" style="border-radius: 20px; width: 100%;"></div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="immm\s3.jpg" alt="" style="border-radius: 20px; width: 100%;"></div>
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">A PEN POWER</h2>
            <p style="text-align: justify;">The pen is mightier than the sword if the sword is very short, and the pen is very sharp. The pen is the tongue of the mind. To hold a pen is to be at war. Let us remember: One book, one pen, one child, and one teacher can change the world.</p>
        </div>
    </div>
    <div class="row" style=" width: 100%; margin:20px 0;">
        <div class="col-lg-6 d-flex Text_div" style="align-items: center; justify-content: center;flex-direction: column; padding: 0 5% 0 5%;">
            <h2 class="WR_heading">ABOUT DIGITAL STATIONARY</h2>
            <p style="text-align: justify;">
                Digital stationery is digital asset resembling stationery in the paper world that you can use to draw, write or create an assemblage of words and/or images for business, educational or recreational purposes.</p>
        </div>
        <div class="col-lg-6 d-flex" style="align-items: center; justify-content: center;"><img src="immm\1_Y8zsjel4bb_jM2oQwkdFLg.png" alt="" style="border-radius: 20px; width: 100%;"></div>
    </div>
    <!-- Suggestion For Your End -->

    <!-- Footer Start  -->
    <?php include 'Components/footer.php'?>
    <!-- Footer End  -->

    <script src="bootstrap-5.0.2-dist\js\bootstrap.js"></script>
    <script src="java script/Sign in and Sign Up.js"></script>
</body>

</html>