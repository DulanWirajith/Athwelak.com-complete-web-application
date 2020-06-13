<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="../css/signup.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- link Google Material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- font awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <title>Sign Up</title>

</head>

<body>
  <nav class="navbar navbar-expand-md navbar-transparent">

      <a class="navbar-brand" href="../index.html">
          <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top"
              alt="">
          <b>අත්වැලක්</b><small>.com</small>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon span-toggle-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="../index.html"><b>ප්‍රධාන පිටුව</b> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="howtouse.html"><b>භාවිතා කරන්නේ කෙසේද?</b></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="login.php"><b>ඇතුල් වන්න</b></a>
              </li>
              <!-- <li class="nav-item">
                  <a class="nav-link" href="#"><b>අපි ගැන</b></a>
              </li> -->
              <li class="nav-item">
                  <a class="nav-link" href="../html/aboutus.html"><b>අප අමතන්න</b></a>
              </li>

          </ul>
      </div>
  </nav>

  <div class="container-fluid main-row">
    <div class="row">
      <div class="col-md-4 offset-md-4 main-div">

        <div class="row">
          <div class="col">
            <h3 class="mainName"> <b>අත්වැලක්</b><small>.lk</small><br>
              <div class="hr-sect"><small>ආයුබෝවන්!</small></div>
            </h3>
          </div>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="row bg-userName">
            <div class="col name-div">
              <div class="input-container">
                <i class="material-icons icon">
                  account_circle
                </i>
                <input type="text" placeholder="මුල් නම" class="userName form-control" required name="fName">
              </div>
            </div>
            <div class="col name-div bg-userName">
              <div class="input-container">
                <i class="material-icons icon">
                  account_circle
                </i>
                <input type="text" placeholder="අවසන් නම" class="userName form-control email" required name="lName">
              </div>
            </div>
          </div>
          <div class="row bg-userName">
            <div class="col name-div">
              <div class="input-container-email">
                <i class="material-icons icon">
                  email
                </i>
                <input type="email" placeholder="විද්යුත් තැපෑල" class="userName form-control" required name="email">
              </div>
            </div>
          </div>

          <div class="row bg-userName">
            <div class="col name-div">
              <div class="input-container-email">
                <i class="material-icons icon">
                  phone
                </i>
                <input type="text" placeholder="දුරකථන අංකය" class="userName form-control" required name="phone">
              </div>
            </div>
          </div>
          <div class="row bg-userName">
            <div class="col name-div">
              <div class="input-container-email">
                <i class="material-icons icon">lock</i>
                <input type="password" placeholder="මුරපදය" class="userPassword form-control" required name="password">
              </div>
            </div>
          </div>

          <div class="row bg-userName">
            <div class="col name-div">
              <div class="input-container-email">
                <i class="material-icons icon">lock</i>
                <input type="password" placeholder="මුරපදය තහවුරු කරන්න" class="userPassword form-control" required name="passwordConfirm">
              </div>
            </div>
          </div>

          <div class="row bg-userName">
            <div class="hr-sect">
              <h5><small>ආරක්ෂක ප්රශ්නයක් ගොඩනගා ගන්න</small></h5>
            </div>
          </div>
          <div class="row bg-userName ">
            <div class="col">
              <div class="row">
                <div class="col form-group input-container-email">
                  <i class="material-icons icon ">security</i>
                  <select name="secQuestion" id="secuirityQuestion" class="select-secuirity form-control">
                    <option value="option-One">What was your childhood nickname?</option>
                    <option value="option-Two">In what city or town did your mother and
                      father
                      meet?</option>
                    <option value="option-Three">What is your favorite movie?</option>
                    <option value="option-Four">What is the first name of the boy/girl that
                      you
                      first kissed?</option>
                    <option value="option-Five">Who is your childhood sports hero?</option>
                    <option value="option-Six">What was the last name of your third grade
                      teacher?</option>
                    <option value="option-Seven">In what town was your first job?</option>
                  </select>
                </div>
              </div>

              <div class="row bg-userName">
                <div class="col input-container-email ">
                  <i class="material-icons icon">question_answer</i>
                  <input type="text" placeholder="ඔබගේ පිළිතුර ඇතුළත් කරන්න .." class="form-control input-secQuestion" required name="secAnswer">
                </div>
              </div>

            </div>

          </div>
          <div class="row ">
            <div class="col">
              <button class="btn-success btn btn-signup">ලියාපදිංචි වන්න</button>
            </div>
          </div>
        </form>


      </div>
    </div>
  </div>
</body>
<footer class="footer-skinny">
  <div class="container">
    <div class="site-info row">
      <div class="col-md-7">
        <div class="row">
          <div style="margin-top: 13px">
            <ul class="menu pl">
              <li class="copyright">© 2018 - 2019 <b>අත්වැලක්</b>.lk</li>
              <li><a href="https://www.gofundme.com/terms">Terms of Service</a></li>
              <li><a href="https://www.gofundme.com/privacy">Privacy Policy</a></li>
            </ul>
          </div>
        </div>

      </div>
      <div class="col-md-5">
        <div style="margin-top: 10px; float: right;">
          <ul class="social-links align-right menu">
            <li><a href=""><i class="fa fa-instagram text-black" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-twitter tw-blue" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa fa-youtube-play text-red" aria-hidden="true"></i></a></li>
            <li><a href=""><i class="fa fa-facebook-official fb-blue" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "athwelak";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $fName=$_POST["fName"];
    $lName=$_POST["lName"];
    $email=$_POST["email"];
    $pass=$_POST["password"];
    $passConfirm=$_POST["passwordConfirm"];
    $phone=$_POST["phone"];
    $secQuestion=$_POST["secQuestion"];
    $secAnswer=$_POST["secAnswer"];

    $sql = "INSERT into user(fName, lName, email, phone, password, secQuestion, secAnswer) VALUES ('$fName','$lName','$email','$phone','$pass','$secQuestion','$secAnswer')";
    if ($pass==$passConfirm) {
        if ($conn->query($sql) === true) {
            $message = "අත්වැලක්.lk වෙත සාදරයෙන් පිළිගනිමු.
              කරුණාකර ඔබගේ විද්‍යුත් තැපැල් ලිපිනය තහවුරු කරන්න.";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $message = "විද්‍යුත් තැපෑල දැනටමත් ඇතුළත් කර ඇත";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    $conn->close();
}
 ?>
</html>
