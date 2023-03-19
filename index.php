<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type =  "text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
</head>
<body>

  <style>
    .navbar {
        height: 150px; /* Increase the height of the navbar to 80px */
        background-color: red; /* Change the background color of the navbar to red */
    }
    .navbar-nav {
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .nav-link {
        font-size: 24px; /* Increase the font size of the links to 24px */
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AIDE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contect.php">Contect Us</a>
      </li>
    </ul>
  </div>
</nav>



  <!-- <style>
    .navbar {
        height: 80px; /* Increase the height of the navbar to 80px */
        background-color: red; /* Change the background color of the navbar to red */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AIDE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contect Us</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  <!-- </div>
</nav>  -->

  <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AIDE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="events.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contect Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <!-- <div class="carousel-item active">
      <img src="images/i2.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div> -->
    <!-- <div id="myCarousel" class="carousel slide" data-ride="carousel"> -->
		<!-- Indicators -->
		<ul class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ul>

		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<video autoplay loop muted class="d-block w-100">
					<source src="images/School of AI & Data Science at IIT Jodhpur - Inaugurated by Prof. Geoffrey Hinton.mp4" type="video/mp4">
				</video>
			</div>
			
		<!-- Left and right controls -->
		<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
    <!-- <div class="carousel-item">
      <img src="images/i1.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div> -->

    <!-- <div class="carousel-item">
      <img src= "images/i1.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div> -->
    
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- <section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Team<h2>
  </div>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-lg-6 col-md-6 col-12">
        <img src="images/sirH.jpeg" class = "img-fluid aboutimg">
      </div>
      <div class = "col-lg-6 col-md-6 col-12">
        <h2 class = "display-4">Dr.Shantanu choudary</h2>
        <p class = "py-3">Head OF Department</p>
        <a href = "about.php class = "btn btn-success> Check More</a>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class = "my-5"> -->
  <!-- <div class="py-5">
    <h2 class="text-center">Team<h2>
  </div> -->
  <!-- <div class = "container-fluid">
    <div class = "row">
      <div class = "col-lg-6 col-md-6 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid aboutimg">
      </div>
      <div class = "col-lg-6 col-md-6 col-12">
        <h2 class = "display-4">Aayush Abrol</h2>
        <p class = "py-3"> Department Secretary</p>
        <a href = "about.php class = "btn btn-success> Check More</a>
      </div>
    </div>
  </div>
</section>



<section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Faculty<h2>
  </div>

  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/Jainsir.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Prof. Neeraj Jain</h4>
    <p class="card-text">Head.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>

      <div class = "col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/WhatsApp Image 2023-03-18 at 17.16.52.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Richa Singh</h4>
    <p class="card-text">Department Secretary.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>

      <div class = "col-lg-4 col-md-4 col-12">
        <div class="card" >
  <img class="card-img-top" src="images/WhatsApp Image 2023-03-18 at 17.08.27.jpeg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Dr. Dipanjan Roy</h4>
    <p class="card-text">Chairman.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
      </div>
    </div>
  </div>

</section>


<section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Team Members<h2>
  </div>
  <div class = "container-fluid">
    <div class = "row">
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>

      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      <div class = "col-lg-4 col-md-4 col-12">
        <img src="images/abrol.jpeg" class = "img-fluid pb-3">
      </div>
      
    </div>
  </div>
</section> -->


<!-- <section class = "my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us<h2>
  </div>
   <div class = "w-50 m-auto" >
    <form action = "userinfo.php" method="post">
      <div class = "form-group">
        <label>Username</label>
        <input type = "text" name = "user" autocomplete="off" class = "form-control">
      </div>

      <div class = "form-group">
        <label>Email</label>
        <input type = "text" name = "user" autocomplete="off" class = "form-control">
      </div>

      <div class = "form-group">
        <label>Phone Number</label>
        <input type = "text" name = "mobile" autocomplete="off" class = "form-control">
      </div>

      <div class = "form-group">
        <label>Comments</label>
        <textarea class= "form-control">
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </div> -->






    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AIDE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contect Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">AIDE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contect Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav> -->

<!-- 
<footer class="bg-light py-3 animated">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h4>About Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo lorem nulla, non feugiat risus sodales quis. Sed aliquet, nunc vel consequat iaculis, enim dolor posuere enim, quis hendrerit nibh elit eu elit.</p>
      </div>
      <div class="col-md-4">
        <h4>Latest Posts</h4>
        <ul class="list-unstyled">
          <li><a href="#">Post Title One</a></li>
          <li><a href="#">Post Title Two</a></li>
          <li><a href="#">Post Title Three</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Stay Connected</h4>
        <p>Follow us on social media:</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p>Subscribe to our newsletter:</p>
        <form>
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-12 text-center">
        <p>&copy; <?php #echo date("Y"); ?> Your Company. All rights reserved.</p> -->
      <!-- </div>
    </div>
    
  

  </div>
</footer>  -->



<!-- <footer class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>Contact Us</h4>
        <p>
          123 Main Street<br>
          New York, NY 10001<br>
          Phone: (123) 456-7890<br>
          Email: info@example.com
        </p>
      </div>
      <div class="col-md-6">
        <h4>Stay Connected</h4>
        <p>Follow us on social media:</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer> -->

  <!-- footer section start
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <a href="index.html"><img src="https://logo-download.com/wp-content/data/images/2021/08/Levi_Strauss__Co.-Logo.png" alt="" class="img-fluid logo-footer"></a>
                      <div class="footer-about">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  </p>
                      </div>

          </div>
          <div class="col-md-3">
            <div class="useful-link">
              <h2>Useful Links</h2>
              <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
              <div class="use-links">
                <li><a href="index.html"><i class="fa-solid fa-angles-right"></i> Home</a></li>
                <li><a href="about.html"><i class="fa-solid fa-angles-right"></i> About Us</a></li>
                <li><a href="gallery.html"><i class="fa-solid fa-angles-right"></i> Gallery</a></li>
                <li><a href="contact.html"><i class="fa-solid fa-angles-right"></i> Contact</a></li>
              </div>
            </div>

          </div>
                    <div class="col-md-3">
                        <div class="social-links">
              <h2>Follow Us</h2>
              <img src="./assets/images/about/home_line.png" alt="">
              <div class="social-icons">
                <li><a href=""><i class="fa-brands fa-facebook-f"></i> Facebook</a></li>
                <li><a href=""><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                <li><a href=""><i class="fa-brands fa-linkedin-in"></i> Linkedin</a></li>
              </div>
            </div>
                    

                    </div>
          <div class="col-md-3">
            <div class="address">
              <h2>Address</h2>
              <img src="./assets/images/about/home_line.png" alt="" class="img-fluid">
              <div class="address-links">
                <li class="address1"><i class="fa-solid fa-location-dot"></i> Kolathur ramankulam-
                  Malappuram Dt 
                   Kerala 679338</li>
                   <li><a href=""><i class="fa-solid fa-phone"></i> +91 90904500112</a></li>
                   <li><a href=""><i class="fa-solid fa-envelope"></i> mail@1234567.com</a></li>
              </div>
            </div>
          </div>
                  
        </div>
      </div>

    </footer> -->
    <!-- footer section end -->
    <!-- footer copy right section start -->



    <!-- <section id="copy-right">
      <div class="copy-right-sec"><i class="fa-solid fa-copyright"></i>  
        lorem ispum lorem ispum 2022 Powerd By <a href="#">lorem ispum</a> 


      </div>

    </section> -->
    <!-- footer copy 
    right section end -->

  <!-- <html>

<body>
  <footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2023 Nadine Coelho | All Rights Reserved</p>
  </footer> -->
  <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->

    <!-- <h1> Jai shree krishna </h1> -->


    <!-- <footer class="text-gray-100 bg-gray-100 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Tailblocks</span>
    </a>
    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
      <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-400">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-100">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-100">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-400">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer> -->
<!-- 
<footer class="bg-gray-100">
  <div class="container px-5 py-8 mx-auto flex flex-wrap justify-between items-center">
    <a class="flex items-center font-medium text-white mb-4 md:mb-0" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12 p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Tailblocks</span>
    </a>
    <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">
      © 2023 Tailblocks Inc. All Rights Reserved.
    </p>
    <div class="flex items-center justify-center sm:justify-end mt-4 sm:mt-0">
      <a class="text-gray-400 hover:text-gray-500 mr-4" href="#">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="text-gray-400 hover:text-gray-500 mr-4" href="#">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="text-gray-400 hover:text-gray-500 mr-4" href="#">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          <path d="M17.25 18.963a7.5 7.5 0 01-14.5 0"></path>
        </svg>
      </a>

        <a class="text-gray-400 hover:text-gray-500" href="#">
    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
      <path d="M22.368 4.334a10.46 10.46 0 01-2.996.822 5.258 5.258 0 002.295-2.894 10.53 10.53 0 01-3.33 1.275 5.233 5.233 0 00-8.918 3c0 .412.048.817.142 1.209a14.912 14.912 0 01-10.835-5.483 5.234 5.234 0 001.617 6.987 5.22 5.22 0 01-2.374-.654v.066a5.233 5.233 0 004.195 5.121 5.204 5.204 0 01-2.365.089 5.238 5.238 0 004.881 3.63 10.51 10.51 0 01-6.139 2.03c-.398 0-.792-.023-1.182-.07a14.92 14.92 0 008.099 2.371c9 0 13.91-7.445 13.91-13.91 0-.211-.006-.422-.014-.632a9.92 9.92 0 002.44-2.542z"></path>
    </svg>
  </a>
</div>
</div>
</footer> -->


    <!-- <div class="content">
      <div class="top"> -->
        <!-- <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">CodingLab</span>
        </div> -->
        <!-- <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">App design</a></li>
          <li><a href="#">Web design</a></li>
          <li><a href="#">Logo design</a></li>
          <li><a href="#">Banner design</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Courses</li>
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Photography</a></li>
          <li><a href="#">Photoshop</a></li>
        </ul>
         <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul> -->
      <!-- </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2021 <a href="#">CodingLab.</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer> -->





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>




	

