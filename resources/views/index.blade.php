<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BEAUTY - Online</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
             <div class="navbar-header page-scroll"> 
                
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="index.html">WEBAPPLAYERS</a> -->
                    <a  href="index.html">
                    <img src="{{ asset('img/logofinal.jpg') }}" alt="logo" style="width:50px;height:50px;border-radius:2em;"/>
                    <h6>Sup Hair Belle</h6>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav navbar-right">
                     <li><a class="page-scroll" href="#page-top" style="color:gray;">Home</a></li>
                     <!-- Menu déroulant pour coiffure -->
                      <li class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:white;margin-top:20px;">Coiffure
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Homme</a></li>
                                <li><a href="#">Femmes</a></li>
                                <li><a href="#">Enfants</a></li>
                            </ul>
                        </li>
                         <!-- Menu déroulant pour Vêtement -->
                      <li class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:white;margin-top:20px;">Vêtements
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Homme</a></li>
                                <li><a href="#">Femmes</a></li>
                                <li><a href="#">Enfants</a></li>
                            </ul>
                        </li>
                         <!-- Menu déroulant pour Cosmetique -->
                      <li class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:white;margin-top:20px;">Cosmétique
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Homme</a></li>
                                <li><a href="#">Femmes</a></li>
                                <li><a href="#">Enfants</a></li>
                            </ul>
                        </li>
                        <li><a class="page-scroll" href="#pricing" style="color:gray;">About</a></li>
                        <li><a class="page-scroll" href="#contact" style="color:gray;">Contact</a></li>
                           <!-- Menu déroulant pour Langues -->
                      <li class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" style="background-color:white;margin-top:20px;"><img src="{{ asset('img/french-flag.png') }}" alt="logo" style="width:20px;height:20px;border-radius:2em;"/>&nbsp;Français
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#"><img src="{{ asset('img/british-flag.jpg') }}" alt="logo" style="width:25px;height:25px;border-radius:2em;"/>&nbsp;English</a></li>
                               
                            </ul>
                        </li>
                    </ul> 
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel" style="margin-top:100px;">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <h1>We craft<br/>
                        brands, web apps,<br/>
                        and user interfaces<br/>
                        we are IN+ studio</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    <p>
                        <a class="btn btn-lg btn-primary" href="#" role="button">READ MORE</a>
                        <a class="caption-link" href="#" role="button">Inspinia Theme</a>
                    </p>
                </div>
                <div class="carousel-image wow zoomIn">
                    <!-- <img src="{{ asset('img/landing/laptop.png') }}" alt="laptop"/> -->
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <h1>We create meaningful <br/> interfaces that inspire.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="container services">
<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" style="width:500px;margin-left:300px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search" style="font-size:150%;margin-left:10px;"></i></button>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-filter" style="font-size:150%;margin-left:10px;"></i></button>
    </form>
</section>

<!-- various products in chart -->
<section id="features" class="container services">
<h1>Top articles</h1>

<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="row">
            <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="row">
            <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin-left:50px;">
                    <div class="ibox">
                        <div class="ibox-content product-box">

                            <div class="product-imitation">
                                [ INFO ]
                            </div>
                            <div class="product-desc">
                                
                                <small class="text-muted"><i class="fa fa-tag"></i>&nbsp;&nbsp;Category</small>
                                <a href="#" class="product-name"> Product</a>
                                <div class="small m-t-xs">
                                    Many desktop publishing packages and web page editors now.
                                </div>
                                <div class="m-t text-righ">
                                    <a href="#" class="btn btn-xs btn-outline btn-primary" style="margin-left:-25px;">10,000 FCFA</a> 
                                    <div class="row" style="margin-left:120px;margin-top:-30px;">
                                      <!-- eye icon -->
                                     <a href=""><i class="fa fa-eye" style="font-size:150%;margin-left:10px;"></i></a> 
                                    <!-- opened heart -->
                                    <a href=""><i class="fa fa-heart-o" style="font-size:150%;margin-left:10px;"></i></a>
                                    <!-- shopping cart icon -->
                                    <a href=""><i class="fa fa-shopping-cart" style="font-size:150%;margin-left:10px;"></i></a>
                                    </div>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
           

        </div>

        </section>  

<!-- Mainly scripts -->
<script src="{{ asset('js/jquery-2.1.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('js/inspinia.js') }}"></script>
<script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('js/plugins/wow/wow.min.js') }}"></script>


<script>

    $(document).ready(function () {

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>
</html>
