<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into new (username, email, password) values ('$firstname', '$email', '$password')";

            mysqli_query($con, $query);
            
            echo"<script type='text/javascript'> alert('Successfully Registered')</script>";
        }
        else
        {
            echo"<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";  
        }
    }
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/logincss/style.css">
            <link rel="shortcut icon" href="/AI/loginhtml/index.php" type="image/x-icon">
            <title>Join Our Monetization Platform</title>
            <style>
                body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; 
            margin: 0;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;

        }

        .container {
            position: relative;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 100%;
            max-width: 1000px;
            height: 500px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            transition: transform 0.6s ease-in-out;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: fadeinout 0.5s ease-in-out;
        }

        input {
            padding: 10px;
            font-size: large;
            margin: 10px 0;
            width: 80%;
            /* height: 50px; */
            transition: .5s;
            outline: 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button:hover{
            background: #000;
            transition: 0.5s;
        }
        input:active{
            outline: rgb(199, 80, 80) 2px solid;
        }
        button {
            padding: 10px;
            margin: 10px 0;
            width: 80%;
            transition: 0.5s;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            height: 3em;
            font-size: medium;
            border-radius: 5px;
            cursor: pointer;
        }
        input::placeholder{
            font-size: large;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
        }
        .class{
            text-decoration: none;
            color: black;
            transition: 0.5s;
            font-size: x-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .class:hover{
            text-decoration: underline;
            transition: 0.5s;
        }
        .overlay {
            background: linear-gradient(to right, #FF416C, #FF4B2B);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #fff;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: xx-large;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 100%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-panel {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .overlay-panel h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .ghost {
            background-color: transparent;
            color: #fff;
            border: 1px solid #fff;
        }


        @keyframes fadeinout {
            50%{
                opacity: 0;
            }
            100%{
                opacity: 1;
            }
        }
            </style>
        </head>
        <body>
            <div class="image">
                <img src="/logincss/download-removebg-preview (5).png" alt="">
            </div>

            <div class="container" id="container">
                <div class="form-container sign-up-container">
                    <form method="POST">
                        <h1>Create Account</h1>
                        <input type="text" id="signup-username" name="username" placeholder="Username" required>
                        <input type="email" id="signup-email" name="email" placeholder="Email" required>
                        <input type="password" id="signup-password" name="password" placeholder="Password" required>
                        <button type="submit">Sign Up</button><br>
                        <a class="class" href="/AI/loginhtml/login.php">Already Monetized?</a>
                    </form>
                </div>

                <div class="overlay-container">
                    <div class="overlay">
                        Welcome New Youtuber!
                    </div>
                </div>
            </div>
        </body>
        </html>
