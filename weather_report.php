<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Weather Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel=" stylesheet" href="./style5.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="title">Assignment 1</h1>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card">

              <h2 class="card-heading">Weather Report</h2>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <div class="m-card">
                    <form method="post" action="">
                      <div class="mb-4 mt-2">
                        <input class="form-control" type="number" name="temp" placeholder="Enter Temperature In °C"
                          required autofocus>
                      </div>
                      <button class="btn btn-info btn-res" name="cal_btn" type="submit">Check</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">

            <h1 class="title">
              <?php

                  if ( isset( $_POST['cal_btn'] ) ) {
                      if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                          $temp = $_POST["temp"];

                          if ( $temp >= 30 ) {
                              echo "It's Warm 🔥";
                          } else if ( $temp >= 20 && $temp < 30 ) {
                              echo "It's Cool ❄️";
                          } else {
                              echo "It's Freezing 🥶";
                          }

                      }
                  }

              ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>