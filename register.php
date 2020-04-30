
        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>NSSC 2020 | SIGN UP</title>

            <!-- Adding icon link to site -->
            <link rel="icon" href="img/nssc_icon.png">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
                rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">

            <style>
                .left{
                    text-align: right;
                }
                .right{
                    text-align: left;
                }
                .row{
                    text-align: center;
                }
            </style>

            <?php
                require "style.php";
            ?>

            
        </head>
        <body>
            <?php
                require "nav.php";
            ?>

            <div class="login-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="name">Name :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="*Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="email">Email :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="email" placeholder="*Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="collegeID">College ID(Student Roll Number) :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="*CollegeID">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="address">Address :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="*Address">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="college">College :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="*College">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="yog">Year of Graduation :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="number" placeholder="*Your Year of Graduation">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="password">Password :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="confirm-password">Confirm Password :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="department">Department :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="*Department">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="phone number">Contact Number</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="number" placeholder="(10 digit phone number)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 left">
                            <label for="SAID">Student Ambassador ID :</label>
                        </div>
                        <div class="col-md-6 right">
                            <input type="text" placeholder="Leave blank if student ambassador is not asssociated with you">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><input class="primary-btn" type="submit" value="SUBMIT"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><a href="#">Login if already have an account</a></div>
                    </div>
                </div>
            </div>