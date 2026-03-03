<?php 
session_start();
include 'admin/conn.php';
if(isset($_POST['contact_info_send_button'])){

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mob_num = $_POST['mob_num'];
    $message = $_POST['message'];

    $send_info_query = "INSERT INTO Contact_us (First_Name, Last_Name, Email, Mobile, Message)
    VALUES ('$first_name', '$last_name', '$email', '$mob_num', '$message');
    ";
    mysqli_query($conn,$send_info_query);

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.css">
    <link rel="stylesheet" href="CSS\Home-Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="CSS\Contact-style.css">

    <script src="java script/Sign in and Sign Up.js"></script>
    <!-- flowbite cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.js" integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Slider Coding start  -->

    <!-- Insert to your webpage before the </head> -->
    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
    <script src="sliderengine/initslider-1.js"></script>
    <!-- End of head section HTML codes -->

    <!-- Slider Coding End  -->
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

<body>
    <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">
        <div class="container-fluid" style="border:none ; box-sizing: border-box; text-align: center;">

            <!-- nav bar Start -->
           
            <?php include 'Components/navbar.php' ?>
        <?php include 'Components/searchbar.php' ?>
        <br><br>
        <!-- contect us start -->
        <div class="container container_2">
            <div class="row ">
                <div class="col-lg-8 p-4" style="background-color: white;">
                    <h4 style="font-weight: bold;">Send a Message</h4>
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">First Name :</label><br>
                            <input type="text" name="first_name" id="cfnames" class="form-control" placeholder="Type Here">
                            <label for="" id="cfname_error"></label><br><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Last Name :</label><br>
                            <input type="text" name="last_name" id="clnames" class="form-control" placeholder="Type Here">
                            <label for="" id="clname_error"></label><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="">Email :</label><br>
                            <input type="text" name="email" id="cemails" class="form-control" placeholder="abcd321@gmail.com">
                            <label for="" id="cemail_error"></label><br><br>
                        </div>
                        <div class="col-lg-6">
                            <label for="">Mobile :</label><br>
                            <input type="text" name="mob_num" id="cMobile_num" class="form-control" placeholder="0300-000000">
                            <label for="" id="cmob_error"></label><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Message :</label><br>
                            <textarea name="message" id="" rows="5" class="form-control"></textarea><br><br>
                            <input class="btn btn-danger" name="contact_info_send_button" style="width: 100%;" type="submit" value="Send">
                        </div>
                    </div>
                </div></form>
                <div class="col-lg-4">
                    <div class="row  ">
                        <div class="col-lg-12 p-3" style="background-color: #b4d5e6; color: black;">
                            <h4>Contact Info</h4>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color:#b4d5e6; width: 30px; height: 30px; border-radius: 50%; margin-right: 3px;">
                                        <i class="fa fa-map-marker icon-size"></i>
                                    </div>
                                    <div>Cannaught Place,New Dhli india</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color: #b4d5e6; width: 30px; height: 30px; border-radius: 50%;margin-right: 3px;">
                                        <i class="material-icons icon-size">mail</i>
                                    </div>
                                    <div>Loremipsum@gmail.com</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 p-2" style="display: flex;">
                                    <div style="background-color: #b4d5e6; width: 30px; height: 30px; border-radius: 50%;margin-right: 3px;">
                                        <i class="material-icons icon-size">local_phone</i>
                                    </div>
                                    <div>+92 1234567891</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <i class="fa fa-facebook-square" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-twitter" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-linkedin-square" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                    <i class="fa fa-instagram" style="font-size: 25px; padding: 10px 8px; cursor: pointer;"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div id="map" style="background-color: #b4d5e6;">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contect us closs -->

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
        fnames = document.getElementById('cfnames').value;
        lnames = document.getElementById('clnames').value;
        emails = document.getElementById('cemails').value;
        mobile = document.getElementById('cMobile_num').value;


        name_chk = /^([a-zA-Z])+$/;
        email_chk = /^([a-zA-Z0-9\-\.]{5,20})+\@([a-zA-Z])+\.([a-zA-Z]{2,4})+$/;
        mob_chk = /^([03]{2})+([0-9]{2})+\-([0-9]{7})+$/;


        // First name Event Listner focus and Blur
        document.getElementById("cfnames").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (name_chk.test(this.value) == true) {
                    document.getElementById("cfname_error").innerHTML = '';
                } else {
                    document.getElementById("cfname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("cfname_error").style.color = "red";
                }
            } else {
                document.getElementById("cfname_error").innerHTML = 'Please Enter Name';
                document.getElementById("cfname_error").style.color = "red";

            }
        });

        //  Last Name Event Listner focus and Blur
        document.getElementById("clnames").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (name_chk.test(this.value) == true) {
                    document.getElementById("clname_error").innerHTML = '';
                } else {
                    document.getElementById("clname_error").innerHTML = 'Only alphabet Allowed';
                    document.getElementById("clname_error").style.color = "red";
                }
            } else {
                document.getElementById("clname_error").innerHTML = 'Please Enter Name';
                document.getElementById("clname_error").style.color = "red";

            }
        });

        // Email Event Listner focus and Blur
        document.getElementById("cemails").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (email_chk.test(this.value) == true) {
                    document.getElementById("cemail_error").innerHTML = '';
                } else {
                    document.getElementById("cemail_error").innerHTML = 'Please Enter Valid Email Address';
                    document.getElementById("cemail_error").style.color = "red";
                }
            } else {
                document.getElementById("cemail_error").innerHTML = 'Please Enter Email address';
                document.getElementById("cemail_error").style.color = "red";

            }
        });

        // Mobile Number Event Listner focus and Blur
        document.getElementById("cMobile_num").addEventListener("blur", function() {
            if (this.value.length > 0) {
                if (mob_chk.test(this.value) == true) {
                    document.getElementById("cmob_error").innerHTML = '';
                } else {
                    document.getElementById("cmob_error").innerHTML = 'Please Enter Valid Mobile Num';
                    document.getElementById("cmob_error").style.color = "red";
                }
            } else {
                document.getElementById("cmob_error").innerHTML = 'Please Enter Mobile Number';
                document.getElementById("cmob_error").style.color = "red";

            }
        });



       
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAg272BuCY-f0VDYyrc9O_1OYHXjDThoSQ
      &callback=initMap"></script>

</body>

</html>