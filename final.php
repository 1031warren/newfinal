<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <ul>
    <li><a href="json.php">Users</a></li>
    <li><a href="about.php">Info</a></li>
    </ul>
    
</head>
<body>
<link rel="stylesheet" href="style.css">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!--line 23-44 I am creating my categories and what I want them to display-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
    
  </div>
</nav>
<!--Here I have my slides--> 
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="architecture_4.jpg" class="d-block w-100" alt="Architecture" >
      <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img src="nature_4.jpg" class="d-block w-100" alt="Nature" >
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
        </div>
    </div>
    <div class="carousel-item">
      <img src="travel_4.jpg" class="d-block w-100" alt="Travel" >
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
        </div>
    </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature</h2>
    </div>
    
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="nature_1.jpg" class="d-block w-100">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="nature_2.jpg" class="d-block w-100">
    </div>
     <div class="col-lg-4 col-md-4 col-12">
        <img src="nature_3.jpg" class="d-block w-100">
    </div>
    </div>
    </div>
</section>
</a>

<a id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Architecture</h2>
    </div>
    
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="architecture_1.jpg" class="d-block w-100">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="architecture_2.jpg" class="d-block w-100">
    </div>
     <div class="col-lg-4 col-md-4 col-12">
        <img src="architecture_3.jpg" class="d-block w-100">
    </div>
    </div>
    </div>
</section>
</a>

<a id="travel">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Travel</h2>
    </div>
    
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="travel_1.jpg" class="d-block w-100">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="travel_2.jpg" class="d-block w-100">
    </div>
     <div class="col-lg-4 col-md-4 col-12">
        <img src="travel_3.jpg" class="d-block w-100">
    </div>
    </div>
    </div>
</section>
</a>
<!--line 152-173 provide a means of contact-->
<a id="contact">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>
    
    <div class="w-50 m-auto">
        <form action="about.php" method="post">
            <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
         <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
         <div class="form-group">
            <label>password:</label>
            <input type="text" name="password" class="form-control">
        </div>
        <button type="submit" class="btn btn=success">Submit</button>
     </form>
  </div>
</section>
</a>

<!--the overall goal of the page-->
<a id="about">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">About</h2>
    </div>
    <div class="container-fluid">
    <h3 class="text-center">My name is Adam Warren</h3> <br>
    <p class="text-center"><b>I am an Honor Student at UAT, currently working on my majors in Computer Science, Artificial Intelligence and Robotics. For computer Science I have a sample of a blogging website I've been working on that talks about Nature, Travel and Architecture.</b></p>
    </div>
    
    
    
</section>
</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/poppe.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
