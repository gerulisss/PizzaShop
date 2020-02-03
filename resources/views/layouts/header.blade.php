<header id="header2" class="header-fixed">
    <div class="mobile">
        <div class="row">
           <div class="logo2">
            <a href="{{route('welcome')}}"><img src={{asset('images/logo.png')}} alt="Logo"></a>
           </div>
           <nav class="nav-right">
                               <i class="fa fa-bars" aria-hidden="true" onclick="openNav()"></i>
               <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closesbtn" onclick="closeNav()">&times;</a>
               <a href="{{route('welcome')}}">Home</a>
               <a href="#">About</a>
               <a href="#">Products</a>
               <a href="#">Contact</a>
               <a href="{{route('cart')}}">Cart</a>
       </div>
   </div>
   </div>
   </nav> 
</header>

           <header id="header" class="header-fixed" id="myHeader">
                   <nav class="navbar">
                       <div class="row">
                           <div class="logo">
                            <a href="{{route('welcome')}}"><img src={{asset('images/logo.png')}} alt="Logo"></a>
                           </div>
                           <nav class="nav-right">
                                   <a class="headers_links" href="#home">Home</a>
                                   <a class="headers_links" href="#about">About</a>
                                   <a class="headers_links" href="#products">Products</a>
                                   <a class="headers_links" href="#contact">Contact</a>
                                   <a  style="text-decoration:none;" id="open-cart"  href="{{route('cart')}}"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                                  <script>
                                   var getCartUrl="{{route('get-cart')}}";
                                   var removeCartUrl="{{route('remove-cart')}}";
                                    </script>
                                    <a class="mygtukas" id="top-cart">
                                    @if(session()->has('success_message'))
                                    <div class="alert alert-success" role="alert">
                                        {{session()->get('success_message')}}
                                    </div>
                                    @endif
                                   </a>
                           </nav>
                       </div>
                   </nav> 
               </header>

               <style>
                   .mygtukas {
	background-color: red;
	color: #fff;
    margin-top: 8px;
    margin-bottom: 8px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 30px;
	display: block;
	text-decoration: none;
    border-radius: 5px;
	border: none;
	text-align: center;
    font-size: 14px;
	}
                   </style>