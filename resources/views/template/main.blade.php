<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    


    <title>Gadget-IN</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.css">

    <link rel="stylesheet" href="/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="/assets/css/lightbox.css">

    

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    @if (auth()->check() && auth()->user()->role == 'admin')
                    
                 <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Admin</a>
                                <ul>
                                    <li><a href="about.html">Pemesanan</a></li>
                                    <li><a href="products.html">Produk</a></li>
                                    <li><a href="single-product.html">kategori</a></li>
                                    <li><a href="contact.html">User</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#men">About us</a></li>
                            <li class="scroll-to-section"><a href="#women">Team</a></li>
                            <li class="scroll-to-section"><a href="#kids">INI ADMIN</a></li>
                            <li class="scroll-to-section"><a href="#explore">Logout</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
                    
                @else
                    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="/assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Product</a>
                                <ul>
                                    <li><a href="#handphone">Handphone</a></li>
                                    <li><a href="#tablet">Tablet</a></li>
                                    <li><a href="#laptop">Laptop</a></li>
                                    <li><a href="#earphone">Earphone</a></li>
                                    <li><a href="#camera">Camera</a></li>
                                    <li><a href="/products">ALL PRODUK</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="/about">About Us</a></li>
                            <li class="scroll-to-section"><a href="/contact">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="#kids">INI BUKAN ADMIN</a></li>
                            <li class="scroll-to-section"><a href="#explore">Login</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @endif

    <div class="container mt-4">
        @yield('content1')
    </div>

    <div class="container mt-4">
        @yield('content2')
    </div>

    <div class="container mt-4">
        @yield('content3')
    </div>

    <div class="container mt-4">
        @yield('content4')
    </div>

    <div class="container mt-4">
        @yield('content5')
    </div>

    <div class="container mt-4">
        @yield('content6')
    </div>

    <div class="container mt-4">
        @yield('content7')
    </div>

    <div class="container mt-4">
        @yield('content8')
    </div>
     <!-- ***** Footer Start ***** -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="/assets/images/white-logo.png" alt="Gadget-in">
                        </div>
                        <ul>
                            <li><a href="#">Depok, POSNAD</a></li>
                            <li><a href="#">Gadget-IN@company.com</a></li>
                            <li><a href="#">083927732</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Handphone</a></li>
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Laptop</a></li>
                        <li><a href="#">Earphone</a></li>
                        <li><a href="#">Camera</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                        <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="/assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/assets/js/owl-carousel.js"></script>
    <script src="/assets/js/accordions.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <script src="/assets/js/scrollreveal.min.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imgfix.min.js"></script> 
    <script src="/assets/js/slick.js"></script> 
    <script src="/assets/js/lightbox.js"></script> 
    <script src="/assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="/assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>