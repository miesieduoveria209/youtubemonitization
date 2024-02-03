<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST['username'];
    $password =$_POST['password'];

    if(!empty($username) &&  !empty($password) && !is_numeric($username))
    {
        $query = "insert into new (username, password) values('$username', '$password')";

        mysqli_query($query);
        echo"<script type='text/javascript'>alert('Successfully register')</script>";
    }
    else{
        echo"<script type='text/javascript'>alert('Please Enter some Fuckin valid information')</script>";

    }
}
?>