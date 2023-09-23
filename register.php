
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="icon" href="./pictures/E_Gabay.png" type="image/x-icon"/> 
    <link rel="stylesheet" href="./css_for_all/register.css">
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>E-Gabay</title>
    <style>
       
    
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./pictures/Egabay logo text.png" alt="E-Gabay" width="100px" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ins.php">Instruction</a>
                </li>
                <div id="google_translate_element"></div>

            </ul>
        </div>
    </div>
    
</nav>

<div class="container">
<form method="POST" action="reg.php" enctype="multipart/form-data">
        <h3>REGISTER FORM</h3>
        <div class="row">
            <!-- Left column -->
            <div class="column">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Enter Username" id="username" required>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" placeholder="First Name" id="firstname">
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename" placeholder="Middle Initial" id="middlename">
                </div>
                <div class="form-group">
                    <label for="adress">Address</label>
                    <input type="text" name="address" placeholder="Enter Address" id="address">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="password-input-wrapper">
                        <input type="password" name="password" placeholder="Enter Password" id="password" required>
                        <!-- Add JavaScript to toggle password visibility if desired -->
                    </div>
                </div>
            </div>
            <!-- Right column -->
            <div class="column">
                <div class="form-group">
                    <label for="bday">Birthday</label>
                    <input type="date" name="bday" placeholder="Birthday" id="bday">
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" placeholder="Last Name" id="lastname">
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" name="gender" placeholder="Gender" id="gender">
                </div>
                <div class="form-group">
                    <label for="disabilities">Type of Disabilities</label>
                    <input type="text" name="disabilities" placeholder="Disabilities" id="disabilities">
                </div>
                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <input type="file" name="photo" accept="image/*" id="photo">
                    <!-- Add JavaScript to preview the selected photo if desired -->
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" name="submit">REGISTER</button>
        </div>
    </form>


        <div class="social">
            <!-- Add your social login buttons here -->
        </div>
        <div class="container">
            <p>Have an account? <a href="finallogin.html">Login here</a></p>
        </div>
    </form>
</div>
  <!-- Site footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
            <h6>About</h6>
              <p class="text-justify">We are E-Gabay, a Non-Profit Organization dedicated to helping all Persons with Disabilities in the First District of Albay.</p>

              <p class="text-justify">We are committed to making a positive impact by offering:</p>
              
              <ul>
                  <li>Job opportunities and career guidance tailored to the unique needs of PWDs.</li>
                  <li>Accessible and inclusive educational resources to help PWDs access quality learning materials.</li>
                  <li>Information on government and non-profit programs, including financial assistance and support services available for PWDs.</li>
                  <li>A platform for connecting PWDs with a supportive community and a network of like-minded individuals.</li>
                  <li>Regular updates, news, and events related to the PWD community in the First District of Albay.</li>
              </ul>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links">
            <li><a href="userhome.html">Education</a></li>
            <li><a href="userhome.html">Job</a></li>
            <li><a href="userhome.html">Beneficiaries</a></li>
          </ul>
        </div>

        <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">About E-GABAy</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">FAQs</a></li>
              <li><a href="http://scanfcode.com/sitemap/">VMGO</a></li>
              <li><a href="http://scanfcode.com/sitemap/">E-GABAY TEAM</a></li>
            </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
       <a href="#">E-GABAY</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a class="github" href="#"><i class="fab fa-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
    </script>
</body>
</html>