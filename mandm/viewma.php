<?php
    session_start();

    require_once "pdo.php";


    if (!isset($_SESSION['email'])) {
        die('Not logged in');
    }

    if (!isset($_SESSION['email'])) {
        $_SESSION['error'] = "Missing profile_id";
        header('Location: index.php');
        return;
    }

    $stmt = $pdo->prepare("SELECT * FROM maestro_details where email = :email");
    $stmt->execute(array(":email" => $_SESSION['email']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row === false) {
        $_SESSION['error'] = 'Bad value for user_id';
        header('Location: index.php');
        return;
    }

    $stmt = $pdo->prepare("SELECT * FROM mentee_details where art_form = :art_form");
    $stmt->execute(array(":art_form" => $row['art_form']));
    $rowsofart = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($rowsofart === false) {
        $_SESSION['error'] = 'Bad value for user_id';
        header('Location: index.php');
        return;
    }
?>
<!DOCTYPE html>
<html>
    <header>
        <title>MaestroAndMentee</title>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">         
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">        
        <link rel="stylesheet" href="style.css">
    </header>
    <body class="row">
        <nav class="navbar navbar-light navbar-expand-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="./images/maestro&mentee-logo.png" alt="MandM." height="30" width="30"></a>
                <button class="navbar-toggler nr-auto" type="button" data-toggle="collapse" data-target="#NavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="NavBar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="dashboardma.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="edit_profilema.php">Edit Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">View Mentee</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedbackma.php">Feedback</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                    <span>
                        <a href="logout.php">Logout</a>
                    </span>
                </div>
            </div>
        </nav>
        <div class="title-bar col-12 text-center">
            <h1>View Mentee</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">                    
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo('<p style="color: red;">' . htmlentities($_SESSION['error']) . "</p>\n");
                        unset($_SESSION['error']);
                    }
                    ?>
                    <h3>Here is the list of Mentees interestered in your Art Form</h3>
                    <div class="box-container">
                        <?php
                            foreach ($rowsofart as $row) {
                                echo('<div class="box">'.$row['name'].'<br/>'.$row['phone'].'<br/>'.$row['city'].'<br/>'.$row['country'].'</div>');
                            } 
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="contact col-12" id="contact">
            <div class="brand-details">
                <h3 class="brand-name">Maestro And Mentee.</h3>
                <p class="detail">We aim at bridging the gap between Maestros and Mentees out there.</p>
            </div>
            <div class="contact-details">
                <h3 class="contact-title">Contact</h3>
                <p><i class="fa fa-address-card"></i>: Chennai, Tamil Nadu, India</p>
                <p><i class="fa fa-phone"></i>: +91-9955220015</p>
                <p><i class="fa fa-phone"></i>: +91-8945740254</p>
                <p><i class="fa fa-envelope"></i>: maestroandmentee@gmail.com</p>
            </div>
            <div class="link-details">
                <h3 class="link-title">Links</h3>
                <ul>
                    <li><a href="dashboardma.php">Home</a></li>
                    <li><a href="edit_profilema.php">Edit Profile</a></li>
                    <li><a href="viewma.php">View Mentee</a></li>
                    <li><a href="feedbackma.php">Feedback</a></li>
                </ul>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>