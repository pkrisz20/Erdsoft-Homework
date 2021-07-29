<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A birtok</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--NAVBAR-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<nav class="navbar navbar-expand-lg whole">
<div class="container">
  <a class="navbar-brand" href="#"><img width="120px" src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
  </button>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--LOGO + LINKS-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

  <div class="icons"><a class="sign-in" href="#"><i class="fas fa-user"></i> BELÉPÉS</a> | <a href="#">HU</a> | <a href="#">EN</a> | <a href="#">日本語</a></div>
    <div class="collapse navbar-collapse menus col-lg-10" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link hover" href="#">NYITÓLAP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover" href="#">A BIRTOK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover" href="#">WEBSHOP</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover" href="#">ÉTTERMEK</a>
        </li>

        <li class="nav-item menu-button" data-toggle="dropdown">
          <a class="nav-link dropdown hover" href="#">BORKÓSTOLÓ</a>

          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="#">EXKLUZIV BORKÓSTOLÓ MÁDON</a></li>
            <li class="dropdown-item"><a href="#">CÉGES ÉS MAGÁN RENDEZVÉNYEK MÁDON</a></li>
            <li class="dropdown-item"><a href="#">BORKÓSTOLÁS CÉGES ÉS MAGÁN RENDEZVÉNYEKEN MÁDON KIVÜL</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link hover" href="#">HIREK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover" href="#">KAPCSOLAT</a>
        </li>
      </ul>

      <button class="button">KOSÁR <i class="fas fa-shopping-cart"></i></button>

    </div>
  
  </div>
</nav>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--HEADER IMAGE + BLACK CARD-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<body>
<div class="container-fluid">
<div class="centered">A birtok</div>

  <div class="row header-div">
    <img class="header" src="header-edited.jpg">
  </div>

  <div class="row black-card mb-4 col-xl-5 col-xxl-4 col-md-8 col-sm-10 col-12">

    <div class="card">
      <div class="card-body">
        <div class="title-div"> <h1 class="card-title mb-3">Történet</h1> </div>
        <h6 class="card-subtitle mb-3">Magyarország elsőrangú és kivételes borainak legjava.</h6>
        <p class="card-text">A Váradi család vaxco birtoka Mádon, az UNESCO világörökség részévé nyilváníitott, történelmi, Tokaji borvidék területén található – egy kivételesen gazdag terroir, amely különféle termőtalajok találkozásából keletkezett. A Juliet Victor sokrétű világa megteremti a tökéletes egyensúlyt történelmi és modern között: nagy múltú terroir és csúcstechnológiát alkalmazó előállítás. A Juliet Victor elegáns, száraz fehér és igazán egyedülálló, édes desszertborokat alkot a bor szerelmeseinek.</p>
        <a href="#" class="card-link">TOVÁBB &nbsp &nbsp<i class="fas fa-chevron-right"></i></a>
      </div>
    </div>

  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--MERGED IMG + 2 DIVS COLUMN-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container-fulid">
  <div class="merged-div w-100">
    <img class="merged" src="merged.png">
  </div>

  <div class="row winery">

    <div class="column">
      <img class="col-12" src="winery.jpg">
    </div>

    <div class="column">

      <div class="card1">
        <div class="card1-body">
          <div class="title1-div"> <h1 class="card1-title mb-3">A borászat</h1> </div>
          <p class="card1-text">Mád, mint Tokaj-Hegyalja egyik jelentős történelmi települése, a borvidék meghatározó szőlőterületeivel rendelkezik. E területek változatos vulkanikus talaja, ideális fekvése és egyedi mikroklímája révén magas minőségű, izgalmas borok megszületésének adnak lehetőséget. A borok létrejöttének a szőlőterület, a szőlő és az ezeket kezelő, évszázadok alatt csiszolódott emberi tudás mellett, egy fontos eleme még a borászati épület is. Hegyaljára jellemző módon Mádon is e borászatok többségében nem kint a szőlőben, hanem a település történelmi szerkezetében helyezkednek el, beleilleszkedve a település szövetébe, lakó- és különféle középületek szomszédságában.</p>
          <a href="#" class="card1-link">TOVÁBB &nbsp &nbsp<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>

    </div>

  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--TWO IMAGES-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container">
  <div class="row two-images">

      <div class="card2">
        <div class="card2-body">
          <div class="title2-div"> <h1 class="card2-title mb-3">A terület</h1> </div>
          <p class="card2-text">A Juliet Victor számára a világhírű Tokaji borvidék szívében található Mád történelmi községe tökéletes éghajlati feltételeket, termőtalajt és bortermelő területet biztosít, amely az egyedülálló erjesztési és érlelési folyamatok képességének, mesterségbeli tudásának is táptalajává válik.</p>
        </div>
      </div>

      <div>
        <img class="territory" src="territory.jpg">
      </div>

  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--MENU-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container flex-box">
  <div class="row img-gallery-div">

    <ul class="img-gallery-nav mb-5">
      <li class="img-gallery-menu"><a class="link" href="#">BETSEK</a></li>
      <li class="img-gallery-menu"><a class="link" href="#">HOLDVÖLGY</a></li>
      <li class="img-gallery-menu"><a class="link" href="#">KIRÁLY</a></li>
      <li class="img-gallery-menu"><a class="link" href="#">BOMBOLY</a></li>
      <li class="img-gallery-menu"><a class="link" href="#">SZENT-TAMÁS</a></li>
      <li class="img-gallery-menu"><a class="link" href="#">VERES</a></li>
      <li class="img-gallery-menu"><a class="link active" href="#">ÚRÁGYA</a></li>
    </ul>

  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--IMG GALLERY AND TEXT-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container-fluid">
  <div class="row img-gallery">

  <div class="column1 slideshow-img">
    <div class="w3-content w3-display-container" style="max-width:800px">
    <img class="mySlides" src="uragya/uragya01.jpg" style="width:100%">
    <img class="mySlides" src="uragya/uragya02.jpg" style="width:100%">
    <img class="mySlides" src="uragya/uragya03.jpg" style="width:100%">
    <img class="mySlides" src="uragya/uragya04.jpg" style="width:100%">
    <img class="mySlides" src="uragya/uragya05.jpg" style="width:100%">
    <img class="mySlides" src="uragya/uragya06.jpg" style="width:100%">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    </div>
    </div>
  </div>

    <div class="column1 slideshow-text col-12">
      <div class="card3">
        <div class="card3-body">
          <div class="title3-div"> <h1 class="card3-title mb-3">Úrágya</h1> </div>
          <p class="card3-text">Mád, mint Tokaj-Hegyalja egyik jelentős történelmi települése, a borvidék meghatározó szőlőterületeivel rendelkezik. E területek változatos vulkanikus talaja, ideális fekvése és egyedi mikroklímája révén magas minőségű, izgalmas borok megszületésének adnak lehetőséget. A borok létrejöttének a szőlőterület, a szőlő és az ezeket kezelő, évszázadok alatt csiszolódott emberi tudás mellett, egy fontos eleme még a borászati épület is. Hegyaljára jellemző módon Mádon is e borászatok többségében nem kint a szőlőben, hanem a település történelmi szerkezetében helyezkednek el, beleilleszkedve a település szövetébe, lakó- és különféle középületek szomszédságában.</p>
        </div>
      </div>
    </div>
