<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel=" stylesheet" href="./style7.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="title">Module 1</h1>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card">

              <h2 class="card-heading">Simple Calculator</h2>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <div class="m-card">
                    <form method="post" action="">
                      <div class="mb-3">
                        <input class="form-control" type="number" name="num1" placeholder="First Number" required
                          autofocus>
                      </div>
                      <div class="mb-3">
                        <input class="form-control" type="number" name="num2" placeholder="Second Number" required
                          autofocus>
                      </div>
                      <div class="mb-3">
                        <select class="form-control" name="operation" autofocus>
                          <option>Please Select an Option</option>
                          <option value="add">Addition</option>
                          <option value="subtract">Subtraction</option>
                          <option value="multiply">Multiplication</option>
                          <option value="divide">Division</option>
                        </select>
                      </div>
                      <button class="btn btn-info btn-res" name="cal_btn" type="submit">Calculate</button>
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
                          $num1      = $_POST["num1"];
                          $num2      = $_POST["num2"];
                          $operation = $_POST["operation"];

                          switch ( $operation ) {
                          case "add":
                              $result = $num1 + $num2;
                              echo "Result: $result";
                              break;
                          case "subtract":
                              $result = $num1 - $num2;
                              echo "Result: $result";
                              break;
                          case "multiply":
                              $result = $num1 * $num2;
                              echo "Result: $result";
                              break;
                          case "divide":
                              if ( $num2 != 0 ) {
                                  $result = $num1 / $num2;
                                  echo "Result: $result";
                              } else {
                                  echo "Cannot divide by zero.";
                              }
                              break;
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