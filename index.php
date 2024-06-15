<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
</head>
<body>
    <!-- Automatic Modal -->
    <div class="container"></div>
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-info font-weight-bold">Welcome to Our Fast Courier</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                            

                    <div class="modal-body">
                    <h2>Hello, User! <i class="fas fa-smile"></i></h2>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info font-weight-bold" data-dismiss="modal">OK</button>
                    </div>

                </div>

            </div>

        </div>


    </div>
            <!-- ////////////////////NAVBAR -->

    <div class="bgimg">
        <nav class="navbar navbar-expand-md bg-white navbar-dark fixed-top">
            <div class="container">
                    <a href="" class="navbar-brand text-info font-weight-bold">
                    <img src="Logo/courier1.png" alt="Courier Logo" height="50px" width="50px">
                    FasT Courier</a>
                    <button class="navbar-toggler bg-info hamburger" type="button" data-toggle="collapse" data-target="#collapsebutton">
                        <!-- <span class="navbar-toggler-icon"></span> -->
                        &#9776;
                    </button>

                    <div id="collapsebutton" class="collapse navbar-collapse text-center">
                        <ul class="navbar-nav ml-auto mr-3">
                            <li class="nav-item">
                                <a href="#home" class="nav-link text-info font-weight-bold">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="#courier" class="nav-link text-info font-weight-bold">PACKAGES</a>
                            </li>
                            <li class="nav-item">
                                <a href="#ourteam" class="nav-link text-info font-weight-bold">OUR TEAM</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link text-info font-weight-bold">CONTACT US</a>
                            </li>
                        </ul>
                        
                        <?php if(@$_SESSION['DatabaseName'] != ''){ ?> 
                        <a href="#" class="mr-2 font-weight-bold text-success">Welcome to: <u><?= @$_SESSION['DatabaseName']?></u></a>
                        <?php }?>

                        <?php if(@$_SESSION['DatabaseName'] == ''){ ?> 
                        <a href="login_registration.php"><button type="button" class="btn btn-info text-white font-weight-bold mr-2" id="loginbtn">Login</button></a>
                        <?php }?>

                        <?php if(@$_SESSION['DatabaseName'] != ''){ ?> 
                            <form action="Operations/Accounts.php" method="post">
                                <button type="submit" name="Logout" class="btn btn-info text-white font-weight-bold mr-2" id="loginbtn">Logout</button>
                            </form>
                        <?php }?>

                        <?php if(@$_SESSION['DatabaseName'] != ''){ ?> 
                        <a href="Admin Panel/Admin.php"><button type="button" class="btn btn-dark text-white font-weight-bold mr-2" id="dashboardbtn">Dashboard</button></a>
                        <?php }?>
                    </div>
            
            
            </div>
        </nav>
                    <!--//////////// MAIN PAGE -->

        <div class="container text-center text-white heardertext" id="home">
            <h2>Welcome to Our Fast Courier!</h2>
            <h1>Now, It's time to Courier...</h1>
            <button class="btn btn-info text-dark font-weight-bold ">SUBSCRIBE     <i class="far fa-bell" height="40px"></i></button>
        </div>
    </div>
    
             <!-- //////////////// Our Packages / Plans -->
    
    <section class="packages" id="courier" >
        <div class="container text-center">
            <h1 class="text-info">Packages</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="images/couriercard1.png" class="card-img img-fluid" style="height: 200px;">
                        <div class="card-body">
                            <h2 class="card-title">Urgent Based</h2>
                            <p class="card-text"><a href="#" ><button class="btn btn-info" onclick="goto()"><b>More Details</b></button></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="images/couriercard2.png" class="card-img img-fluid" style=" height: 200px;">
                        <div class="card-body">
                            <h2 class="card-title">Normal Based</h2>
                            <p class="card-text"><a href="#" ><button class="btn btn-info" onclick="goto()"><b>More Details</b></button></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-10 d-block m-auto">
                    <div class="card">
                        <img src="images/courier image3.jpg" class="card-img img-fluid" style="height: 200px;">
                        <div class="card-body">
                            <h2 class="card-title">Weekly Basis</h2>
                            <p class="card-text"><a href="#"><button class="btn btn-info" onclick="goto()"><b>More Details</b></button></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    
                    <!-- ///////////////OUR TEAM -->

        <p id="about"></p>            
        <section class="ourteam" id="ourteam">
        <div class="container text-center">
            <h1 class="text-info">OUR AMAZING TEAM</h1>
            <P>Our moto is Serve the nations through Our Fast Service!</P>
            <div class="row teamsetting">
                
                <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="images/gentle man.jpg" class="figure-img img-fluid rounded-circle" height="200px" width="200px">
                        <figcaption>
                            <h4>Muhammad Sabir</h4>
                            <p class="figure-caption">Front End Developer</p>
                        </figcaption>
                    </figure>
                    
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="images/gentle man3.jpg" class="figure-img img-fluid rounded-circle" height="200px" width="200px">
                        <figcaption>
                            <h4>Muhammad Siddiq</h4>
                            <p class="figure-caption">Web Designer</p>
                        </figcaption>
                    </figure>
                    
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-10 col-12 d-block m-auto">
                    <figure class="figure">
                        <img src="images/gentle man7.jpg" class="figure-img img-fluid rounded-circle" height="200px" width="200px">
                        <figcaption>
                            <h4>M. Taha</h4>
                            <p class="figure-caption">Front End Developer </p>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
        </div>
    </section>

            <!-- //////////////CONTACT US -->
            <?php 
            include('Operations/Connection.php');
            $select = "Select * from user where id = '".@$_SESSION['Cust_id']."'";
            $run = mysqli_query($con, $select);
            $getdata = mysqli_fetch_assoc($run);
            ?>

        <p id="contact"></p>
        <section class="contact" id="contact">
            <h1 class="text-info">CONTACT US</h1>
            <form action="contact crud.php" method="post" class="form-group">
                <input type="text" name="uname" readonly value="<?= @$getdata['UserName'] ?>" class="form-control" placeholder="Enter Your Name">
                <input type="email" name="email" readonly value="<?= @$getdata['email'] ?>" class="form-control" placeholder="Enter Your Email">
                <textarea name="message" class="form-control" id="message" cols="40" rows="10" placeholder="Enter Your Message"></textarea>            
                <div>
                    <input type="submit" value="Submit" class="btn btn-primary" name='usubmit'>
                </div>
            </form>
        </section>



    <!-- //////////////////COPY RIGHT FOOTER -->

    <footer class="footer">
        <div class="footer-left col-md-4 col-sm-6">
          <p class="about">
            <span> About the <u>Fast Courier</u></span> 
            Our Fast Courier is the best Assistance Service Provider to all, who want to transfer their Parcel as much as fast, in the modern age, we provide the website to easy access in Our fast Courier Service for taking the best service which we provide to our valuable Customer as they deserve.  
        </p>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-google-plus-square"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
          </div>
        </div>
        <div class="footer-center col-md-4 col-sm-6">
          <div>
            <i class="fas fa-map-marker-alt"></i>
            <p><span> Aptech Gulshan Centre</span> Karachi, Pakistan</p>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <p> (+92) 000 100 500</p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#"> FasTcourier@gmail.com</a></p>
          </div>
        </div>
        <div class="footer-right col-md-4 col-sm-6">
          <h2 class="text-info font-weight-bold"><img src="Logo/courier1.png" height="50px" width="50px"> FAST COURIER<span></span></h2>
          <p class="menu">
            <a href="#"> Home</a> |
            <a href="#courier"> Packages</a> |
            <!-- <a href="#ebook"> Ebooks</a> | -->
            <a href="#about"> About</a> |
            <a href="#contact"> Contact Us</a>  
          </p>
          <p class="name"> FasTCourier &copy; <?php echo date('Y.');?></p>
        </div>
      </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        
        function goto(){
            alert("Please Login for Seeing further Details, Thankyou!");
        }

        $(document).ready(function(){
            $('#myModal').modal('show')
        });

    </script>  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
