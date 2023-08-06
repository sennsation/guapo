<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guapo von glatten Kiesel</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon_Dws_3.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="style/main.css" rel="stylesheet">
    <link href="style/min769px.css" rel="stylesheet">
    <link href="style/max768px.css" rel="stylesheet">
    <link href="style/max576px.css" rel="stylesheet">
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$yourName = $yourEmail = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["yourName"])) {
    $nameErr = "Name is required";
  } else {
    $yourName = test_input($_POST["yourName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$yourName)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["yourEmail"])) {
    $emailErr = "Email is required";
  } else {
    $yourEmail = test_input($_POST["yourEmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($yourEmail, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["yourMessage"])) {
    $yourMessage = "";
  } else {
    $yourMessage = test_input($_POST["yourMessage"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <nav class="navbar">
        <div class="container-fluid d-flex">
          <div class="col-12 navcontainer">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          <div class="col-12 collapse" id="navbarSupportedContent">
              <div class="containter">
                  <div class="row">
                    <div class="col-6">
                      <h3>About</h3>
                      <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact</a></li>
                      </ul>
                    </div>
                    <div class="col-6">
                      <h3>Adress</h3>
                      <p>Guapo von Glatten Kiesel<br>
                        Mainstreet XYZ<br>
                        15733 City<br>
                        Wonderland</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h3>Links</h3>
                      <ul>
                        <li><a href="https://www.kromfohrlaender-vom-glatten-kiesel.de/zucht/g-wurf-2022/" target="_blank">Parents and Sisters</a></li>
                        <li><a href="https://kromfohrlaender-club.ch/" target="_blank">Kromforländer</a></li>
                      </ul>
                    </div>
                    <div class="col-6">&nbsp;</div>
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <h3>Disclamer</h3>
                      <ul>
                        <li><a href="#">Imressum - coming soon</a></li>
                      </ul>
                    </div>
                    <div class="col-6">&nbsp;</div>
                  </div>
                </div>
          </div>
          <div class="col-12 navSocialMedia">
              <div class="container">
                <div class="row">
                  <div class="col socialMediaButtonContainter">
                    <a href="contact.html"><img src="assets/img/kontakt.png" class="socialMediaImage"></a>
                  </div>
                  <div class="col socialMediaButtonContainter">
                    <a href="https://www.instagram.com/ocanguapo/" target="_blank"><img src="assets/img/instagram.png" class="socialMediaImage"></a>
                  </div>
                  <div class="col socialMediaButtonContainter">
                    <a href="https://www.facebook.com/OcanGuapo" target="_blank"><img src="assets/img/facebook.png" class="socialMediaImage"></a>
                  </div>
                </div>
              </div>
          </div>
      </div>
      </div>
      </nav>
    <div class="container content">


        <div class="row fullScreen">
          <div class="col-sm-12 col-md-4 welcomeText">
            <div class="row">
              <div class="col-sm-12 col-md-12 pageLogo">
                  <a href="index.html"><img src="assets/img/guapo_logo_431a16_konturlinie.svg" width="250px" alt="Logo-Guapo von glatten Kiesel"></a>
              </div>
              <div class="col-sm-12 col-md-12 pageTitel">
                <h1>Contact</h1>
                  <p><b>Fell free to writ use a Message!</b></p>
              </div>
            </div>
            
           
          </div>
          <div class="col-sm-12 col-md-8 welcomeImage">
            <div class="welcomeImageBorder">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d172393.27236424532!2d8.938381355421427!3d47.535776354631736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aebb5c4777141%3A0x3e1078733e375edf!2sThurgau%2C%20Schweiz!5e0!3m2!1sde!2suk!4v1691269002245!5m2!1sde!2suk" width="100%" style="border:0; min-height: 100vh;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                      
                    </div>
                  </div>
                </div>
          
              </div>
            </div>
        </div>
        <div class="row inhaltAfterHeader">
          <div class="col-sm-12 col-md-12 paddingText">
            <div class="container my-5">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <h1 class="mb-3">Contact Us</h1>
                  <p>
                    This contact form is copied from: https://codepen.io/tutsplus/pen/qBxPXZZ
                    The basic PHP-code for sending the form is copied from: https://www.w3schools.com/php/php_form_complete.asp
                  </p>
                  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="row g-3">
                      <div class="col-md-12">
                        <label for="yourName" class="form-label">Your Name and Surname</label>
                        <input type="text" class="form-control" id="yourName" name="yourName" required>
                      </div>
                      <div class="col-md-6">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="yourEmail" name="yourEmail" required>
                      </div>
                      <div class="col-12">
                        <label for="yourMessage" class="form-label">Your Message</label>
                        <textarea class="form-control" id="yourMessage" name="yourMessage" rows="5" required></textarea>
                      </div>
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-6">
                            <button data-res="<?php echo $sum; ?>" type="submit" class="btn btn-dark w-100 fw-bold" >Send</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <?php
                      echo "<h2>Your Input:</h2>";
                      echo $Name;
                      echo "<br>";
                      echo $email;
                      echo "<br>";
                      echo $website;
                      echo "<br>";
                      echo $comment;
                      echo "<br>";
                      echo $gender;
                      ?>
                </div>
              </div>
            </div>
            
          </div>      
        </div>

        <div class="row moreContent">
          <div class="col-sm-12 col-md-12 paddingText">
            <h2 class="text-center">Adress</h2>
            <p class="text-center">Guapo von Glatten Kiesel<br>
              Mainstreet XYZ<br>
              15733 City<br>
              Wonderland</p>
          </div>
               
        </div>

        <br><br>
    </div>
    <!--- END of Page - because of Pageload -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>
</html>