<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/custom.css">

    <title>OSMS</title>
</head>
<body>
      <!--Start Navigation  -->

       <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
         <a href="index.php" class="navbar-brand">OSMS </a>

         <span class="navbar-text">Customer's happiness is our aim</span>
         
         <button type="button"
         class="navbar-toggler"
         data-toggle="collapse" data-target="#myMenu">
           <span class="navbar-toggler-icon">

           </span>
        </button>

        <div class="collapse navbar-collapse " id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
            </ul>
        </div>

       </nav>


        
       <!-- End Navigation -->

       <!-- start header -->
     <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg);">

        <div class=" myclass mainHeading">

          <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OSMS</h1>
           <p class="font-italic">Customer's Happiness is our Aim</p>
           <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
           <a href="#registration"  class="btn btn-danger mr-4">Sign up</a>
        </div>

     </header>
         <!-- end header -->
       
          <div class="container">

          <div class="jumbotron">
              <h3 class="text-center">OSMS Services</h3>
              <p>
              OSMS Services is India’s leading chain of multi-brand Electronics and Electrical service
        workshops offering
        wide array of services. We focus on enhancing your uses experience by offering world-class
        Electronic
        Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care
        services to
        keep the devices fit and healthy and customers happy and smiling”.

        With well-equipped Electronic Appliances service centres and fully trained mechanics, we
        provide quality
        services with excellent packages that are designed to offer you great savings.

        Our state-of-art workshops are conveniently located in many cities across the country. Now you
        can book
        your service online by doing Registration.

              </p>
          </div>
          </div>


          <!-- start Services -->
          <div class="container text-center border-bottom" id="Services">
              <h2>Our Services</h2>

              <div class="row mt-4">

              <div class="col-sm-4 mb-4">
                  <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
                  <h4 class="mt-4">Electronic Appliances</h4>
              </div>
              <div class="col-sm-4 mb-4">
                  <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
                  <h4 class="mt-4">Preventive Maintenance</h4>
              </div>
              <div class="col-sm-4 mb-4">
                  <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
                  <h4 class="mt-4">Fault Repair</h4>
              </div>
              </div>
          </div>

          <!-- End Service Section -->

          <!-- Start Registration form -->
         
            <?php include('UserRegistration.php') ?>

          <!-- Form End -->

            <!-- Start Happpy Customer -->
            <div class="jumbotron bg-danger">
                 
              <div class="container">
                  <h2 class="text-center text-white">Happy Customers</h2>

                  <div class="row mt-5">
                      <div class="col-lg-3 col-sm-6">

                        <div class="card shadow-lg mb-2">

                        <div class="card-body text-center">
                            <img src="images/avtar1.jpeg" alt="" class="img-fluid" style="border-radius:100px;">
                            <h4 class="card-title">Rahul Kumari</h4>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis rem earum labore optio tempore, sapiente totam eos doloribus voluptas nostrum.</p>


                        </div>
                        </div>

                      </div>


                      <div class="col-lg-3 col-sm-6">

<div class="card shadow-lg mb-2">

<div class="card-body text-center">
    <img src="images/avtar2.jpeg" alt="" class="img-fluid" style="border-radius:100px;">
    <h4 class="card-title">Rooh khan</h4>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis rem earum labore optio tempore, sapiente totam eos doloribus voluptas nostrum.</p>


</div>
</div>

</div>


<div class="col-lg-3 col-sm-6">

<div class="card shadow-lg mb-2">

<div class="card-body text-center">
    <img src="images/avtar3.jpeg" alt="" class="img-fluid" style="border-radius:100px;">
    <h4 class="card-title">Jordan</h4>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis rem earum labore optio tempore, sapiente totam eos doloribus voluptas nostrum.</p>


</div>
</div>

</div>



<div class="col-lg-3 col-sm-6">

<div class="card shadow-lg mb-2">

<div class="card-body text-center">
    <img src="images/avtar4.jpeg" alt="" class="img-fluid" style="border-radius:100px;">
    <h4 class="card-title">Basanti</h4>
    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis rem earum labore optio tempore, sapiente totam eos doloribus voluptas nostrum.</p>


</div>
</div>

</div>

                  

                  </div>
              </div>
               
            </div>

         
            <!-- Contact us -->

            <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

    

      <?php include('contactform.php')  ?>

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        OSMS Pvt Ltd, <br>
        Sec IV, Bokaro <br>
        Jharkhand - 834005 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.osms.com</a> <br>

        <br><br>
        <strong>Delhi Branch:</strong> <br>
        OSMS Pvt Ltd, <br>
        Ashok Nagar, Delhi <br>
        Delhi - 804002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.osms.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div>

      <!-- Footer -->
      <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Someone &copy; 2018.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->





       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.min.js"></script>
</body>
</html>