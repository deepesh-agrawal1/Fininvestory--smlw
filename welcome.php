<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
    <link rel="stylesheet" href="welcome.css">
  </head>
  <body>
  
  <header class="header">

    <a href="#" class="logo">Learn Trading</a>
    <nav class="nav-items">
      <a href="index.html">Home</a>
      <a href="https://forms.gle/AKEhjFmrqvuRQ6f96">Enroll Now</a>
      <a href="team.html">About</a>
      <a href="form.html">Contact us </a>
      <button onclick="window.location.href='login.php' ">Log_In</button>

    </nav>
  </header>
    


    <div class="intro">
      <h1>Hello <?php echo $_SESSION['username']?> </h1>
      <h2>Trading- it’s about buying and selling assets with the aim of making a profit</h2> 
    </div>

    <p>so here you are welcome with some memes which you will be relating to your day to day working when you start investing in stock market</p>
    
     
<div class="achievements">
      <div class="work">
        <p class="work-heading">Intoduction To Stock Market</p>
        <p class="work-text">The stock market can play a pivotal role in ensuring your financial security. In this module, you will learn how to get started in the stock market, its fundamentals, how it functions, and the various intermediaries that appertain it.</p>

<button onclick="window.location.href='intoduction.html'">Learn More</button>

      </div>


      <div class="work">
        <p class="work-heading">Fundamental Analysis</p>
        <p class="work-text">The Fundamental Analysis (FA) module explores Equity research by reading financial statements and annual reports, calculating and analyzing Financial Ratios, and evaluating the intrinsic value of a stock to find long-term investing opportunities.</p>
<button onclick="window.location.href='fundamental.html'">Learn More</button>
      </div>


      <div class="work">
        <p class="work-heading">Technical Analysis</p>
        <p class="work-text">Technical Analysis (TA) helps in developing a point of view. In this module, we will discover the complex attributes, various patterns, indicators, and theories of TA that will help you as a trader to find upright trading opportunities in the market..</p>

<button onclick="window.location.href='technical.html'">Learn More</button>

      </div>


<div class="work">
        <p class="work-heading">Risk Management And Trading psychology</p>
        <p class="work-text">Trading and investing are subject to risks. Our emotions also influence our choices in the market and could aggravate risks. This module discusses risk and risk management tools along with the psychology required for sustaining in the markets.</p>

<button onclick="window.location.href='risk.html'">Learn More</button>

      </div>
    

    </div>  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
