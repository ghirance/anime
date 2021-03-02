<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "transparent.js"></script>
    <script src= "script.js"></script>

<title>Anime Stop</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-light bg-dark fixed-top bg-company-red">

<!-- Collapse button -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav11"
    aria-controls="basicExampleNav11" aria-expanded="false" aria-label="Toggle navigation" style = "padding:0%;border:0px" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Logo -->
  <a class="navbar-brand mx-auto d-block" href="homepage.php">
    <img src="Figures/logos.png" height = "60" style= "padding-right:30px">
  </a>

  <!-- Links -->
  <div class="collapse navbar-collapse" id="basicExampleNav11">
    <!-- Right -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="homepage.php" class="nav-link waves-effect">
         Home
        </a>
      </li>
      <li class="nav-item">
        <a href="all-products.php" class="nav-link waves-effect">
         Shop
        </a>
      </li>
      <li class="nav-item">
        <a href="contact.php" class="nav-link waves-effect">
          Contact
        </a>
      </li>
      <li class="nav-item">
        <a href="login.php">
        <img src = "Figures/person_outline-24px.svg" style = "padding-top:5px">
        </a>
      </li>
      <li class="nav-item">
        <a href="#!" >
          <img src = "Figures/local_mall-24px.svg" style = "padding-top:5px">
      </li>
      <li class="nav-item">
        <a href="#!" >
          <img src = "Figures/search-24px.svg" style = "padding-top:5px">
        </a>
      </li>
    </ul>
  </div>
  <!-- Links End-->
</nav>
<!-- Navbar End-->
</div>

<!-- Content -->
<div class = "container-fluid" id = "style">
<div class = "row" style = "margin-top:15%;padding-top:30px;padding-bottom:15%" >
    <div class = "col-sm-6" style = "text-align:center;padding-top:30px;padding-left:300px">
        <img src = "Figures/kimono-4.jpg">
    </div>
    <div class = "col-sm-6">
        <div> <h2 style = "font-weight:bold" id = "h3a"> Tanjiro's Kimono </h2></div>
        <div>&nbsp;</div>
        <div> <h5 id = "h3a"><s>₱1499.00</s>&nbsp;&nbsp;&nbsp;₱1399.00</h5></div>
        <div>&nbsp;</div>
        <div class="quantity buttons_added">
        Qty: <br>
        <div class="quantity buttons_added">
          <input type="button" value="-" class="minus">
          <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
          <input type="button" value="+" class="plus">
        </div>
        </div>
        <div class="container">
    <button type="button" data-toggle="modal" data-target="#myModal">
      Add to Cart
    </button>

    <!-- The Modal -->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add to Cart</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              Your item is added to cart.
              <br>
              <br>
              <br>
              <br>
              Thank you and Enjoy your shopping.
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" data-dismiss="modal">Close</button>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Content End -->

<!-- 2ndFooter-->

<div class = "container" style = "padding-top:30px" align = "center">
<blockquote class="blockquote">
    <p>"Knowing what it feels to be in pain, is exactly why we try to be kind to others."</p>
    <footer class="blockquote-footer">Jiraiya from Naruto</footer>
  </blockquote>

</div>
<!-- 2ndFooter End -->

<!-- Footer -->
<footer class="bg-light text-white bg-company-red ">
  <div class="container py-5 ">
    <div class="row " >
      <div class="col-xl-3" id = "fontF"><a href = "homepage.php"><img src="Figures/logos.png" height = "60"></a></div>
      <div class="col-xl-3"></div>
      <div class="col-xl-3"></div>
      <div class="col-xl-3" id = "fontF" >Let's Keep In Touch
        <div>
          <a href = "#!"> <img src="Figures/fb.png" style = "height:24px"></a>
          <a href = "#!"> <img src="Figures/twt.png" style = "height:24px"></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<footer class="bg-light text-white">
  <div class="container-fluid py-3 ">
    <div class="row">
      <div class = "col-md-12" id = "fontF">©Villafranca and Carreon 2020</div>
    </div>
</footer>
<!-- Footer End -->
</body>
</html>
