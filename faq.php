<?php
session_start();

include 'admin/conn.php';
$faq_get_query = "SELECT * FROM FAQ;";
$faq_recive_data = mysqli_query($conn, $faq_get_query);

if (isset($_POST['delete_button'])) {
    extract($_POST);
    $delete_faq_query = "DELETE FROM `FAQ` WHERE FAQID='$faq_id';";
    mysqli_query($conn, $delete_faq_query);
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
        @import url("https://fonts.googleapis.com/css?family=Hind:300,400&display=swap");

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
            margin: 70px 0 5px 0;
            border: 1px solid black !important;

        }

        .sbtn {
            border-radius: 0px 50px 50px 0px;
            background-color: #b4d5e6;
            margin: 70px 0 5px 0;
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

        * {
            box-sizing: border-box;
        }

        *::before,
        *::after {
            box-sizing: border-box;
        }

        .container {
            margin: 0 auto;
            /* padding: 4rem; */
            width: 100%;
        }

        .accordion .accordion-item {
            border-bottom: 1px solid #e5e5e5;
        }

        .accordion .accordion-item button[aria-expanded=true] {
            border-bottom: 1px solid #03b5d2;
        }

        .accordion button {
            position: relative;
            display: block;
            text-align: left;
            width: 100%;
            padding: 1em 0;
            color: #7288a2;
            font-size: 1.15rem;
            font-weight: 400;
            border: none;
            background: none;
            outline: none;
        }

        .accordion button:hover,
        .accordion button:focus {
            cursor: pointer;
            color: #03b5d2;
        }

        .accordion button:hover::after,
        .accordion button:focus::after {
            cursor: pointer;
            color: #03b5d2;
            border: 1px solid #03b5d2;
        }

        .accordion button .accordion-title {
            padding: 1em 1.5em 1em 0;
        }

        .accordion button .icon {
            display: inline-block;
            position: absolute;
            top: 18px;
            right: 0;
            width: 22px;
            height: 22px;
            border: 1px solid;
            border-radius: 22px;
        }

        .accordion button .icon::before {
            display: block;
            position: absolute;
            content: "";
            top: 9px;
            left: 5px;
            width: 10px;
            height: 2px;
            background: currentColor;
        }

        .accordion button .icon::after {
            display: block;
            position: absolute;
            content: "";
            top: 5px;
            left: 9px;
            width: 2px;
            height: 10px;
            background: currentColor;
        }

        .accordion button[aria-expanded=true] {
            color: #03b5d2;
        }

        .accordion button[aria-expanded=true] .icon::after {
            width: 0;
        }

        .accordion button[aria-expanded=true]+.accordion-content {
            opacity: 1;
            max-height: 9em;
            transition: all 200ms linear;
            will-change: opacity, max-height;
        }

        .accordion .accordion-content {
            opacity: 0;
            max-height: 0;
            overflow: hidden;
            transition: opacity 200ms linear, max-height 200ms linear;
            will-change: opacity, max-height;
        }

        .accordion .accordion-content p {
            font-size: 1rem;
            font-weight: 300;
            margin: 2em 0;
        }

        .add_faq_buttun {
            font-size: 20px;
            padding: 0.5rem;
            border-radius: 5px;
            border: none;
            background-color: #219ebc;
            color: #023047;
            cursor: pointer;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;

        }
    </style>
</head>

<body>


    <?php include 'Components/navbar.php' ?>
    <!-- My Main Content -->

    <!-- My Box Content -->
    <div class="home-section" style="width: 100%; margin-top: 80px;">
        <div class="container">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion">
                <?php while ($row = mysqli_fetch_assoc($faq_recive_data)) { ?>
                    <div class="">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title"><?php echo $row['Question'] ?></span><span class="icon" aria-hidden="true"></span>
                        </button>
                        <div class="accordion-content">
                            <p style="margin: 0;"><?php echo $row['Answer'] ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>


<?php include 'Components/footer.php' ?>
    <script src="script.js"></script>
    <script>
        const items = document.querySelectorAll(".accordion button");

        function toggleAccordion() {
            const itemToggle = this.getAttribute('aria-expanded');

            for (i = 0; i < items.length; i++) {
                items[i].setAttribute('aria-expanded', 'false');
            }

            if (itemToggle == 'false') {
                this.setAttribute('aria-expanded', 'true');
            }
        }

        items.forEach(item => item.addEventListener('click', toggleAccordion));
    </script>
</body>

</html>