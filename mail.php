<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500; user-scalable=0;" />
        
    <title>FABAD-BETON</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="author" content="Bartosz Ryfa"/>
    <link rel="stylesheet" href="mail.css" type="text/css"/>
    
   
        
        
</head>
<body>

    
    <div id="container">
<header>
            <div id="sticky">
              <div id="logo">
                <a href="index.html"><img src="photos/logo.png"></a>
              </div>
              
              <div class="wrapper">
                  
                <div id="menu">
                  <li><a href="index.html">OFERTA</a></li>
                  <li><a href="cennik.html">CENNIK</a></li>
                  <li><a href="onas.html">O NAS</a></li>
                  <li><a href="kontakt.php">KONTAKT</a></li>
                </div>
              </div>
            </div>
        

            <button class="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </button>
            
</header>
<main>
            <div id="box">
                <h1>Dziękujemy za wiadomość!</h1>
                <h2>Odezwiemy się tak szybko jak to możliwe.</h2>
            </div>
</main>
<footer>
            <div id="copyright">
                COPYRIGHT © 2023 WSZYSTKIE PRAWA ZASTRZEŻONE.
            </div>
    </div>
</footer>

    
    <!--
    
    SCRIPT
    
    -->
    <script>


    const mobileNav = document.querySelector('#menu');
    const containerActive = document.querySelector('#container');
    const burgerIcon = document.querySelector('.burger');
    const mailContainer = document.querySelector('#container');
    const mailBox = document.querySelector('#box');
   

    burgerIcon.addEventListener('click', function(){
        mobileNav.classList.toggle('active');
        burgerIcon.classList.toggle('active');
        mailContainer.classList.toggle('active');
        mailBox.classList.toggle('active');
        
    })


    </script>
</body>
</html>
