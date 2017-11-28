<!DOCTYPE html>
<html lang="en">

<head>
	<title>Who We are</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Fresca|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">

	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>

</head>
<nav>
	<?php include 'navbar.php'; ?>
</nav>



<body>

	<div class="jumbotron text-center">
		<header>
			<h2> Welcome to E &amp; J Catering and Private chefs Menu </h2>
		</header>
	</div>



	<!-- container for pictures-->
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="well">
					<div class="thumbnail">
						<a href="../images/Lainie.jpg" target="_blank">
					<img src="../images/Lainie.jpg"  width="350" height="200" alt="lainie make cup cakes"></a>
					</div>


					<a tabindex="0" role="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-trigger="foucus" data-placement="bottom" data-content="lainie making cup cakes">more</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well">
					<div class="thumbnail">
						<a href="../images/mary.jpeg" target="_blank">
				<img src="../images/mary.jpeg" width="350" height="200" alt="mary busy at work">
				</a>
					</div>
					<a tabindex="0" role="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-trigger="foucus" data-placement="bottom" data-content="Mary busy at work">more</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well">
					<div class="thumbnail">
						<a href="../images/annie.jpeg" target="_blank">
				<img src="../images/annie.jpeg"width="350" height="200" alt="annie busy kepping the floors clean">
				</a>
					</div>
					<a tabindex="0" role="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-trigger="foucus" data-placement="bottom" data-content="Annie busy kepping the floors clean">more</a>

				</div>
			</div>


			<div class="col-md-4">
				<div class="well">
					<div class="thumbnail">
						<a href="../images/jimmy.jpeg" target="_blank">
					<img src="../images/jimmy.jpeg" alt="Jimmy with Lainie and Hav">
					</a>
					</div>
					<a tabindex="0" role="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-trigger="foucus" data-placement="bottom" data-content="Jimmy with Lainie and Jav">more</a>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well">
					<div class="thumbnail">
						<a href="../images/jav3.jpg" target="_blank">
						<img src="../images/jav3.jpg" alt="Hav making food">
						</a>
					</div>
					<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Jav making food">more</button>
					<!-- this last one was made a botton, which needs to be reclicked to close, only to use two botton types for grading purposes-->
				</div>
			</div>

		</div>
		<!-- for row-->

	</div>
	<!-- for container -->






	<div class="jumbotron text-center">
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</div>



</body>

</html>
