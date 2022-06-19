<?php 
    session_start(); 

    $connection = mysqli_connect('localhost','root','root','maestroandmentee',8889);
    
    if(isset($_POST['sign'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];        
        $phone = $_POST['phone'];
        $art_form = $_POST['art_form'];
        $city = $_POST['city'];
        $country = $_POST['country'];                
        $dob = $_POST['dob'];

        $about = $_POST['about'];
        $yoe = $_POST['yoe'];
        $modes = $_POST['modes'];

        $request1 = "insert into maestro_details(email, name , password, phone, art_form, city, country, dob) values('$email', '$name', '$password', '$phone', '$art_form', '$city', '$country', '$dob')";

        mysqli_query($connection, $request1);

        $request = "insert into maestro_artistry(email, about , yoe, modes) values('$email', '$about', '$yoe', '$modes')";

        mysqli_query($connection, $request);

        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        header('location:dashboardma.php');
    }else{
        echo 'something went wrong try again';
    }

?>