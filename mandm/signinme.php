<?php 
    session_start(); 

    $connection = mysqli_connect('localhost','root','root','maestroandmentee',8889);
    
    if(isset($_POST['sign'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $dob = $_POST['dob'];
        $art_form = $_POST['art_form'];

        $request = "insert into mentee_details(email, name , password, phone, city, country, dob, art_form) values('$email', '$name', '$password', '$phone', '$city', '$country', '$dob', '$art_form')";

        mysqli_query($connection, $request);

        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header('location:dashboardme.php');
    }else{
        echo 'something went wrong try again';
    }

?>