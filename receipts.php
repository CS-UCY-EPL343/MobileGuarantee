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
                                        <?php
                                        echo " &emsp; &copy ";
                                        echo date("Y");
                                        echo "  MicroPro Systems,Inc";
                                        ?>
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
            <h2>User Purchases & Guarantee </h2>
            <p>You can request Original receipt from the Store Via email</p>  

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Receipt No.</th>
                        <th>Description</th>
                        <th>Guarantee</th>
                        <th>Price (&euro;)</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1234</td>
                        <td>usb 3.1 </td>
                        <td>lifetime </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>4567</td>
                        <td>3d Printer HP</td>
                        <td>lifetime </td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>8612</td>
                        <td>keyboad microsoft</td>
                        <td>lifetime </td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>4545</td>
                        <td>usb 3.1 Cabletech</td>
                        <td>lifetime </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>2121</td>
                        <td>3d Printer epson</td>
                        <td>lifetime </td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>2442</td>
                        <td>keyboad</td>
                        <td>lifetime </td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>4214</td>
                        <td>usb 3.1 </td>
                        <td>lifetime </td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>4642</td>
                        <td>3d Printer pro</td>
                        <td>lifetime </td>
                        <td>1200</td>
                    </tr>
                    <tr>
                        <td>5785</td>
                        <td>keyboad</td>
                        <td>lifetime </td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>
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