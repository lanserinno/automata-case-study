<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pascal Triangle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background: url('bg.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 150px; background-color: #fbf3d5;">
        <div class="card-body">
            <h2 class="fw-bold" style="color: #6b2d1a">Pascal Triangle</h2>
            <p class="lh-base fst-italic" style="font-size: 18px;">Pascal's Triangle is a triangular array of binomial coefficients. Each number is the sum of the two numbers directly above it.</p>
        </div>
    </div>

    <div class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 320px; background-color: #fbf3d5;">
        <div class="card-body">
            <form method="POST" action="">
                <div class="row">
                    <label for="numRows" class="col-sm-3 col-form-label col-form-label-lg fw-bold warning">Input the no. of rows: </label>
                    <div class="col-sm-7">
                        <input type="number" name="numRows" class="form-control form-control-lg" id="numRows" placeholder="Enter number" required>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-warning btn-lg">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numRows'])): ?>
        <?php
        $numRows = intval($_POST['numRows']);
        $pascal = [];
        if ($numRows < 0): ?>
            <div id="errorCard" class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 425px; background-color: #f8d7da;">
                <div class="card-body">
                    <h2 class="fw-bold" style="color: #842029;">Error</h2>
                    <p class="fs-4 mb-0" style="font-size: 18px; color: #842029;">Please enter a number greater than or equal to 0.</p>
                    <div class="mt-4 d-flex justify-content-end align-items-center">
                        <p class="fw-bold fs-4 mb-0 me-3">Try again?</p>
                        <form method="POST" action="" class="d-flex">
                            <button type="submit" name="tryAgain" class="btn btn-warning btn-lg me-2">YES</button>
                            <a href="index.html" class="btn btn-danger btn-lg">NO</a>
                        </form>
                    </div>
                </div>
            </div>

        <?php else:
            $pascal = [[1]];  // 0th row

            // Add more rows only if numRows > 0
            if ($numRows > 0) {
                $pascal[] = [1, 1];  // 1st row
                // Generate remaining rows starting from 2nd row
                for ($i = 2; $i <= $numRows; $i++) {
                    $newRow = [1]; // First element is always 1
                    for ($j = 1; $j < $i; $j++) {
                        $newRow[] = $pascal[$i - 1][$j - 1] + $pascal[$i - 1][$j];
                    }
                    $newRow[] = 1; // Last element is always 1
                    $pascal[] = $newRow;
                }
            }
        ?>
            <div id="pascalCard" class="card position-absolute top-0 start-50 translate-middle-x" style="width: 1200px; margin-top: 425px; background-color: #fbf3d5;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h2 class="fw-bold" style="color: #6b2d1a;">Pascal Triangle : </h2>
                        <h2 class="fw-bold pt-1 ps-1"><?php echo $numRows; ?> rows</h2>
                    </div>

                    <div class="text-center fs-4 mb-0" style="font-size: 18px; line-height: 1.5; margin-top: 50px;">
                        <?php
                        echo "<div class='text-center'>";
                        foreach ($pascal as $row) {
                            echo "<div class='d-flex justify-content-center mb-2'>";
                            foreach ($row as $value) {
                                echo "<div class='p-2' style='text-align: center;'>$value</div>"; // Padding for consistent spacing
                            }
                            echo "</div>";
                        }
                        echo "</div>";
                        ?>
                    </div>

                    <div class="mt-4 d-flex justify-content-end align-items-center">
                        <p class="fw-bold fs-4 mb-0 me-3">Try again?</p>
                        <form method="POST" action="" class="d-flex">
                            <button type="submit" name="tryAgain" class="btn btn-warning btn-lg me-2">YES</button>
                            <a href="index.html" class="btn btn-danger btn-lg">NO</a>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>