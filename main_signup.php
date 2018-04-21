<?php include('register.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Schaulin</title>
<meta name="description" content="" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/modern-business.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
<link href="font-icomoon/style.css" rel="stylesheet" type="text/css">
<link href="font-awesome/css/font-vallmo.css" rel="stylesheet"
	type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-inverse navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">
		<div class="row">
			<br> <br> <br>
			<div class="col-lg-12" style="text-align: center;">
				<table width="300" border="0" align="center" cellpadding="0"
					cellspacing="1" bgcolor="#CCCCCC">
					<tr>
						<form name="form1" method="post" action="main_signup.php">
							<?php include('errors.php'); ?>
							<td>
								<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
									<tr>
										<td colspan="3"><strong>Sign up </strong></td>
									</tr>
									<tr>
										<td width="150">User name:</td>
										<td width="294">
											<input name="myusername" type="text" id="myusername">
										</td>
									</tr>
									<tr>
										<td width="150">User email:</td>
										<td width="294">
											<input name="myuseremail" type="text" id="myuseremail">
										</td>
									</tr>
									<tr>
										<td width="150">Password:</td>
										<td width="294">
											<input name="mypassword" type="password" id="mypassword">
										</td>
									</tr>
									<tr>
										<td width="150">Company name:</td>
										<td width="294">
											<input name="mycompany" type="text" id="mycompany">
										</td>
									</tr>
									<tr>
										<td>placeID</td>
										<td>
											<input name="myplaceid" type="text" id="myplaceid">
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
											<input type="submit" name="Submit" value="Submit">
										</td>
									</tr>
								</table>
							</td>
						</form>
					</tr>
				</table>
			</div>
			<div class="col-lg-12">
				<h2>Locate your placeID by finding your company below</h2>
				<iframe	src="https://google-developers.appspot.com/maps/documentation/javascript/examples/full/places-placeid-finder"
					width="100%" height="600" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</body>
<!-- Footer -->
<footer style="background-color: #216496;">
	<div class="row">
		<div class="col-lg-12">
			<div class="col-md-2"></div>
			<div class="col-md-3">h</div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
		</div>
	</div>
</footer>
</html>