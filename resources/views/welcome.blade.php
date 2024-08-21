<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Coming Soon</title>
    <style>
body{    
        display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f3f4f6;
}

.coming-soon {
    text-align: center;
}

h1 {
    font-size: 3em;
    margin-bottom: 0.5em;
}

p {
    font-size: 1.2em;
    margin-bottom: 1.5em;
}

.countdown {
    display: flex;
    justify-content: center;
    gap: 1em;
}

.time {
    background: #fff;
    padding: 1em;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.time span {
    display: block;
    font-size: 2em;
    margin-bottom: 0.5em;
    </style>


  </head>
  <body>
      
      


    <div class="coming-soon">
        <div class="text-center">
          <img src="logo.png" class="rounded" alt="shubban">
        </div>
        <br>
        <h1>Coming Soon</h1>
        <p>Our website is under construction. We'll be here soon with our new awesome site.</p>
        <div class="countdown">
            <div class="time">
                <span id="days"></span> Days
            </div>
            <div class="time">
                <span id="hours"></span> Hours
            </div>
            <div class="time">
                <span id="minutes"></span> Minutes
            </div>
            <div class="time">
                <span id="seconds"></span> Seconds
            </div>
        </div>
         <br>
            <div class="text-center">
          <img src="main-shubban-logo.png" class="rounded" alt="shubban">
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>