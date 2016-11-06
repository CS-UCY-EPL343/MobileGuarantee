<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>MicroPro Login</title>

        <!-- Bootstrap core CSS -->
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     
        <![endif]-->

        <style>
            body{
                padding-top: 50px;
            }
        </style>
    </head>

    <body>


        <?php
        $servername = "localhost";
        $username = "user";
        $password = "user123";

// Create connection
        $conn = new mysqli($servername, $username, $password);

// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        ?> 
        
        <?php
        
        $dbname = "MicroPro";
       

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "INSERT INTO user (username,incCustomerNumber,name,surname,dob,address,email,telNumber,password)
VALUES ('ahm123', '1', 'ahmed','ali','2013-03-17','dfrgf','john@example.com','999999','afxanistan')";

         
         
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
        ?>
        

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.css">
        <!--  <div class="container">
              <div class="row">
                  <div class="com-md-12">
                      <div class="notification login-alert">
                          Please Enter Your Username And Password!
                      </div>
                      <div class="notification notification-success logged-out">
                          You logged out successfully!
                      </div>
                      <div class="well welcome-text">
                          Hello, to access our app please <button class="btn btn-default btn-login">Log in</button> or <button class="btn btn-default btn-register" disabled="disabled">Register</button>
                      </div>
                  </div>
              </div>
          </div>-->
        <div class="center-block">
            <div class="container-fluid">
                <div class="row center-block">
                    <div class="col-md-12">
                        <div class="well login-box">
                            <form action="">
                                <legend>
                                    <div class="col-md-6">
                                        <div class="container-fluid">
                                            <img class="img-responsive" src="pic/logo2.png" alt="Logo" style="width:215px;height:38px" >
                                        </div>
                                    </div>
                                    Login
                                </legend>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input value='' id="username" placeholder="Username" type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" value='' placeholder="Password" type="text" class="form-control" />
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-danger btn-cancel-action">Cancel</button>
                                    <input type="submit" class="btn btn-info btn-login-submit" value="Login" />
                                </div>
                            </form>
                        </div>
                        <!--
                        <div class="logged-in well">
                            <h1>You are loged in! <div class="pull-right"><button class="btn-logout btn btn-danger"><span class="glyphicon glyphicon-off"></span> Logout</button></div></h1>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <footer><!-- FOOTER -->
            <div class="container">

<?php
echo "&copy ";
echo date("Y");
echo "  MicroPro Systems,Inc";
?>
            </div>
        </footer>

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>