<!doctype html>
<html lang="en">
	<head>
		<!-- universal and bootstrap meta tags -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="css/style.css" rel="stylesheet">


		<title>PWP</title>
	</head>
	<body class="background">

		<header>
			<div class="container-fluid px-0">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">Let's develop your passion</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">Home <span class="sr-only">Home</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#aboutMe">About me</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#portfolio">Portfolio</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#contactMe">Contact Me</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<section>
			<div class="container-fluid bg-dark py-4">
				<div class="text-light text-center">
					<h1 class="display-4">Ian W Foster</h1>
					<p class="lead">Enthusiastic, ambitious Fullstack Web Developer excited to bring knowledge of programing, media an design to a great company.</p>



					<a id="aboutMe"></a>
				</div>
			</div>
		</section>
		<section class>
			<div class="container">
				<div class="center">
					<h1 class="text-light text-center ">About Me</h1>
					<div>
						<img src="img/IMG_ian-foster.png" alt="Ian's pic" class="border border-dark my-2"/>
					</div>
				</div>
			</div>
					<div class="container-fluid">
						<h6 class="col-lg-10 boxed py-2 text-light center bg-dark py-4 my-3">I am a talented Technical Expert with a passion for developing projects. I have over 25 years of experience working with multiple complex programs, and have a strong social talent witch is rich in customer service skills. My work history reveals my outstanding ability to adapt to  different environments from the construction industry to retail and customer service. I have a broad understanding in telecommunications. I love technology, science and science fiction. I enjoy reading the news and spending time with my kids. I also like helping people in need. I am a team player  but i also work well independently. </h6>
					</div>
			</section>
		<a id="portfolio"></a>
			<div>
				<div class="container pt-4">
					<div class="row">
						<div class="post col-lg-4 col-sm-6 px-5 py-4">
							<img src="img/jpg.jpg" class="img-fluid rounded-circle mb-4" alt="image of pro tools">
							<div class="card">
								<div class="card-body">
									<p class="card-text">Over 20 years of experience in media programs for audio and video. Helped produce, create and was the talent for a educational film for the Private Industry Console of Solano County, California.</p>
								</div>
							</div>
						</div>
						<div class="post col-lg-4 col-sm-6 px-5 py-4">
							<img src="img/smartphones.jpg" class="img-fluid rounded-circle mb-4" alt="image of ">
							<div class="card">
								<div class="card-body">
									<p class="card-text"> 10 years tech support in telecommunications. personally awarded as most rounded representative by the southern HQ of Verizon Wireless. </p>
								</div>
							</div>
						</div>
						<div class="post col-lg-4 col-sm-6 px-5 py-4">
							<img src="img/image-html-css-js(1).jpg" class="img-fluid rounded-circle mb-4" alt="image of ">
							<div class="card">
								<div class="card-body" >
									<p class="card-text">Certified Deepdive Coder Fullstack since December 2019. MySQL, PHP, REACT, Insomnia, CSS, JavaScript, Bootstrap, HTML, and HTML5 </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		<div class="col-lg-4 embed-responsive embed-responsive-16by9 center">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rt3PQgKwFrg" allowfullscreen></iframe>
		</div>
					<!--This is Ian's contact form-->
		<a id="contactMe"></a>
				<div class="col-lg-6 center ">
								<form id="ians-form" action="../php/" method="post">
									<div class="form-group">
										<label for="name">Name <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"></span>
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="name" name="name" placeholder="Name">
										</div>
									</div>
									<div class="form-group">
										<label for="email">Email <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"></span>
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</div>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										</div>
									</div>
									<div class="form-group">
										<label for="subject">Subject</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"></span>
												<i class="fa fa-pencil" aria-hidden="true"></i>
											</div>
											<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"/>
										</div>
									</div>
									<div class="form-group">
										<label for="message">Message <span class="text-danger">*</span></label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"></span>
												<i class="fa fa-comment" aria-hidden="true"></i>
											</div>
											<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
										</div>
									</div>

									<!-- reCAPTCHA -->
									<div class="g-recaptcha" data-sitekey="6LdgS8QUAAAAAFZCstq__7XJMOVVbMq82V5bzAVI"></div>

									<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
									<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
								</form>
								<div class="row">
									<div class="col-xs-6">
										<div id="output-area"></div>
									</div>
								</div>
				</div>
		<footer>
			<div class="container-fluid bg-dark text-light text-center">
				<small> All scripts has been authored and authenticated by Ian "Ego The Dev" Foster </small>

			</div>
		</footer>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<script src="javaScript/form-validate.js"></script>

		<script src='https://www.google.com/recaptcha/api.js'></script>

	</body>
</html>
