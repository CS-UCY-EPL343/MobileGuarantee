<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MicroPro Home Page</title>
        <link type="text/css" href="../../css/bootstrap.min.css" rel="stylesheet" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
       
        <!-- Bootstrap core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/bootstrap-theme.css" rel="stylesheet">
        
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!-- THIS LINE -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script href="../../js/bootstrap.js" ></script>
        <script href="../../js/bootstrap.min.js" ></script>
        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script href="../../js/npm.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
        <style>
            body{
                padding-top: 50px;
                padding-left: 5px;
            }
        </style>
    </head>
    <body>

        <!-- insert navbar on -->

        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar-default navbar-fixed-top">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#">Project name</a>-->
                            <div class="container-fluid"> 
                                <a href="#">
                                    <img class="img-responsive" src="../pic/logo2.png" alt="Logo" style="width:220px;height:40px" >
                                </a>
                            </div>

                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Home</a></li>    <!--<li class="active"><a href="#">Home</a></li>-->
                                <li><a href='AboutC/index'>About Us</a></li>
                                <li><a href='ContactC/index'>Contact Us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <!--<li class="dropdown-header">Info</li>-->
                                        <li><a href="Welcome">Purchases & Quarantee </a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="infoCtrl">Account Information</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li> <a class="btn btn-danger btn-group-vertical" href="home/logout" role="Logout">Sign out</a></li>

                                    </ul>
                                </li>

                                <!-- <li> <a class="btn btn-info" href="#" role="Login"> Login</a></li>-->

                                <li>
                                    
                                    <form class="navbar-form navbar-right"> 
                                        <button type="submit" href="http://localhost/MobileGuarantee/" class="btn btn-info">Sign in</button>
                                    </form>
                                </li>
                                <li><form class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                    </form>
                                </li>

                                <li>
                                    <form class=" navbar-form navbar-right" > 
                                        <button type=submit class="btn btn-danger btn-group-sm" data-toggle="tooltip" data-placement="bottom" title="You don't have any purchases yet.">
                                            <span class="glyphicon glyphicon-shopping-cart"></span> 
                                            <span class="items">0</span></button>
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Carousel
        ================================================== -->
        <div class="container">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">

                            <div class="container">
                                <img class="first-slide" src="../pic/carusel.png" alt="First slide" style="width:1130px;height:300px" >
                                <div class="carousel-inner">
                                    <h2>Welcome to Our Shop!</h3>
                                        <h6> In our shop you can find Everything! Most common Electronic Devices is available! </h6>


                                        <p><a class="btn btn-info btn-primary" href="#" role="button"> Shop now! </a></p>


                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="container">
                                <img class="second-slide" src="../pic/carusel2.png" alt="Second slide" style="width:1130px;height:300px">
                                <div class="carousel-inner">
                                    <h2>Try our new System!</h2>
                                    <h6>All eligible customers can have free account!Try our Quarantee System!</h6>
                                    <p><a class="btn btn-info  btn-primary" href="http://localhost/MobileGuarantee/" role="button">Sing In! </a></p>
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">

                            <div class="container">
                                <img class="third-slide" src="../pic/carusel3.png" alt="Third slide" style="width:1120px;height:300px">
                                <div class="carousel-inner">
                                    <h2>We Can Fix it!</h2>
                                    <h6>In our shop we can fix almost every pc, laptop, mobile, consoles or other micro electronic device.</h6>
                                    <p><a class="btn btn-info  btn-primary" href="#" role="button">Contact Us</a></p>  
                                    <p> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!-- /.carousel -->
    </div>


    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <!-- START THE FEATURETTES -->

    <div class ="container">
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">

                <h2 class="featurette-heading">Start Shopping Now! <span class="text-muted">Great values.</span></h2>
                <p class="lead">You Can veiw our items by scrolling down or hit on the Blue Basket icon near to that text. (You must Sign In to Buy) </p>
            </div>
            <div class="col-md-5">
                <a href="#Store">
                    <img class="featurette-image img-responsive center-block" src="../pic/shopping_basket_add_98581.jpg" alt="Generic placeholder image">
                </a>
            </div>

        </div>


    </div>


    <div class ="container" categories >    

        <a name="Store"><p> &emsp;</p> </a>
        <h3> Shop</h3>
        <ul class="nav nav-divider">

            <li class="active"><a href="#stay_here" name="stay_here" data-toggle="collapse" data-target="#collapse">Computers</a>
                <div id="collapse"  class="collapse" class="active">

                    <form>

                        <div class="row">

                            <div class="col-lg-4">
                                <p> &emsp; &emsp; </p>
                                <form>
                                    <div class = "container ">
                                        <img class="img-rounded" alt="Cinque Terre" src="../pic/alienware.png" alt="Logo" style="width:350px;height:400px" >
                                        </form>

                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <p> &emsp; &emsp; </p>
                                <output class="form-control">
                                    Alienware Tower <span style="color:green">&euro; 2000</span>
                                </output>
                            </div>

                            <div class="col-lg-1">

                                <p> &emsp; &emsp; </p>
                                <button type="Buy" class="btn btn-info">Buy</button>

                            </div>
                        </div>
                        &emsp;

                    </form>
                </div>
            </li>

            <li><a href="#stay_here1" name="stay_here1" data-toggle="collapse" data-target="#collapse2">Tablets</a>

                <div id="collapse2"  class="collapse" class="active">
                    <p> &emsp; &emsp; </p>
                    <form>

                        <div class="row">

                            <div class="col-lg-4">
                                <p> &emsp; &emsp; </p>
                                <form>
                                    <div class = "container ">
                                        <img class="img-rounded" alt="Cinque Terre" src="../pic/tablet.png" alt="Logo" style="width:350px;height:400px" >
                                        </form>

                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <p> &emsp; &emsp; </p>
                                <output class="form-control">
                                    Microsoft Surface <span style="color:green">&euro; 1000</span>
                                </output>
                            </div>

                            <div class="col-lg-1">

                                <p> &emsp; &emsp; </p>
                                <button type="Buy" class="btn btn-info">Buy</button>

                            </div>
                        </div>
                        &emsp;


                    </form>
                </div>
            </li>

            <li><a href="#stay_here2" name="stay_here2" data-toggle="collapse" data-target="#collapse3">Network</a>

                <div id="collapse3"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                        <div class="row">

                            <div class="col-lg-4">
                                <p> &emsp; &emsp; </p>
                                <form>
                                    <div class = "container ">
                                        <img class="img-rounded" alt="Cinque Terre" src="../pic/router.png" alt="Logo" style="width:350px;height:400px" >
                                        </form>

                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <p> &emsp; &emsp; </p>
                                <output class="form-control">
                                    Linksys Router E2400 <span style="color:green">&euro; 50</span>
                                </output>
                            </div>

                            <div class="col-lg-1">

                                <p> &emsp; &emsp; </p>
                                <button type="Buy" class="btn btn-info">Buy</button>

                            </div>
                        </div>
                        &emsp;

                    </form>
                </div>
            </li>

            <li><a href="#stay_here3" name="stay_here3" data-toggle="collapse" data-target="#collapse4">Consumables</a>

                <div id="collapse4"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                      <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/ink.png" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                Epson Bottle Ink Black<span style="color:green">&euro; 8</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;


                    </form>
                </div>
            </li>

            <li ><a href="#stay_here4" name="stay_here4" data-toggle="collapse" data-target="#collapse5">Software</a>

                <div id="collapse5"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                        <div class="row">

                            <div class="col-lg-4">
                                <p> &emsp; &emsp; </p>
                                <form>
                                    <div class = "container ">
                                        <img class="img-rounded" alt="Cinque Terre" src="../pic/win10.png" alt="Logo" style="width:350px;height:400px" >
                                        </form>

                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <p> &emsp; &emsp; </p>
                                <output class="form-control">
                                    Windows 10 Pro <span style="color:green">&euro; 200</span>
                                </output>
                            </div>

                            <div class="col-lg-1">

                                <p> &emsp; &emsp; </p>
                                <button type="Buy" class="btn btn-info">Buy</button>

                            </div>
                        </div>
                        &emsp;

                    </form>
                </div>
            </li>

            <li><a href="#stay_here5" name="stay_here5" data-toggle="collapse" data-target="#collapse6">Telecommunications</a>

                <div id="collapse6"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>
                        <div class="row">

                            <div class="col-lg-4">
                                <p> &emsp; &emsp; </p>
                                <form>
                                    <div class = "container ">
                                        <img class="img-rounded" alt="Cinque Terre" src="../pic/apple.png" alt="Logo" style="width:350px;height:400px" >
                                        </form>

                                    </div>
                            </div>

                            <div class="col-lg-3">
                                <p> &emsp; &emsp; </p>
                                <output class="form-control">
                                    Apple Iphone 7 plus  <span style="color:green">&euro; 1000</span>
                                </output>
                            </div>

                            <div class="col-lg-1">

                                <p> &emsp; &emsp; </p>
                                <button type="Buy" class="btn btn-info">Buy</button>

                            </div>
                        </div>
                        &emsp;

                    </form>
                </div>
            </li>

            <li><a href="#stay_here6" name="stay_here6" data-toggle="collapse" data-target="#collapse7">Sound & Vision</a>

                <div id="collapse7"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                       <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/samsung_tv.png" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                Samsung TV 47" <span style="color:green">&euro; 2000</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>


            <li><a href="#stay_here7" name="stay_here7" data-toggle="collapse" data-target="#collapse8">E-Cigar</a>

                <div id="collapse8"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>
