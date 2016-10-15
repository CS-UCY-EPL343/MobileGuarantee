<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MicroProMobileQ</title>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">

    </head>
    <body>

        <!-- insert navbar on -->

        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top">
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
                                <img class="img-responsive" src="pic/logo2.png" alt="Logo" style="width:260px;height:50px" >
                            </div>

                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Home</a></li>    <!--<li class="active"><a href="#">Home</a></li>-->
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#contact">Contact Us</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <!--<li class="dropdown-header">Info</li>-->
                                        <li><a href="#">Purchases & Quarantee </a></li>
                                        <li role="separator" class="divider"></li>
                                        <li> <a class="btn btn-danger btn-group-vertical" href="#" role="Logout">Sign out</a></li>

                                    </ul>
                                </li>

                                <!-- <li> <a class="btn btn-info" href="#" role="Login"> Login</a></li>-->

                                <li>
                                    <form class="navbar-form navbar-right"> 
                                        <button type="submit" class="btn btn-info">Sign in</button>
                                    </form>
                                </li>
                                <li><form class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span> Search
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <form class="navbar-form navbar-right"> 
                                        <button class="btn btn-danger btn-group-sm" data-toggle="tooltip" data-placement="bottom" title="You don't have any purchases yet."><span class="glyphicon glyphicon-shopping-cart"></span> <span class="items">0</span></button>
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
                        <img class="first-slide" src="pic/carusel.png" alt="First slide" style="width:1130px;height:300px" >
                        <div class="carousel-inner">
                            <h1>Welcome to the shop</h1>
                            <h4> On our ship you can find Everything! </h4>
                            <p><a class="btn btn-info btn-lg btn-primary" href="#" role="button"> Shop now! </a></p>
                        </div>
                    </div>
                </div>
                <div class="item">

                    <div class="container">
                        <img class="second-slide" src="pic/carusel2.png" alt="Second slide" style="width:1120px;height:300px">
                        <div class="carousel-inner">
                            <h1>Try our new Purchase & Warranty System!</h1>
                            <h4>All eligible customers can have free account!</h4>
                            <p><a class="btn btn-info btn-lg btn-primary" href="#" role="button">Sing In! </a></p>
                        </div>
                    </div>
                </div>
                <div class="item">

                    <div class="container">
                        <img class="third-slide" src="pic/carusel3.png" alt="Third slide" style="width:1130px;height:300px">
                        <div class="carousel-inner">
                                    <h1>We Can Fix it!</h1>
                                    <h4>In our shop we can fix almost every pc, laptop, mobile, consoles or other micro electronic device.</h4>
                                    <p><a class="btn btn-info btn-lg btn-primary" href="#" role="button">Contact Us</a></p>   
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
        </div><!-- /.carousel -->

        <!-- Marketing messaging and featurettes
    ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

       
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

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!--FAST-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="../../assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    </body>
</html>
