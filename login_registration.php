<?php 
// include 'Layout/header.php';
include 'Operations/Connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <link rel="stylesheet" href="CSS/Stylesheet.css">
    <script src="Script/Script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
</head>
<body style="background-color: rgb(182, 212, 224);">
<h3 style="margin-top:100px; margin-bottom:20px; font-weight:bold; margin-left:440px;">Courier Management - System</h3>
    <div class="container bg-white"  style=" width:fit-content;">
                    <!-- Login Form -->
                    <form action="Operations/Accounts.php" method="post" enctype="multipart/form-data" id="LoginForm">
                        <h1 style="padding-top:15px;">Account Login</h1>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control logininput">
                        </div>
                        <div class="form-group">
                            <label name="password">Password</label>
                            <input type="password" id="password" name="Password" class="form-control logininput">
                            <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>
                        <!-- <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" style="margin-top: 6px;">
                            <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                        </div> -->
                        <button type="submit" name="LoginButton" class="btn form-control"
                            style="background-color: #4d66d3; color:white;">Login</button>
                        <p>Not a user <span onclick="Registerform()">Register Now</span></p>
                    </form>

                    <!-- Registration form -->
                    <form action="Operations/Accounts.php" method="post" id="RegisterForm"
                        style="opacity:0; width:0px; height:0px; z-Index:-999;">
                        <h1 style="padding-top:15px;">Account Register</h1>
                        <div class="form-group">
                            <label>User ID</label>
                            <input type="text" name="userid" required class="form-control logininput">
                        </div>  
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" required class="form-control logininput">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" required class="form-control logininput">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                                <input type="password" id="regpassword" required name="Password" class="form-control logininput">
                                <input type="checkbox" style="cursor:pointer;" onclick="showregpass()"> Show Password
                                <!-- <i class="fa-solid fa-eye" id="passwordeye"></i> -->
                                <!-- <i class="fa-solid fa-eye-slash"></i> -->
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="number" id="contact" name="Contact" required class="form-control logininput">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="Address"  required class="form-control logininput">
                        </div>
                        <div class="form-group">
                            <label>Date of Registration</label>
                            <input type="datetime-local" name="dateofreg"  required class="form-control logininput">
                        </div>
                        <button type="submit" name="RegisterButton" class="btn form-control"
                            style="background-color: #4d66d3; color:white;">Register</button>
                        <p>Already a user <span onclick="loginform()" style="padding-bottom:10px;">Login Now</span></p>
                    </form>
    </div>

    <script>
        // Login
        function myFunction(){
            var pass = document.getElementById('password');
            if(pass.type === "password"){
                pass.type = "text";
            }
            else{
                pass.type = "password";
            }
        }
        // Registration
        function showregpass(){
            var regpass = document.getElementById('regpassword');
            if(regpass.type === "password"){
                regpass.type = "text";
            }
            else{
                regpass.type = "password";
            }
        }
    </script>
</body>

