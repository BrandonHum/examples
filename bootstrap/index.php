<!DOCTYPE html>
<html>
	<head>
		<title>Bootstrap 3</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>

	<body>
		<!-- NAVBAR -->
		<div class="navbar navbar-inverse navbar-static-top">
		 	<div class="container">

		 		<div class="navbar-header">
		 			<a href="#" class="navbar-brand">CommEff</a>

			 		<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			 			<span class="icon-bar"></span>
			 			<span class="icon-bar"></span>
			 			<span class="icon-bar"></span>
			 		</button>
		 		</div>

		 		<div class="collapse navbar-collapse navHeaderCollapse">
		 			<ul class="nav navbar-nav navbar-right">
		 				<li class="active"><a href="#">Home</a></li>
		 				<li><a href="read.html">Blog</a></li>
		 				<li class="dropdown">
		 					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses <b class="caret"></b></a>

		 					<ul class="dropdown-menu">
		 						<li><a href="demo.htm">Cardiology</a></li>
		 						<li><a href="#">Immunology</a></li>
		 						<li><a href="#">Neurology</a></li>
		 						<li><a href="#">Nephrology</a></li>
		 					</ul>

		 				</li>
		 				<li><a href="#contact" data-toggle="modal">Contact us</a></li>
		 				<li><a href="extras.html">Extras</a></li>
		 			</ul>
		 		</div>
		 	</div>
		</div>

		<!-- JUMBOTRON -->
		<div class="container">
			<div class="jumbotron text-center">
				<h1>Hello World!</h1>
				<p>How are you today?</p>

				<a class="btn btn-default">Watch Now!</a>
				<a class="btn btn-info">Tweet it!</a>
			</div>
		</div>

		<!-- GRID SYSTEM -->
		<div class="container">
			<div class="row">
				<!-- lg md sm for device sizes, 12 box grid-->
				<div class="col-md-3">
					<h3><a href="#">Click me!</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>

				<div class="col-md-3">
					<h3><a href="#">Click me!</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>

				<div class="col-md-3">
					<h3><a href="#">Click me!</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>

				<div class="col-md-3">
					<h3><a href="#">Click me!</a></h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<a href="#" class="btn btn-default">Read More</a>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<!-- <div class="navbar navbar-default navbar-fixed-bottom"> -->
			<div class="container footer-container">
				<p class="navbar-text pull-left">&copy; 2013</p>

				<a href="#" class="navbar-btn btn btn-danger pull-right">Contact Us</a>
			</div>
		<!-- </div> -->

		<!-- MODAL -->
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<form class="form-horizontal">
						<div class="modal-header">
							<h4>Contact Us</h4>
						</div>

						<div class="modal-body">
							<div class="form-group">
								<label for="contact-name" class="col-lg-2 control-label">Name:</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" id="contact-name" placeholder="Full Name">
								</div>
							</div>

							<div class="form-group">
								<label for="contact-email" class="col-lg-2 control-label">Email:</label>
								<div class="col-lg-10">
									<input type="email" class="form-control" id="contact-email" placeholder="you@example.com">
								</div>
							</div>

							<div class="form-group">
								<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
								<div class="col-lg-10">
									<textarea class="form-control" id="contact-msg" rows="8"></textarea>
								</div>
							</div>
						</div>

						<div class="modal-footer">
							<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
							<button class="btn btn-primary" type="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>