<div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/ecigar.jpg" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                E-cigar JoyTech <span style="color:green">&euro; 150</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>

            <li ><a href="#stay_here8" name="stay_here8" data-toggle="collapse" data-target="#collapse9">Storage</a>

                <div id="collapse9"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                        <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/ssd.png" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                SSD Disk 480 GB <span style="color:green">&euro; 170</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>

            <li ><a href="#stay_here9" name="stay_here9" data-toggle="collapse" data-target="#collapse10">Peripherals & Devices</a>

                <div id="collapse10"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                       <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/giphy.gif" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                Keyboard <span style="color:green">&euro; 150</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>

            <li ><a href="#stay_here10" name="stay_here10" data-toggle="collapse" data-target="#collapse11">Energy</a>

                <div id="collapse11"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                      <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/power_supply.png" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                Power Supply <span style="color:green">&euro; 30</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>

            </li>

            <li ><a href="#stay_here11" name="stay_here11" data-toggle="collapse" data-target="#collapse12">DIY</a>

                <div id="collapse12"  class="collapse">
                    <p> &emsp; &emsp; </p>
                    <form>

                      <div class="row">

                        <div class="col-lg-4">
                            <p> &emsp; &emsp; </p>
                            <form>
                                <div class = "container ">
                                    <img class="img-rounded" alt="Cinque Terre" src="../pic/cables.png" alt="Logo" style="width:350px;height:400px" >
                                    </form>

                                </div>
                        </div>

                        <div class="col-lg-3">
                            <p> &emsp; &emsp; </p>
                            <output class="form-control">
                                Cable Lighting Male USB 2.0 <span style="color:green">&euro; 20</span>
                            </output>
                        </div>

                        <div class="col-lg-1">
                            
                            <p> &emsp; &emsp; </p>
                            <button type="Buy" class="btn btn-info">Buy</button>

                        </div>
                    </div>
                    &emsp;

                    </form>
                </div>
            </li>

        </ul>







    </div>

</div>




<footer><!-- FOOTER -->
    <div class="container">
        <p> &emsp; &emsp; </p>
        <p class="pull-right"><a href="#">Back to Top</a></p>
        <?php
        echo "&copy ";
        echo date("Y");
        echo "  MicroPro Systems,Inc";
        ?>
    </div>
</footer>



</body>
</html>
