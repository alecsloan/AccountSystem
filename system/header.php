<?php
session_start();
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Website</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
				<a class="navbar-brand" href="index.php">Website</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php#home">Home</a></li>
					<li><a href="index.php#about">About</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				<?php if (empty($_SESSION)){ ?>
                    <li class="dropdown" id="register">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInX" style="width: 300px" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Register</b></h3></div>
								<form id="ajax-register-form" action="system/signup.php" method="post" role="form" autocomplete="off">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-xs-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
											</div>
										</div>
									</div>
								</form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown" id="login">
                        <a href="login.php" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu animated slideInRight" style="width: 300px" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="system/login.php" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="system/reset.php" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </ul>
                    </li>
                <?php
                } if (!empty($_SESSION)){ ?>
                    <li class="dropdown" id="account">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInX" style="width:300px" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b><?php echo $_SESSION['Email']; ?></b></h3></div>
                                <br><br><br>
                                <a class="pull-left" href="account.php"><button class="btn" style="color:white; background:#101010;">My Account</button></a>
                                <a class="pull-right" href="system/logout.php"><button class="btn btn-danger" style="color:white; ">Logout</button></a>
                            </div>
                        </ul>
                    </li>
                <?php } ?>
                </ul>
                
			</div>
		</div>
	</nav>
	<div class="col-sm-12 col-lg-offset-1 col-lg-10" style="padding-top:70px">
	    