<?php
	// session_start();
	include('register.php');

	if (!isset($_SESSION['userid'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: main_login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['userid']);
		header('location: index.php');
	}
	
	$query = "SELECT * FROM users_tbl where userid=".$_SESSION['userid'];
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);
	if ($user) {
		$username = $user['username'];
		$email = $user['email'];
		$companyname = $user['company_name'];
		$address = $user['address'];
		$phone = $user['phone'];
		$placeid = $user['placeid'];
		$date = date('Y-m-d H:i:s');
	}
?>
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
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="btn btn-default" href="profile.php?logout='1'"> Log
							out</a></li>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>


	<!-- Page Content -->
	<div class="container">

		<!-- Page Heading/Breadcrumbs -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Sidebar Page <small>Subheading</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active">Sidebar Page</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->

		<!-- Content Row -->
		<div class="row">
			<!-- Sidebar Column -->
			<div class="col-md-3">
				<div class="list-group">
					<a href="profile.php" class="list-group-item">Profile</a> <a
						href="import.php" class="list-group-item">Import e-mail</a> <a
						href="subscription.php" class="list-group-item">Subscription</a>
				</div>
			</div>
			<!-- Content Column -->
			<div class="col-md-9">
				<h2>Section Heading</h2>
				<table width="100%" border="0" align="center" cellpadding="0"
					cellspacing="1" bgcolor="#CCCCCC">
					<tr>
						<form name="form1" method="post" action="profile.php">
							<?php include('errors.php'); ?>
							<td>
								<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
									<tr>
										<td width="150">User name:</td>
										<td width="294">
											<input value="<?php echo $username; ?>" name="myusername"  type="text" id="myusername">
										</td>
									</tr>
									<tr>
										<td width="150">User email:</td>
										<td width="294">
											<input value="<?php echo $email; ?>" name="myuseremail"  type="text" id="myuseremail">
										</td>
									</tr>
									<tr>
										<td width="150">Company name:</td>
										<td width="294">
											<input value="<?php echo $companyname; ?>" name="mycompany" type="text" id="mycompany">
										</td>
									</tr>
									<tr>
										<td>placeID</td>
										<td>
											<input value="<?php echo $placeid; ?>" name="myplaceid" type="text" id="myplaceid">
										</td>
									</tr>
									<tr>
										<td>Address</td>
										<td>
											<input value="<?php echo $address; ?>" name="myaddress" type="text" id="myaddress">
										</td>
									</tr>
									<tr>
										<td>Phone</td>
										<td>
											<input value="<?php echo $phone; ?>" name="myphone" type="text" id="myphone">
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
											<input type="submit" name="edit_profile" value="Update Profile">
										</td>
									</tr>
								</table>
							</td>
						</form>
					</tr>
				</table>
			</div>
		</div>
		<!-- /.row -->

		<hr>

		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>Copyright &copy; Your Website 2014</p>
				</div>
			</div>
		</footer>

	</div>
	<!-- /.container -->

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

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
