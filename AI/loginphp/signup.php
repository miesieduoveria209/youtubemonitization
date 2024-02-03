<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['password'];

        if(!empty($email) &&  !empty($password) && !is_numeric($email))
        {
            $query = "insert into new (username, email, password) values('$username', '$email', '$password')";

            mysqli_query($con, $query);
            echo"<script type='text/javascript'>alert('Successfully register')</script>";
        }
        else{
            echo"<script type='text/javascript'>alert('Please Enter some Fuckin' valid information')</script>";

        }
    }
    ?>