<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>MicroPro</title>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet" />
       
    </head>
    <body>
        
        <div class="navbar-wrapper">
      <div class="container-fluid">

        <nav class="navbar navbar-inverse navbar-static-top"> <!---->
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Welcome to MicroPro</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
        
        <!--
        <div class ="navbar-default navbar-static-top"> 
            <div class="container ">
                
                <a href ="#" class="navbar-brand">Welcome to Micro Pro</a>
                
                <button class ="navbar-toggle" data-toggle ="collapse" data-target=".navHeaderCollapse">
                fathi
                
                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href ="#">Home</a>
                            
                         </li>
                        </ul>
                    </div>
                </button>
            </div>
        </div>
        -->
        
        
        <div class="container-fluid"> <!-- make container-->
            <div class="row well"> <!-- make row-->
                <div class ="col-md-4">
                    <div class="row well-lg">
                     <img class="img-responsive" src="pic/logo2.png" alt="Chania" style="width:300px;height:60px"> 
                    </div> 
                </div>    
                <div class ="col-md-8">
              
                </div> 
            </div>
        </div>
        
        <?php
        echo '<p>Hello World</p>'; 
        ?>
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
