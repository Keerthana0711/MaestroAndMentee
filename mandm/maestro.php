<!DOCTYPE html>
<html>
    <header>
        <title>MaestroAndMentee</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">         
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer">        
        <link rel="stylesheet" href="style.css">
    </header>
    <body class="container">
        <div class="row welcome-sign">
            <div class="text-center col-12 welcome">
                <h1>Welcome!</h1>
            </div>
            <div class="content-form col-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#signin">
                            Sign In
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#login">
                            Log In
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="signin" class="tab-pane fade show active">
                        <h2 class="text-center">Sign In</h2>
                        <form action="signinma.php" method="post">
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input class="form-control" type="date" id="dob" name="dob" placeholder="DOB">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="email" class="form-label">Email ID</label>
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email ID">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input class="form-control" type="tel" id="phone" name="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="art_form" class="form-label">Art Form</label>
                                    <select name="art_form" id="art_form">
                                        <option value="carnatic vocal">Carnatic Vocal</option>
                                        <option value="hindustani vocal">Hindustani Vocal</option>
                                        <option value="flute">Flute</option>
                                        <option value="veena">Veena</option>
                                        <option value="violin">Violin</option>
                                        <option value="mridangam">Mridangam</option>
                                        <option value="ghatam">Ghatam</option>
                                        <option value="tabla">Tabla</option>
                                        <option value="classical dance">Classical Dance</option>
                                        <option value="western dance">Western Dance</option>
                                        <option value="keyboard">Keyboard</option>
                                        <option value="painting">Painting</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input class="form-control" type="text" id="city" name="city" placeholder="City">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="country" class="form-label">Country</label>
                                    <input class="form-control" type="text" id="country" name="country" placeholder="Country">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-12">
                                    <label for="about" class="form-label col-12">About</label>
                                    <textarea class="col-12 form-control" name="about" id="about" cols="60" rows="10" placeholder="About"></textarea>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="yoe" class="form-label">Starting Year as Teacher</label>
                                    <input class="form-control" type="number" id="yoe" name="yoe" placeholder="YOE">
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <label for="modes" class="form-label">Modes of Class</label>
                                    <select name="modes" id="modes">
                                        <option value="online">Online</option>
                                        <option value="physical">Physical</option>
                                        <option value="both">Both</option>
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <input class="form-control btn btn-success" type="submit" id="sign" name="sign" style="margin-top: 7px;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="login" class="tab-pane fade show">
                        <h2 class="text-center">Log In</h2>
                        <form action="loginma.php" method="post">
                            <div class="row">
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <label for="email" class="form-label">Email ID</label>
                                    <input class="form-control" type="text" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <label for="password" class="form-label">Password</label>
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group col-12 col-md-10 offset-md-1">
                                    <input class="form-control btn btn-success" type="submit" id="log" name="log" style="margin-top: 7px;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>