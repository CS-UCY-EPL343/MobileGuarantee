<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>Receipt Table</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
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


                            <form class="navbar-form navbar-nav">
                                <!--<button class="btn btn-info ">Back</button>-->

                                <button type="button" onclick="history.back(-1)" class="btn btn-info">
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
            <h2>Αγορές & Εγγυήσεις </h2>
            <p>Μπορείτε να ζητήσετε απόδειξη καταστήματος με e-mail </p>  
            <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()"> 
                <table class="table table-hover">
                    <tr>  
                        <th>Receipt Number</th>
                        <th>Product Serial Number</th>
                        <th>Description</th>
                        <th>Quarantee until</th>
                        <th>Price (&euro;)</th>
                    </tr>  
                    <tr ng-repeat="x in names">
                        <td>{{x.receiptNo}}</td>  
                        <td>{{x.serialNo}}</td>
                        <td>{{x.description}}</td>
                        <td>{{x.expiryDate}}</td> 
                        <td>{{x.price}}</td>  
                    </tr>  


                </table>
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
<script>
    
    var app = angular.module("myapp", []);
    app.controller("usercontroller", function ($scope, $http) {
        $scope.displayData = function () {
            $http.get("Welcome/sect")
                    .success(function (data) {
                        $scope.names = data;
                    });
        }
    });
</script>