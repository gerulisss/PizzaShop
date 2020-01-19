<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PizzaStore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- Styles -->
         <script src="{{ asset('/js/carousel.js') }}" defer></script>
         <script src="{{ asset('/js/sidenav.js') }}" defer></script>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    @extends('layouts.header')
    @include('layouts.slides')
                   <div class="container">
       <main>
           <div class="card">         
               <img src="./images/pica.png" alt=""> 
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3>
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
           </div>
   
           <div class="card">
               <img src="./images/pica.png" alt="">
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3>
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
       </div>
   
           <div class="card">
               <img src="./images/pica.png" alt="">
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3>
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
       </div>
   
           <div class="card">
                   <img src="./images/pica.png" alt="">
                   <h3>Vezuvijaus</h3>  
                   <h3>nuo 8,75 €</h3> 
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
           </div>
   
           <div class="card">
               <img src="./images/pica.png" alt="">
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3>  
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
       </div>
   
           <div class="card">
               <img src="./images/pica.png" alt="">
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3>  
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
       </div>
   
           <div class="card">
               <img src="./images/pica.png" alt="">
               <h3>Vezuvijaus</h3>  
               <h3>nuo 8,75 €</h3> 
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
       </div>
   
           <div class="card">
                   <img src="./images/pica.png" alt="">
                   <h3>Vezuvijaus</h3>  
                   <h3>nuo 8,75 €</h3> 
               <p>Mocarelos sūris, soninė, vištiena, krevetės, picų padažas</p>
               <button class="btn"><span>į krepšelį</span></button>
           </div>
       </main>
   
           <!-- <main>
   
               <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
       
           <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
       
           <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
       
           <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
           <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
   
           <div class="card">
                   <img class="drink" src="./images/drink.png" alt="">
                   <h3>My title</h3>  
                   <p>Apelsinų sultys CIDO (100%), 0,3 l</p>
                   <button class="btn"><span>į krepšelį</span></button>
           </div>
       
           </main> -->
       </div>
       @extends('layouts.footer')
    </body>
</html>
