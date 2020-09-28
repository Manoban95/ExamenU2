<?php
	require 'conection.php';
	//$conectar= mysqli_connect('localhost','root','','examen');
    $email = $_POST["email"];
    $password = $_POST["password"];
    $year = $_POST["year"];
    
    $insetar = "INSERT INTO usuario VALUES ('','$email','$password','$year')";

    mysqli_query($con,$insetar);

?>