<!DOCTYPE html>
<html lang="pl">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=500; user-scalable=0;" />
        
    <title>FABAD-BETON</title>
    <meta name="description" content="Betoniarnia działająca na terenie powiatu zgorzeleckiego z siedziba w Bogatynii. Wykonujemy szereg usług betoniarskich takich jak produkcja i wylewanie betonu, tworzenie konstrukcji betonowych."/>
    <meta name="keywords" content="beton, betoniarnia Bogatynia, mieszanka betonowa, betonowanie, betoniarstwo, cement, betoniarka, elementy betonowe, betonowanie fundamentów, wykonawstwo betonowe, usługi betoniarskie, produkcja betonu, betonowe płyty chodnikowe, betonowa konstrukcja, betonowy dach, betonowe schody, powiat zgorzelecki" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="author" content="Bartosz Ryfa"/>
    <link rel="icon" type="image/png" href="photos/favicon.png" />
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
   
   
   <script
       async src="https://www.googletagmanager.com/gtag/js?id=G-Q53NH0W7FJ">
   </script>
   
   <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     gtag('config', 'G-Q53NH0W7FJ');
   </script>
        
</head>

<body>
   
   <div id="container">
       
   <!-- MENU -->
       
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

   <!--  MAIN SECTION
   
   BLOCK OF TEXT / PHOTOS
   
   -->
        
        <main>
            <div id="box">
                
            
            
            
            <div id="dane1">
                <h3>FABAD-BETON S.C</h3>
                    <p>Adrian Słomiak, Fabian Szcześ</p>
                    
                <div id="contact">
                    <div id="doramki">
                        <div id="enter"> mail:
                            <a href="mailto:kontakt.fabadbeton@gmail.com" >kontakt.fabadbeton@gmail.com</a>
                        </div>
                        <div class="danekontaktowe">telefon: 690 188 755</div>
                        <div class="danekontaktowe">adres: Lipowa 2, 59-916, Bogatynia</div>
                    </div>
                </div>
            </div>
                
    <!-- \n -->   <div class="clear"></div>
                    
               
                
            <div class="ramka1"></div>
            
            
            <div id="napisz1">
                Skontaktuj się z nami!
            </div>
            
    <!--
    
    FORM
    
    -->
            <div id="formularz1">
                <form action="sendMail.php" id="sendOrder" method="post">
                       <div class="">
                           <label><input type="text" name="name" id="insertName" placeholder="imię i nazwisko" required> </label>
                        </div>
                           
                       <div class="">
                           <label><input type="email" name="email" id="insertEmail" placeholder="mail" required> </label>
                       </div>
                           
                        <div class="">
                            <textarea type="text" name="mess" id="insertMessage" placeholder="wiadomość" rows="6" required></textarea>
                        </div>
                            
                        <div class="">
                           <label><input type="submit" name="submit" value="wyślij!"  </label>
                        </div>
                </form>

               </div>
            <div id="border1"></div>
           
            <div id="mapa">
                <p>Zobacz jak do nas dojedziesz!</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2513.4504329947235!2d14.902640400000003!3d50.952375800000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47092391005f703f%3A0x1b5edc1e9a4bd6e1!2sLipowa%202%2C%2059-916%20Bogatynia!5e0!3m2!1spl!2spl!4v1674802708163!5m2!1spl!2spl" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            
            <div id="baner">
                <img  src="photos/kontakt.jpg" alt="baner"></img>
            </div>
</main>
<footer>
            <div id="copyright">
                COPYRIGHT © 2023 WSZYSTKIE PRAWA ZASTRZEŻONE.
            </div>
    </div>
        
            
</footer>

<!--

MAIL SCRIPT

-->
    
    <script>
        
    const mobileNav = document.querySelector('#menu');
    const burgerIcon = document.querySelector('.burger');
    const divBox = document.querySelector('#box');
    const containerActive = document.querySelector('#container');


    burgerIcon.addEventListener('click', function(){
    mobileNav.classList.toggle('active');
    burgerIcon.classList.toggle('active');
    divBox.classList.toggle('active');
    containerActive.classList.toggle('active');
    })
        
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $("#sendOrder").on('submit', (e) => {
           
            $.ajax({
                url: './php/sendMail.php',
                method: 'POST',
                data: {
                    email: $("#insertEmail").val(),
                    name: $("#insertName").val(),
                    mess: $("#insertMessage").val(),
                    
                },
                success: (data) => {
                    window.location.replace('php/mail.php')
                    console.log(data)
                },
                error: (e) => console.log(e)
            })

            return false;
        })
    </script>

</body>
</html>


