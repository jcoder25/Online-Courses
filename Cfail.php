<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> Try Different Name or Email Address...Please check Your Contact No. 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>



                <!-- Navbar ... -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href=""><img src="logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                <a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Topics
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"></a>
                    <a class="dropdown-item" href="#">Courses</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Learn C/C++ ,C# </a>
                    <a class="dropdown-item" href="#">Learn Java Core </a>
                    <a class="dropdown-item" href="#">Learn Python,djanGo </a>
                    <a class="dropdown-item" href="#">Learn Html,CSS,Js,Jq </a>
                </div>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="contact.html"> Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            </div>
        </nav>
        <!-- heading -->
        <h1 style="text-decoration: underline;" class="mx-2 my-3 ">Contact Us !</h1><br><br>

        <!-- Form -->
        <form class="mx-4" method="post" action="contact.php">
            <div class="form-group">
            <label for="exampleFormControlInput1">Full Name</label>
            <input type="name" name="fullname" class="form-control" id="exampleFormControlInput1" required
                placeholder="What's Your Good Name ? ">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Email Address</label>
            <input type="email" name="emailadd" class="form-control" id="exampleFormControlInput1" required placeholder="name@example.com">
            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Contact No</label>
            <input type="number" name="contact"  class="form-control" required id="exampleFormControlInput1"
                placeholder="Enter your phone no">
            </div>
            <div class="form-group">
            <label for="exampleFormControlSelect1">Ask Your Query Related To</label>
            <select name="select" class="form-control" id="exampleFormControlSelect1">
                <option>Select</option>
                <option>Web Development</option>
                <option>Android</option>
                <option>Designing</option>
                <option>Coding</option>
                <option>Others</option>
            </select>
            </div>


            <div class="form-group">
            <label for="exampleFormControlTextarea1">Write your doubts/issues/questions Here... </label>
            <textarea name="QA" class="form-control" id="exampleFormControlTextarea1"
                placeholder="We'll Try to reply you as soon as possible !" rows="3"></textarea>
            </div>


            <div class="form-group">
            <label for="exampleFormControlSelect1">Country</label>
            <select  name="country" class="form-control" id="exampleFormControlSelect1">
                <option>Select</option>
                <option>India(+91)</option>
                <option>Others</option>
                <option></option>
                <option></option>
                <option></option>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleFormControlTextarea1">How You Feel !!! Pls Give Feedback </label>
            <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1"
                placeholder="Your feedback always work as a catalyst to give this website a better look and a better content... "
                rows="3"></textarea>
            </div>

            <button type="submit" name="submit" onclick="contact.php" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>



        </form>


        <footer class="container">
            <p class="float-right"><a href="#"><u>Back To Top</u></a></p>
            <p>&copy 2020-2021 <u>Code With @jashan</u>, Inc ...<a href="#">Privacy</a></p>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>



    </body>
</html>