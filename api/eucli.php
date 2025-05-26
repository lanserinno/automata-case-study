<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Euclidean Algorithm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
      body {
        background: url('../bg.png') no-repeat center center fixed;
        background-size: cover;
      }
    </style>

  </head>

  <body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num1']) && isset($_POST['num2'])): ?>
        <?php
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $steps = [];

            if ($num1 <= 0 || $num2 <= 0): ?>
                <div id="errorCard" class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 450px; background-color: #f8d7da;">
                    <div class="card-body">
                        <h2 class="fw-bold" style="color: #842029;">Error</h2>
                        <p class="fs-4 mb-0" style="font-size: 18px; color: #842029;">Please enter positive integers for both numbers.</p>
                        <div class="mt-4 d-flex justify-content-end align-items-center">
                            <p class="fw-bold fs-4 mb-0 me-3">Try again?</p>
                            <form method="POST" action="" class="d-flex">
                                <button type="submit" name="tryAgain" class="btn btn-warning btn-lg me-2">YES</button>
                                <a href="/" class="btn btn-danger btn-lg">NO</a>
                            </form>
                        </div>
                    </div>
                </div>
            <?php else:
                $a = max($num1, $num2);
                $b = min($num1, $num2);

                while ($b != 0) {
                    $r = $a % $b;
                    $steps[] = "$a = $b × " . intdiv($a, $b) . " + $r";
                    $a = $b;
                    $b = $r;
                }
                $gcd = $a;
            ?>
            <div id="gcdCard" class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 450px; background-color: #fbf3d5;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h2 class="fw-bold" style="color: #6b2d1a;">The GCD of <?php echo $num1; ?> and <?php echo $num2; ?> is: </h2>
                        <h2 class="fw-bold pt-1 ps-1"><?php echo $gcd; ?></h2>
                    </div>
                    
                    <p class="fs-4 mb-0" style="font-size: 18px;">Steps:</p>
                    <p class="fs-4 mb-0" style="font-size: 18px;"><?php echo implode('<br>', $steps); ?></p>

                    <div class="mt-4 d-flex justify-content-end align-items-center">
                        <p class="fw-bold fs-4 mb-0 me-3">Try again?</p>
                        <form method="POST" action="" class="d-flex">
                            <button type="submit" name="tryAgain" class="btn btn-warning btn-lg me-2">YES</button>
                            <a href="/" class="btn btn-danger btn-lg">NO</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 150px; background-color: #fbf3d5;">
        <div class="card-body">
           <h2 class="fw-bold" style="color: #6b2d1a">Euclidean Algorithm</h2>
           <p class="lh-base fst-italic" style="font-size: 18px;">The Euclidean algorithm is a method for finding the greatest common divisor (GCD) of two integers. It works by repeatedly subtracting the smaller number from the larger one, or more efficiently, by dividing the larger number by the smaller and taking the remainder. This process continues until the remainder is zero.</p>
        </div>
    </div>

    <div class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 345px; background-color: #fbf3d5;">
        <div class="card-body">
            <form method="POST" action="">
                <div class="row">
                    <label for="num1" class="col-sm-1 col-form-label col-form-label-lg fw-bold warning">Input: </label>
                    <div class="col-sm-4">
                        <input type="number" name="num1" class="form-control form-control-lg" id="num1" placeholder="Enter the First Number" required>
                    </div>
                    <label for="num2" class="col-sm-1 col-form-label col-form-label-lg fw-bold warning">Input: </label>
                    <div class="col-sm-4">
                        <input type="number" name="num2" class="form-control form-control-lg" id="num2" placeholder="Enter the Second Number" required>
                    </div>
                    <div class="col-sm-1 text-center">
                        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>