</div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--KUPON-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container-fluid">
  <div class="row kupon-div">
    <div class="kupon-title"><h2 id="kupon-title"><strong>A kiváncsiságod megjutalmazzuk!</strong></h2></div>
    <div class="kupon-leiras"><p id="kupon-leiras">KÖVETKEZŐ VÁSÁRLÁSOD ALKALMÁVAL HASZNÁLD A <strong>JVRULEZ007</strong> KUPONKÓDOT</p></div>
  </div>
</div>

<!--//////////////////////////////////////////////////////////////////////////////////////////-->
<!--WINE CARDS-->
<!--//////////////////////////////////////////////////////////////////////////////////////////-->

<div class="container">

  <div class="row sor">

    <div class="column2">

        <div class="wine-div1 col-xl-9 col-lg-8 col-md-8 col-sm-8 col-10">
          <img class="bottles" src="bottles.png" width="120px" height="auto">
        </div>

      <div class="card4 mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 col-sm-3 col-3 medals-img">
            <div class="gold-icon-filled"><img src="gold-decanter.png" class="medals"></div>
            <div class="gold-icon-oulined"><img src="international_trophy.png" class="medals"></div>
          </div>

          <div class="col-md-8 col-sm-9 col-9">
            <div class="card-body4">
              <h5 class="card-title4">Mád kincsei</h5>
              <hr>
              <p class="p-text">A CSOMAG TARTALMA:</p>
              <p class="p-text">1 PALACK BOMBOLY FURMINT 2017</p>
              <p class="p-text">1 PALACK SZAMORODNI 2017</p>
              <a href="#" class="card4-link">BŐVEBBEN &nbsp &nbsp<span class="arrow"><i class="fas fa-chevron-right"></i></span></a>
            </div>

            <div class="wishing">
              <span class="price">15 990 Ft</span>
              <input type="number" style="width: 50px; border: none; padding-left: 15px; margin-left: 5px; margin-right: 5px;" value="1">
              <button class="buy-button">VÁSÁRLÁS</button>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="column2">

        <div class="wine-div2 col-xl-7 col-lg-7 col-md-7 col-sm-6 col-9">
          <img class="bottle" src="tokai2.png" width="90px" height="auto">
        </div>

      <div class="card5 mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 col-sm-3 col-3 medals-div">
            <div><img src="international_trophy.png" class="medals"></div>
            <div><img src="double-gold.png" class="medals"></div>
            <div><img src="gran-gold.png" class="medals"></div>
            <div><img src="silver.png" class="medals"></div>
          </div>

          <div class="col-md-8 col-sm-9 col-9">
            <div class="card-body5">
              <h5 class="card-title5">Szamorodni</h5>
              <h5 class="card-title5">2017</h5>
              <p class="p-text">2017 / ÉDES</p>
              <hr>
              <p class="p-text">HALVÁNY ARANY SZINŰ LÁGY</p>
              <p class="p-text">MOZGÁSÚ ÉDES BOR</p>
              <a href="#" class="card4-link">BŐVEBBEN &nbsp &nbsp<span class="arrow"><i class="fas fa-chevron-right"></i></span></a>
            </div>

            <div class="wishing">
              <span class="price">9 990 Ft</span>
              <input type="number" style="width: 50px; border: none; padding-left: 15px; margin-left: 5px; margin-right: 5px;" value="1">
              <button class="buy-button">VÁSÁRLÁS</button>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>

<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>