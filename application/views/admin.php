<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
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


        <link href="carousel.css" rel="stylesheet">
        <style>
            body{
                padding-top: 50px;
            }
        </style>
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
                            <div class="container-fluid"> 
                                <a href="#">
                                    <img class="img-responsive" src="../pic/logo2.png" alt="Logo" style="width:220px;height:40px" >
                                </a>
                            </div>

                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <!--<li class="dropdown-header">Info</li>-->
                                        <li><a href="#">Help Line</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li> <a class="btn btn-danger btn-group-vertical" href="adminHome/logout" role="Logout">Sign out</a></li>

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

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!--Tabs-->
        <div class="container">
            <h3>Administrator</h3>

            <ul class="nav nav-divider">
                <li class="active"><a href="#stay_her1" name="stay_her1" data-toggle="collapse" data-target="#collapse1" >Κύριες Λειτουργίες</a>
                    <div id="collapse1" class="collapse">

                        <p> &emsp; &emsp; </p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search or Delete Product Quarantee">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-info">
                                    <span class="glyphicon glyphicon-search"></span> Search Quarantee
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-remove"></span> Delete Quarantee
                                </button>

                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-remove"></span> Delete Product
                                </button>
                            </div>
                        </form>
                        <p> &emsp; &emsp; </p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search or Delete User">
                            </div>
                            <button type="button" class="btn btn-info">
                                <span class="glyphicon glyphicon-search "></span> Search User
                            </button>
                            <button type="button" class="btn btn-warning">
                                <span class="glyphicon glyphicon-remove"></span> Delete User
                            </button>

                            <p> &emsp; &emsp; </p>
                            <li class="active"><a href="#stay_her2" name="stay_her2" data-toggle="collapse" data-target="#collapse1_2" >Χρήστες</a>
                                <div id="collapse1_2" class="collapse">

                                    <p> &emsp; &emsp; </p>
                                    <div class="container">
                                        <h2>Ιδιότες</h2>
                                        <p></p>            
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td>July</td>
                                                    <td>Dooley</td>
                                                    <td>july@example.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="pull-right"><a href="">Back to Top</a></p>
                                    </div>

                                    <div class="Εταιρίες">
                                        <h2>Εταιρίες</h2>
                                        <p></p>            
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John</td>
                                                    <td>Doe</td>
                                                    <td>john@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td>Mary</td>
                                                    <td>Moe</td>
                                                    <td>mary@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td>July</td>
                                                    <td>Dooley</td>
                                                    <td>july@example.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="pull-right"><a href="#">Back to Top</a></p>
                                    </div>
                                </div>
                            </li>

                            <p> &emsp; &emsp; </p>
                        </form>


                    </div>
                </li>

                <!--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>-->


                <li><a href="#stay_her3" name="stay_her3" data-toggle="collapse" data-target="#collapse2">Εισαγωγή Ιδιότη</a>
                    <div id="collapse2" class="collapse">
                        <p> &emsp; &emsp; </p>
                        <form>

                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        username
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>
                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Αρ.Πελάτη 
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>
                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Όνομα
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>

                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Επίθετο
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>

                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Ημ.Γένησης
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

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

                                    </div>
                                </div>
                            </div>

                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Καταχώρηση
                                    </output>
                                </div>
                                <div class="col-xs-7">

                                    <form class="navbar-form navbar-right"> 
                                        <button type="submit" class="btn btn-info">OK</button>
                                    </form>

                                </div>
                            </div>

                            &emsp;

                        </form>
                    </div>
                </li>


                <li><a href="#stay_her4" name="stay_her4"data-toggle="collapse" data-target="#collapse3">Εισαγωγή Εταιρίας</a>
                    <div id="collapse3" class="collapse">

                        <p> &emsp; &emsp; </p>
                        <form>
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        username
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>
                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Αύξων Αρ.
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>

                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Όνομα
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

                                    </div>
                                </div>
                            </div>

                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Α.Φ.Μ
                                    </output>
                                </div>
                                <div class="col-xs-7">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="">

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

                                    </div>

                                </div>
                            </div>


                            &emsp;
                            <div class="row">
                                <div class="col-xs-5">
                                    <output class="form-control">
                                        Καταχώρηση
                                    </output>
                                </div>
                                <div class="col-xs-7">

                                    <form class="navbar-form navbar-right"> 
                                        <button type="submit" class="btn btn-info">OK</button>
                                    </form>

                                </div>
                            </div>
                            &emsp;

                        </form>
                    </div>
                </li>
            </ul>
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

