<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

   
  <nav class="navbar  navbar-light " style="background-color: #FFF;>
  <a class="navbar-brand" href="#"><span class="logo"> St. John School </span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="main.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="view.php">View My Score</a>
      
    </div>
  </div>
</nav>
    <section class="container">
      <header><H1> Student Grade Form</header>
      <form action="data.php" class="form" method="post">
        <div class="input-box">
          <label>First Name</label>
          <input type="text" placeholder="Enter full name" name="fname" required/>
        </div>

        <div class="input-box">
          <label>Last Name</label>
          <input type="text" placeholder="Enter email address" name="lname" required />
        </div>
        

        <div class="column">
          <div class="input-box">
            <label>RollNo</label>
            <input type="text" placeholder="Enter phone number" name="rollno" required />
          </div>
          <div class="input-box">
            <label>Email</label>
            <input type="email" placeholder="Your Email here" name="email" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Enter Physics Marks</label>
            <input type="number" placeholder="Your Physics Marks " name="pmark" required  />
          </div>
          <div class="input-box">
            <label>Enter Chemistry marks</label>
            <input type="number" placeholder="Your Chemistry marks" name="cmark" required />
          </div>
        </div>
        <div class="column">
          <div class="input-box">
            <label>Enter Mathematic marks</label>
            <input type="number" placeholder="Your Mathematic marks" name="mmark" required  />
          </div>
          <div class="input-box">
            <label>Enter Biology marks</label>
            <input type="number" placeholder="Your  Biology marks" name="bmark" required />
          </div>
        </div>
        
       
       
        <input type="submit" name="Submit" value="Submit Marks" class="button">
        
      </form>
    </section>

    <div class="footer">
                 
                <div class="row">                       
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single_footer">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="view.php">View My Marks</a></li>
                              
                            </ul>
                        </div>
                    </div><!--- END COL --> 
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Page Link</h4>
                            <ul>
                                <li><a href="view.php">View</a></li>
                                <li><a href="main.php">Home</a></li>
                                
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Subscribe today</h4>
                            <div class="signup_form">                           
                                <form action="#" class="subscribe">
                                    <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                    <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                                                
                    </div><!--- END COL -->         
                </div><!--- END ROW --> 
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <p class="copyright">Copyright © 2023 <a href="#">St. John School</a>.</p>
                    </div><!--- END COL -->                 
                </div><!--- END ROW -->                 
            </div><!--- END CONTAINER -->
        </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>