<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Pricing · Code With @jashan</title>
        <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/pricing/">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        

        <!-- Bootstrap core CSS -->
        <link href="bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
        <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
        <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#563d7c">


        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <!-- Custom styles for this template -->
        <!-- <link href="pricing.css" rel="stylesheet"> -->
        
        <style>
             strong{
            color:white;
        }
        </style>
       
    </head>

    <body>
            <div class="alert alert-dark alert-dismissible fade show" role="alert  ">
                SUCCESS: Congratulations!!! You have logged in ... 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> 

            </div>

        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-info border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal"><?php  session_start(); echo "<strong><i><u> What's Up @ ". $_SESSION['user']." ,Need a Website Online ?</i></u></strong>" ?></h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="#">Templates</a>
                <a class="p-2 text-dark" href="#">Features</a>
                <a class="p-2 text-dark" href="#">Enterprise</a>
                <a class="p-2 text-dark" href="#">Support</a>
                <a class="p-2 text-dark" href="#">Pricing</a>
            </nav>
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Sign Up </button>
            <button class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">Log Out </button>
        </div>

        <!-- Logout Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Do You Want To Logout ?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="enterremember" class="custom-control-input"
                                    id="ustomControlAutosizing"><br>
                                <label class="custom-control-label" for="ustomControlAutosizing">I have checked your free web templates.
                                </label>
                            </div><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        
                        <form action="logout.php" method="post">
                        <input type="submit" name="logout" value="Yes" class="btn btn-primary" ></input>
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- free Signup Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Sign Up For free Now!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="freesignup.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" placeholder="name@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username" required>
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" required>
                    </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" required>
                </div>
                  
                <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="remember" class="custom-control-input"
                                    id="CustomControlAutosizing">
                                <label class="custom-control-label" for="CustomControlAutosizing">Having Experience in Website developing.
                                </label>
                            </div><br>
                </div>




                <button type="submit" class="btn btn-primary">SignUp</button>
            </form>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>

         <!-- pro Signup Modal -->
         <div class="modal fade" id="prosignup" tabindex="-1" role="dialog" aria-labelledby="prosignup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal"> Get Started !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="prosignup.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" placeholder="name@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                 
                <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="proremember" class="custom-control-input"
                                    id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me
                                </label>
                            </div><br>
                </div>





                <button type="submit" class="btn btn-primary">SignUp</button>
            </form>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>

        
        <!-- Enterprise SignUp Modal -->
        <div class="modal fade" id="entersignup" tabindex="-1" role="dialog" aria-labelledby="entersignup" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Contact Us !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="entersignup.php" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="Eemail" placeholder="name@gmail.com" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                
                <label class="sr-only" for="inlineFormInputGroup">Username</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                    </div>
               
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>

                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2">
                </div>
                 
                <div class="col-auto my-1">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" name="enterremember" class="custom-control-input"
                                    id="ustomControlAutosizing">
                                <label class="custom-control-label" for="ustomControlAutosizing">Remember Me
                                </label>
                            </div><br>
                </div>





                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>

      
            



        <div  class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1  class="display-2 ">Pricing</h1><br>
            <p style="background:#e4e4d0;" class="lead text-capitalize shadow ">Quickly build an effective and Secured Website for your potential customers with  <a href="home.html">Code With @jashan.</a> Having a website and online presence strategy allows you to market your business online.</p>
        </div>

          <!-- Carousel -->

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div  class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="te.jpg" class="d-block w-100" alt="img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5></h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src=".jpg"  class="d-block w-100" alt="img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src=".jpg" class="d-block w-100" alt="img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="an.jpg" class="d-block w-100" alt="img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fourth slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                        </div>
                        <div class="carousel-item">
                        <img src="wow.jpg" class="d-block w-100" alt="img">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Fifth slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
        </div>

        <div class="my-5 container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">*Free</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">&#8377; 0 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="background-color:#e4e4d0;">For Beginners </li>
                            <li style="background-color:#e4e4d0;">1 Demo Website For free</li>
                            <li style="background-color:#e4e4d0;">*Free Web Templates*</li>
                            <li>*1 Month Free Trial*</li>
                            <li style="background-color:#e4e4d0;">For Limited Clients</li>
                            <li style="background-color:#e4e4d0;">Email support</li>
                            <li style="background-color:#e4e4d0;">Email support</li>
                            <li style="background-color:#e4e4d0;">Email support</li>
                            <li style="background-color:#e4e4d0;">Help center access</li>
                        </ul>
                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-lg btn-block btn-primary">Sign up for free</button>
                    </div>
                </div>
                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">&#8377; 400 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="background-color:#e4e4d0;">For -  </li>
                            <li style="background-color:#e4e4d0;">1 Website/mo</li>
                            <li style="background-color:#e4e4d0;">*Hosting Included*</li>
                            <li style="background-color:#e4e4d0;">*Hosting Included*</li>
                            <li style="background-color:#e4e4d0;">*Hosting Included*</li>
                            <li>*Upto 6 Month Access*</li>
                            <li style="background-color:#e4e4d0;">Upto 40 webpages each</li>
                            <li style="background-color:#e4e4d0;">Priority email support</li>
                            <li style="background-color:#e4e4d0;">Help center access</li>

                        </ul>
                        <button type="button" data-toggle="modal" data-target="#prosignup" class="btn btn-lg btn-block btn-primary">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">&#8377; 1000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li style="background-color:#e4e4d0;">For Bussinessman  </li>
                            <li style="background-color:#e4e4d0;" style="background-color:#e4e4d0;">*10 Websites*</li>
                            <li>*Upto 1 Year Access*</li>
                            <li style="background-color:#e4e4d0;">*Hosting Included*</li>
                            <li style="background-color:#e4e4d0;">Bussiness Websites</li>
                            <li style="background-color:#e4e4d0;">*Hosting On Google Cloud*</li>
                            <li style="background-color:#e4e4d0;">Gateway Support</li>
                            <li style="background-color:#e4e4d0;">Phone and email support</li>
                            <li style="background-color:#e4e4d0;">Help center access</li>
                        </ul>
                        <button type="button" data-toggle="modal" data-target="#entersignup"  class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div>
                </div>
            </div><hr><hr>


        </div>

      

          

         
                <footer style="background:#8291a040;width:90%;margin-left:70px" class="pt-4 my-md-5 pt-md-5  border-top">
                    <div class="row">
                        <div class="col-12 col-md">
                            <img style="cursor:pointer;margin-left:130px;" class="mb-3" src="logo.png" alt="img" width="80" height="80">
                            <small style="margin-left:130px;"class="d-block mb-3 text-muted">&copy; 2020-2021</small>
                        </div>
                        <div class="col-6 col-md">
                            <h5 style="text-decoration:underline;">Features</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Cool stuff</a></li>
                                <li><a class="text-muted" href="#">Random feature</a></li>
                                <li><a class="text-muted" href="#">Team feature</a></li>
                                <li><a class="text-muted" href="#">Stuff for developers</a></li>
                                <li><a class="text-muted" href="#">Another one</a></li>
                                <li><a class="text-muted" href="#">Last time</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5 style="text-decoration:underline;">Resources</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Resource</a></li>
                                <li><a class="text-muted" href="#">Resource name</a></li>
                                <li><a class="text-muted" href="#">Another resource</a></li>
                                <li><a class="text-muted" href="#">Final resource</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5 style="text-decoration:underline;">About</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Team</a></li>
                                <li><a class="text-muted" href="#">Locations</a></li>
                                <li><a class="text-muted" href="#">Privacy</a></li>
                                <li><a class="text-muted" href="#">Terms</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5 style="text-decoration:underline;">Contact Us</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="text-muted" href="#">Code With @Jashan </a></li>
                                <li><a class="text-muted" href="#">Our Team</a></li>
                                <li><a class="text-muted" href="#">Website Guide</a></li>
                                <li><a class="text-muted" href="#">Others</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <p style="margin-right:190px;" class="float-right"><a href="#"><u>Back To Top</u></a></p>
                    <p style="margin-left:50px;">&copy 2020-2021 <u>Code With @jashan</u>, Inc.  <a href="#">Privacy</a></p>
                </footer>

                


            
        


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>