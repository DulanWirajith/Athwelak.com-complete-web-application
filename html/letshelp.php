<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/letshelp.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <!-- link Google Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <title>අත්වැලක් වෙමු</title>
</head>

<body class="main-background">




    <div class="container" style="margin-top: 20px">
            <div class="row">

<?php
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

            // $sql = "SELECT id, firstname, lastname FROM MyGuests";
            // $result = $conn->query($sql);
            // if ($result->num_rows > 0) {
            //     // output data of each row
            //     while ($row = $result->fetch_assoc()) {
            //         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
            //     }
            // } else {
            //     echo "0 results";
            // }

            $conn->close();
            $arry = ['sameera', 'asd', 'asdas', 'asdasd'];

for ($i = 0; $i < 3; $i++) {
    echo "
        <div class=\"card col-md-4 bg-transparent\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"../images/helping-hand-drawing-24.jpg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <h5 class=\"card-title\"> erret </h5>
                <p class=\"card-text\">Some quick example text to build on the card title and make up the
                bulk of the card's content.</p>
                <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
            </div>
        </div>
    ";
}
?>

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
              <li class="copyright">© 2018 - 2019 <b>අත්වැලක්</b>.com</li>
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
</html>
