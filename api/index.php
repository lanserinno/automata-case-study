<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      body {
        background: url('/bg1.png') no-repeat center center fixed;
        background-size: cover;
      }
      .menu-title {
        font-family: 'Chewy', cursive;
        font-size: 125px;
        color: #fff;
        text-align: center;
        margin-top: 150px;
      }
      .menu-buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 10px;
      }
      .menu-buttons .btn {
        font-family: 'Chewy', cursive;
        font-size: 30px;
        background-color: #f8e9a1;
        color: #6b2d1a;
        border: none;
        margin: 10px 0;
        width: 300px;
        text-align: center;
      }
      .menu-buttons .btn:hover {
        background-color: #f7d794;
      }
      .btn-credits {
        font-family: 'Chewy', cursive;
        font-size: 20px;
        background-color: #f8e9a1;
        color: #6b2d1a;
        border: none;
        width: 150px;
        text-align: center;
      }
      .btn-credits:hover {
        background-color: #f7d794;
      }
    </style>
  </head>

  <body>
    <div class="position-absolute top-0 end-0 mt-5 me-3">
      <button class="btn btn-credits" onclick="window.location.href='/credits.php'">Credits</button>
    </div>
    <div class="menu-title" style="color: #fbf3d5">MENU</div>
    <div class="menu-buttons">
      <button class="btn" onclick="window.location.href='/fibonacci.php'">Fibonacci</button>
      <button class="btn" onclick="window.location.href='/lucas.php'">Lucas</button>
      <button class="btn" onclick="window.location.href='/tribo.php'">Tribonacci</button>
      <button class="btn" onclick="window.location.href='/collatz.php'">Collatz</button>
      <button class="btn" onclick="window.location.href='/eucli.php'">Euclidean Algorithm</button>
      <button class="btn" onclick="window.location.href='/pascal.php'">Pascal Triangle</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>