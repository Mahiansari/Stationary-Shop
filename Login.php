<?php
session_start();
include 'admin/conn.php';

if (isset($_POST['signup_submit_button'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $cus_add_query = "insert into customer(Cust_Username,Cust_Password,Cust_Email,Cust_Contact) value 
    ('$username','$password','$email','$contact')";
    mysqli_query($conn,$cus_add_query);
    $_SESSION['cust_login']=$username;
    header("Location:login.php");
    // echo "<script>alert('signup clicked')</script>";
}
if (isset($_POST['signin_submit_button'])) {
    $cus_login_username = $_POST['cus_login_username'];
    $cus_login_pass = $_POST['cus_login_pass'];
    $cus_login_query = "SELECT * FROM customer where Cust_Username = '$cus_login_username';";
    $cus_data = mysqli_fetch_assoc(mysqli_query($conn,$cus_login_query));
    if($cus_login_username==$cus_data['Cust_Username']&&$cus_login_pass==$cus_data['Cust_Password']){

        $_SESSION['cust_login']=$cus_data['Cust_ID']; 
        header("Location:index.php");
       
    }
    else{
        echo "<script>alert('Check Username and password')</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            /* COLORS */
            --white: #e9e9e9;
            --gray: #333;
            --blue: #0367a6;
            --lightblue: #008997;

            /* RADII */
            --button-radius: 0.7rem;

            /* SIZES */
            --max-width: 758px;
            --max-height: 420px;

            font-size: 16px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
        }

        body {
            align-items: center;
            background-color: var(--white);
            background: url("https://images.pexels.com/photos/5088022/pexels-photo-5088022.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: grid;
            height: 100vh;
            place-items: center;
            margin: 0;
        }

        .form__title {
            font-weight: 300;
            margin: 0;
            margin-bottom: 1.25rem;
        }

        .link {
            color: var(--gray);
            font-size: 0.9rem;
            margin: 1.5rem 0;
            text-decoration: none;
        }

        .container {
            background-color: var(--white);
            border-radius: var(--button-radius);
            box-shadow: 0 0.9rem 1.7rem rgba(0, 0, 0, 0.25),
                0 0.7rem 0.7rem rgba(0, 0, 0, 0.22);
            height: var(--max-height);
            max-width: var(--max-width);
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .container__form {
            height: 100%;
            position: absolute;
            top: 0;
            transition: all 0.6s ease-in-out;
        }

        .container--signin {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .container--signin {
            transform: translateX(100%);
        }

        .container--signup {
            left: 0;
            opacity: 0;
            width: 50%;
            z-index: 1;
        }

        .container.right-panel-active .container--signup {
            animation: show 0.6s;
            opacity: 1;
            transform: translateX(100%);
            z-index: 5;
        }

        .container__overlay {
            height: 100%;
            left: 50%;
            overflow: hidden;
            position: absolute;
            top: 0;
            transition: transform 0.6s ease-in-out;
            width: 50%;
            z-index: 100;
        }

        .container.right-panel-active .container__overlay {
            transform: translateX(-100%);
        }

        .overlay {
            background-color: var(--lightblue);
            background: url("https://img.freepik.com/free-photo/top-view-back-school-stationery-with-colorful-pencils_23-2148587539.jpg?w=740&t=st=1701982289~exp=1701982889~hmac=e43e28f812707ede89b4adb66927f05e8a5a247e1f7dbb6d698cb419abb6a346");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            left: -100%;
            position: relative;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
            width: 200%;
            opacity: 1;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay__panel {
            align-items: center;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
            position: absolute;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
            width: 50%;
        }

        .overlay--left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay--left {
            transform: translateX(0);
        }

        .overlay--right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay--right {
            transform: translateX(20%);
        }

        .btn {
            background-color: var(--blue);
            background-image: linear-gradient(90deg, var(--blue) 0%, var(--lightblue) 74%);
            border-radius: 20px;
            border: 1px solid var(--blue);
            color: var(--white);
            cursor: pointer;
            font-size: 0.8rem;
            font-weight: bold;
            letter-spacing: 0.1rem;
            padding: 0.9rem 4rem;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        .form>.btn {
            margin-top: 1.5rem;
        }

        .btn:active {
            transform: scale(0.95);
        }

        .btn:focus {
            outline: none;
        }

        .form {
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 3rem;
            height: 100%;
            text-align: center;
        }

        .input {
            background-color: #fff;
            border: none;
            padding: 0.9rem 0.9rem;
            margin: 0.5rem 0;
            width: 100%;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        /* back button css  */
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


    <div class="container <?php echo ($_GET['but'] == "su") ? "right-panel-active" : ""; ?>">

        <!-- Sign In -->
        <form action="" method="post">
        <div class="container__form container--signin">
            <div class="form">
                <h2 class="form__title">Sign In</h2>
                <input type="text" placeholder="username" class="input" name="cus_login_username" autocomplete="off" />
                <input type="password" placeholder="Password" class="input" name="cus_login_pass" autocomplete="off" />
                <!-- <a href="#" class="link">Forgot your password?</a> -->
                <button class="btn" type="submit" name="signin_submit_button">Sign in</button>
            </div>
        </div>
        </form>

        <!-- Sign Up -->
        <form action="" method="post" >
            <div class="container__form container--signup">
                <div class="form">
                    <h2 class="form__title">Sign Up</h2>
                    <input type="text" placeholder="Username" class="input" name="username" autocomplete="off" required/>
                    <input type="email" placeholder="Email" class="input" name="email" autocomplete="off" required/>
                    <input type="text" placeholder="Contact" class="input" name="contact" autocomplete="off" required/>
                    <input type="password" placeholder="Password" class="input" name="password" autocomplete="off" required/>
                    <button class="btn" type="submit" name="signup_submit_button">Sign Up</button>
                </div>
            </div>
        </form>



        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("form1");
        const secondForm = document.getElementById("form2");
        const container = document.querySelector(".container");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        fistForm.addEventListener("submit", (e) => e.preventDefault());
        secondForm.addEventListener("submit", (e) => e.preventDefault());
    </script>
</body>

</html>