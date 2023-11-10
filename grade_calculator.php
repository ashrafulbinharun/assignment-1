<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grade Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel=" stylesheet" href="./style3.css">
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="title">Assignment 1</h1>
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="card">

              <h2 class="card-heading">Grade Calculator</h2>
              <div class="row">
                <div class="col-lg-8 offset-lg-2">
                  <div class="m-card">
                    <form method="post" action="">
                      <div class="mb-3">
                        <input class="form-control" type="number" name="test1" step="0.01"
                          placeholder="Enter Your First Test Mark" required autofocus>
                      </div>
                      <div class="mb-3">
                        <input class="form-control" type="number" name="test2" step="0.01"
                          placeholder="Enter Your Second Test Mark" required autofocus>
                      </div>
                      <div class="mb-3">
                        <input class="form-control" type="number" name="test3" step="0.01"
                          placeholder="Enter Your Third Test Mark" required autofocus>
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


            <?php

                if ( isset( $_POST['cal_btn'] ) ) {
                    if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                        $test1   = $_POST["test1"];
                        $test2   = $_POST["test2"];
                        $test3   = $_POST["test3"];
                        $sum     = ( $test1 + $test2 + $test3 );
                        $avarage = ( $sum / 3 );

                        if ( $avarage >= 80 ) {
                            echo '<h1 class="title-mark">'."Total Marks : $sum"."</h1>";
                            echo '<h1 class="title-mark">'."Avarage : $avarage"."</h1>";
                            echo '<h1 class="title">'."Your Grade : A"."</h1>";

                        } else if ( $avarage >= 70 && $avarage < 80 ) {
                            echo '<h1 class="title-mark">'."Total Marks : $sum"."</h1>";
                            echo '<h1 class="title-mark">'."Avarage : $avarage"."</h1>";
                            echo '<h1 class="title">'."Your Grade : B"."</h1>";

                        } else if ( $avarage >= 60 && $avarage < 70 ) {
                            echo '<h1 class="title-mark">'."Total Marks : $sum"."</h1>";
                            echo '<h1 class="title-mark">'."Avarage : $avarage"."</h1>";
                            echo '<h1 class="title">'."Your Grade : c"."</h1>";

                        } else if ( $avarage >= 40 && $avarage < 60 ) {
                            echo '<h1 class="title-mark">'."Total Marks : $sum"."</h1>";
                            echo '<h1 class="title-mark">'."Avarage : $avarage"."</h1>";
                            echo '<h1 class="title">'."Your Grade : D"."</h1>";

                        } else {
                            echo '<h1 class="title-mark">'."Total Marks : $sum"."</h1>";
                            echo '<h1 class="title-mark">'."Avarage : $avarage"."</h1>";
                            echo '<h1 class="title">'."Your Grade : F"."</h1>";
                        }
                    }

                }

            ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>