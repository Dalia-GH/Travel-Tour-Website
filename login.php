<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

     <style>
     body { font-family: Arial, sans-serif; margin: 0; padding: 50px; background-color:rgb(171, 171, 187); }
        .container { width: 300px; margin: auto; padding: 20px; background: #fff; border-radius: 8px; }
        h1 { text-align: center; }
        form div { margin-bottom: 15px; }
        input[type="text"], input[type="password"], button {
            width: 100%; padding: 10px; margin-top: 5px; 
            border: 1px solid #ccc; border-radius: 4px;
        }
        button { cursor: pointer; background-color: #ffa500 ; color: #fff; border: none; }
        .error { color: red; font-size: 0.9em; text-align: center; }
        </style>
           <!-- Bootstrap Link -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
     <link rel="stylesheet" href="main.css">
</head>
<body>
    
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>T</span>ravel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
             
            </ul>
        
          </div>
        </div>
      </nav>
    <!-- Navbar End -->

 
    <!-- Home Section Start -->
    <div class="home">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, nisi.</p>
            <a href="#book">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->



<div class="container" id="login">
        <h1>Login</h1>
        
        <?php if (isset($_GET['error'])): ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php endif; ?>
        
        <form action="handle/login.php" method="POST">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            
            <button type="submit">Login</button>
        </form>

        <p style="text-align: center; margin-top: 10px;">
            Don't have an account? <a href="register.php">Register here</a>.
        </p>
        
    </div>



  <!-- Section Packages Start -->
  <section class="packages" id="packages">
    <div class="container">
      
      <div class="main-txt">
        <h1><span>P</span>ackages</h1>
      </div>

      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/uk.png" alt="">
            <div class="card-body">
              <h3>United Kingdom</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/france.png" alt="">
            <div class="card-body">
              <h3>France</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/pakistan.png" alt="">
            <div class="card-body">
              <h3>Pakistan</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>



      </div>



      <div class="row" style="margin-top: 30px;">

        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/italy.png" alt="">
            <div class="card-body">
              <h3>Italy</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/india.png" alt="">
            <div class="card-body">
              <h3>India</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>
        <div class="col-md-4 py-3 py-md-0">

          <div class="card">
            <img src="./images/us.png" alt="">
            <div class="card-body">
              <h3>United States</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, doloribus!</p>
              <div class="star">
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star checked"></i>
                <i class="fa-solid fa-star "></i>
                <i class="fa-solid fa-star "></i>
              </div>
              <h6>Price: <strong>$500</strong></h6>
              <a href="#book">Book Now</a>
            </div>
          </div>

        </div>



      </div>


    </div>
  </section>
  <!-- Section Packages End -->



  <!-- Section Gallary Start -->
  <section class="gallary" id="gallary">
    <div class="container">

      <div class="main-txt">
        <h1><span>G</span>allary</h1>
      </div>

      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g1.png" alt="" height="230px">
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g2.png" alt="" height="230px">
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g3.png" alt="" height="230px">
          </div>
        </div>
      </div>


      <div class="row" style="margin-top: 30px;">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g4.png" alt="" height="230px">
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g5.png" alt="" height="230px">
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img src="./images/g6.png" alt="" height="230px">
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Section Gallary End -->


  <!-- About Start -->
  <section class="about" id="about">
    <div class="container">

      <div class="main-txt">
        <h1>About <span>Us</span></h1>
      </div>

      <div class="row" style="margin-top: 50px;">

        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./images/about-img.png" alt="">
          </div>
        </div>

        <div class="col-md-6 py-3 py-md-0">
          <h2>How Travel Agency Work</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident perferendis dolorem, numquam earum at nam beatae voluptate natus consectetur facere, saepe cupiditate ut exercitationem deserunt, facilis quam perspiciatis autem iure illo harum minima. Quas, vitae aperiam laudantium alias asperiores nulla rerum, nihil eveniet perferendis sint illum accusamus officiis aliquam nam.</p>
          <button id="about-btn">Read More...</button>
        </div>

      </div>

    </div>
  </section>
  <!-- About End -->




 







 
</body>
</html>
