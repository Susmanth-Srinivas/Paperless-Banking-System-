<!DOCTYPE html>
<head>
    <title>PAPERLESS BANK MANAGEMENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="w3-container w3-black w3-center w3-allerta">
        <p class="w3-xxxlarge">Welcome to Paperless Bank System</p>
      </div>
    <style>
        body 
        {
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
          position: absolute;
          top: 10%;
          width: 100%;
          text-align: center;
          font-size: 18px;
        }
        input.right {
        float: right;
      }

    </style>
</head>
<body>
    <br>
    <h1 style="color:#ff6347;">SERVICES AVAILABLE</h1>
    <br>
    <div class="container mt-3">
        <form name="he" method="post" action="option.php">
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="vrp" checked>
            <label class="form-check-label" for="radio1"><b>VIEW REPORTS</b></label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="snf">
            <label class="form-check-label" for="radio2"><b>SEND NOTIFICATIONS(LOAN DUE)</b></label>
          </div>
          <input type="submit" name="Submit" id="Submit" value="Submit">
        </form>
      </div>
      <div class="w3-cursive">
       <marquee class="w3-text-red">Please select the appropriate option</marquee>
      </div>
</body>
</html>