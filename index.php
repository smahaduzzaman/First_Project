<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "css/style.css" type = "text/css">
  <title>A Portfolio Website</title>
</head>
<body>
<?php include 'menu.php';?>

<div id="demo" class="carousel slide mt-0.5" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/church.jpg" alt="church" width="100%" height="100%">
      <!-- <div class="d-inline">
        <h4>Web Design</h4>
        <p>Web Design with HTML, CSS, Javascript, Bootstrap, JQuery and React</p>
      </div> -->
    </div>
    <div class="carousel-item">
      <img src="images/web-design.jpg" alt="web-design" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="images/cat.jpg" alt="cat" width="100%" height="100%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5 ">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
     <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
        <img class="img-fluid aboutimage" src="images/purse.jpg" alt="Poppy" width="100%" height="100%">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="pl-2">I am S M Ahaduzzaman</h2>
            <p class="pl-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Unde totam beatae corporis repellat minus laborum aspernatur 
                ipsum laboriosam nihil. Nemo, laudantium? Itaque voluptates 
                cum totam voluptatum ducimus, ipsa iusto suscipit! Lorem ipsum 
                dolor sit amet consectetur adipisicing elit. 
                Unde totam beatae corporis repellat minus laborum aspernatur 
                ipsum laboriosam nihil. Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. 
                Unde totam beatae corporis repellat minus laborum aspernatur 
                ipsum laboriosam nihil. Nemo, laudantium? Itaque voluptates 
                cum totam voluptatum ducimus, ipsa iusto suscipit! Lorem ipsum 
                dolor sit amet consectetur adipisicing elit. 
                Unde totam beatae corporis repellat minus laborum aspernatur 
                ipsum laboriosam nihil.</p>
            <a class="btn btn-success" href="about.php">More Information</a>
        </div>
    </div>
    </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div col-lg-4 col-md-4 col-12>
      <div class="card" style="width:400px">
       <img class="card-img-top" src="images/church.jpg" alt="Card image">
        <div class="card-body">
         <h4 class="card-title">The Scene of Sunset</h4>
        <p class="card-text">A beauty of nature</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>
      <div col-lg-4 col-md-4 col-12>
      <div class="card" style="width:400px">
       <img class="card-img-top" src="images/girl.jpg" alt="Card image">
        <div class="card-body">
         <h4 class="card-title">The Scene of Sunset</h4>
        <p class="card-text">A beauty of nature</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>
      <div col-lg-4 col-md-4 col-12>
      <div class="card" style="width:400px">
       <img class="card-img-top" src="images/ux.jpg" alt="Card image">
        <div class="card-body">
         <h4 class="card-title">The Scene of Sunset</h4>
        <p class="card-text">A beauty of nature</p>
        <a href="#" class="btn btn-success">See Profile</a>
  </div>
</div>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Image Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/kingfisher.jpg" class="img-fluid pb-y" alt="kingfisher">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/technology.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/cat.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/sitemap.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/girl.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/sunset.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/sitemap.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/web-design.jpg" class="img-fluid pb-y" alt="">
      </div>
      <div class="col-lg-4 col-md-4 col-12 pt-4">
        <img src="images/butterfly.jpg" class="img-fluid pb-y" alt="">
      </div>
    </div>
  </div>
</section>

<section class="my-5 w-50 m-auto">
  <div class="py-5">
    <h2 class="text-center">Please fill out the form bellow</h2>
  </div>
    <div>
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <lebel>User Name</lebel>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lebel>Email id</lebel>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lebel>Mobile No</lebel>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <lebel>Comments</lebel>
          <textarea name="comment" id="" class="form-control" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
</section> 
<footer>
  <p class="p-3 bg-dark text-white mt-4 text-center">Copyright @ 2021 by Arisha Protichi. All Rights Reserved. <br> info@arishaprotichi.com</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>