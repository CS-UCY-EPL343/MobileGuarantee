<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Account Informations</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>



        <!-- insert navbar on -->

        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="#">Project name</a>-->


                            <form class="navbar-form navbar-nav">
                                <!--<button class="btn btn-info ">Back</button>-->

                                <button type="button" class="btn btn-info">
                                    <span class="glyphicon glyphicon-backward"></span> Back
                                </button>
                            </form>

                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><form class="navbar-form navbar-left">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="button" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span> Search
                                        </button>
                                        
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="container">
            <p> &emsp; &emsp; </p>
            <p> &emsp; &emsp; </p>
            <h2>Πληροφορίες Εταιρίας</h2>
            <p>Εδώ γίνονται αλλαγές</p>  
            <p> &emsp; &emsp; </p>
            <form>
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            Όνομα Εταιρίας
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>

                &emsp;
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            Α.Φ.Μ Εταιριας
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>

               
                &emsp;
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            E-mail
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>
                
                &emsp;
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            Διεύθυνση
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>

                &emsp;
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            Password
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>
                &emsp;
                <div class="row">
                    <div class="col-xs-5">
                        <output class="form-control">
                            Τηλέφωνο
                        </output>
                    </div>
                    <div class="col-xs-7">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-success">Change</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>


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
