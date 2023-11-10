<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temperature Converter</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel=" stylesheet" href="./style2.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="title">Assignment 1</h1>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card">

              <h2 class="card-heading">Temperature Converter</h2>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <div class="m-card">
                    <form method="post" action="">
                      <div class="mb-4">
                        <input class="form-control" type="number" name="temp1" step="0.01"
                          placeholder="Enter Temperature" required autofocus>
                      </div>
                      <div class="mb-4">
                        <select class="form-control" name="operation" autofocus>
                          <option>Please Select an Option</option>
                          <option value="celsius">Celsius</option>
                          <option value="fahrenheit">Fahrenheit</option>
                        </select>
                      </div>
                      <button class="btn btn-info btn-res" type="submit">Convert</button>
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

                  if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                      $temp1     = $_POST["temp1"];
                      $operation = $_POST["operation"];

                      switch ( $operation ) {
                      case "celsius":
                          $tempInF = ( $temp1 - 32 ) * 5 / 9;
                          echo "Temperature: $tempInF"."°C";
                          break;
                      case "fahrenheit":
                          $tempInC = ( $temp1 * 9 / 5 ) + 32;
                          echo "Temperature: $tempInC"."°F";
                          break;
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