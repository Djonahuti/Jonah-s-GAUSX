<?php
session_start();
ob_start();
?>

<html>
<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>

      <script src="js/frag2.js"></script>

</head>

<?php
	
      $var=$_GET['var'];
	$_SESSION['a'][7]=$_GET['var'];	
      $_SESSION['layer3']=$_GET['var'];

?>

<body>
<!--Main Header-->
<nav class="navbar navbar-default" style="background-color:#001a00;">
        <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                    </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                          <li class="active">
                                <a href="../user/index.html">Home</a>
                          </li>
                          <li>
                                <a href="../user/about.html">About Us</a>
                          </li>
                          <li>
                                <a href="#">Service</a>
                          </li>
                          <li>
                                <a href="../user/contact.html">Contact Us</a>
                          </li>                                             
                    </ul>
              </div>
              <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

<!-- change slice -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_form">
				<div class="left_grid_info">
                              <h1>Graphical Password Update or Recovery</h1>
					<p>Phase Five of Graphical password Update/Recovery.</p><br>
					<img class="im1" src="../images/cover.jpg" height="270" width="370">
				</div>
			</div>
			<div class="login_info">
				<h2>Update Graphical Password</h2>
                <p class="account1">Following is the 2nd image you chose.</p>
                <img src=<?php echo $var; ?> onload="changeIt(this)" height="100" width="100">
                <p class="account">Select one from below four parts.</p>
				<center><div class="test" id="test"></div></center>
			</div>
		</div>
	</div>

</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Jonah David Utibe 2021</p>
      </div>
      <!-- /.container -->
    </footer>
                                  
      <script src="plugins/jquery.js"></script>
      <script src="plugins/bootstrap.min.js"></script>
      <script src="plugins/bootstrap-select.min.js"></script>
                                                      
      <script src="plugins/validate.js"></script>
      <script src="plugins/wow.js"></script>
      <script src="plugins/jquery-ui.js"></script>
      <script src="js/script.js"></script> 

</body>

</html>

