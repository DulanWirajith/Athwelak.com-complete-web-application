<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="../css/profile.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

  <script src="https://maxcdn.bootstrapcdn..."></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>මගේ ගිණුම</title>
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-transparent">

    <a class="navbar-brand" href="../index.html">
        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top"
            alt="">
        <b>අත්වැලක්</b><small>.lk</small>
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

  <div class="container-fluid">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <div class="row">
      <div class="col-md-12">
        <div class="card hovercard">
          <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
          </div>
          <div class="useravatar">
            <img alt="profile picture" src="">
          </div>
          <div class="card-info"> <span class="card-title">Zee Lot</span>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
              <div class="hidden-xs">
                <h4>අත්වැලක් වෙමු</h4>
              </div>
            </button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
              <div class="hidden-xs">
                <h4>පණිවුඩ පළකිරීම</h4>
              </div>
            </button>
          </div>

        </div>

        <div class="well">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3>අත්වැලක් වෙමු</h3>
                  </div>
                </div>
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
                      $conn->close();
                      // $arry = ['sameera', 'asd', 'asdas', 'asdasd'];

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

            </div>
            <div class="tab-pane fade in" id="tab2">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h3>පණිවුඩ පළකිරීම</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-10 offset-md-1">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="row bg-userName">
                        <div class="col-md-12 name-div">
                          <div class="input-container">
                            <h5 style="width:160px;">මාතෘකාව</h5>
                            <input type="text" placeholder="මාතෘකාව" class="userName form-control" required name="title">
                          </div>
                        </div>
                      </div>
                      <div class="row bg-userName">
                        <div class="col-md-12 name-div">
                          <div class="input-container">
                            <h5 style="width:160px;">විස්තර</h5>
                            <textarea rows="6" cols="110" placeholder="කෙටි විස්තරයක් ඇතුලත් කරන්න" name="description">

                            </textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row bg-userName">
                        <div class="col-md-12 name-div">
                          <div class="input-container">
                            <h5 style="width:160px;">දුරකථන අංකය</h5>
                            <input type="text" placeholder="අත්වැලක් බලාපොරොත්තු වන පුද්ගලයාගේ දුරකථන අංකය" class="userName form-control" required name="telphone">
                          </div>
                        </div>
                      </div>

                      <div class="row bg-userName">
                        <div class="col-md-12 name-div">
                          <div class="input-container">
                            <h5 style="width:160px;">ප්‍රදේශය</h5>
                            <input type="text" placeholder="අත්වැලක් බලාපොරොත්තු වන පුද්ගලයා ජීවත්වන ප්‍රදේශය" class="userName form-control" required name="area">
                          </div>
                        </div>
                      </div>
                      <div>
                          <div class="row bg-userName">
                              <div class="col-md-12">
                                  <div>
                                      <input type="checkbox" name="alltrue" id="alltrue" > සියලු තොරතුරු සත්‍ය හා නිවැරදි බවට පොරොන්දු වෙමි
                                  </div>
                              </div>
                          </div>
                      </div>




                      <div class="row ">
                        <div class="col">
                          <button class="btn-success btn btn-signup">පණිවුඩය පලකරන්න</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script>
    $(document).ready(function() {
      $(".btn-pref .btn").click(function() {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below
        $(this).removeClass("btn-default").addClass("btn-primary");
      });
    });
  </script>
</body>
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

        $title=$_POST["title"];
        echo "$title";
        $description=$_POST["description"];
        $telphone=$_POST["telphone"];
        $area=$_POST["area"];
        $alltrue=false;
        $alltrue=$_POST["alltrue"];

//
        $sql = "INSERT INTO post(title, description, telphone, area) VALUES ('$title','$description','$telphone','$area')";
        if ($alltrue==true) {
            if ($conn->query($sql) === true) {
                $message = "පණිවුඩය පළකිරීම සාර්ථකයි..";
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
