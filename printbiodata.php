<?php
if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass= $_POST['pass'];

        echo"<h3>user detail</h3>";
        echo"name:". $name . "<br>";
        echo"email:". $email . "<br>";
        echo"password:" . $pass;

    }
    ?>