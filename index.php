<!DOCTYPE html>

<head>
    <title>DCA Flights</title>
        <!-- Font Awesome -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<script type="text/javascript">
       $(function () {
           $("#depdate-picker").datepicker({
               dateFormat: 'dd-M-yy'
           });

       });

       $(function () {
           $("#arrdate-picker").datepicker({
               dateFormat: 'dd-M-yy'
           });

       });
   </script>
</head>
<body>
</body>
<!--body begins here-->
<!--Navbar -->
<nav class="mb-0 navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top">
  <a class="navbar-brand" href="#">DCA Flights</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          Trips
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          Sign-in
           <i class="fas fa-user"></i>
         </a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->
<div class="jumbotron card card-image mt-0 mb-0" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg); background-size: cover; background-repeat: non-repeat; ">
  <div class="text-white text-center py-5 px-4">
    <div>
      <h2 class="card-title h1-responsivefont-bold"><strong>Welcome to Flight Central by the D.C. Chapter</strong></h2>
      <p class="mx-5 mb-5">D.C. Flights® is aware that government mandates have resulted in restrictions on air travel due to the ongoing coronavirus (COVID-19) outbreak. Unfortunately, many of the restrictions will result in flight cancellations, potential quarantines upon arrival, and/or temperature checks upon landing, and we sincerely regret any inconvenience created by the travel disruptions.
      </p>
      <a class="btn btn-outline-white btn-md"><i class="fas fa-clone left"></i> View Flights</a>
    </div>
  </div>
</div>
</div>
<!-- start of flight searches-->
<div class="container">
<!-- Extended material form grid -->
<form>
  <!-- Grid row -->
  <div class="form-row">
    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputDepart" name="departing">
        <label for="inputDepart">Departing</label>
      </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->
      <div class="md-form form-group">
        <input type="text" class="form-control" id="inputArrival" name="arriving" >
        <label for="inputArrival">Arrival</label>
      </div>
    </div>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->

  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6">
      <!-- Material input -->

        <div id="date-picker-example" class="md-form md-outline input-with-post-icon " inline="true">
          <input type="text" id="depdate-picker" class="form-control date-picker" placeholder="Departure Date">
          <label for="example"></label>
          <i class="fas fa-calendar input-prefix"></i>
        </div>
      </div>
      <div class="col-md-6">
          <div class="md-form form-group">
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon " inline="true">
              <input type="text" id="arrdate-picker" class="form-control date-picker" placeholder="Arrival Date">
              <label for="example"></label>
              <i class="fas fa-calendar input-prefix"></i>
            </div>
          </div>
      </div>
  <!-- Grid row -->
    <!-- Grid column -->
  <!-- Grid row -->
  <button type="submit" class="btn btn-primary btn-md">Search</button>
</form>
<!-- Extended material form grid -->
</div>

<!-- Grid row -->
  </div>
  <div class="jumbotron card card-image mt-5 mb-0" style="background-color: #ededed;">
    <!-- Grid row -->
    <div class="container">
        <div class="row">

          <!-- Grid column -->
          <div class="col-xl-4 col-md-4 mb-3 ">

            <img src="imgs/vegas.jpg" class="z-depth-1 imgs p-3"
              alt="Las Vegas ">

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-5 col-md-4 mb-3 text-center">

            <img src="imgs/miami.jpg" class=" z-depth-1 imgs  p-3"
              alt="Miami, Florida">

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-xl-3 col-md-4 mb-3 text-right ">

            <img src="imgs/atlanta.jpg" class="z-depth-1 imgs p-3" alt="Responsive image">

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
          </div>
        </div>
        <!--Start of footer-->
        <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> DC Chapter Flights</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</html>
