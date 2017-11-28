<!DOCTYPE html>
<html lang="en">

<head>
	<title>What We Do</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<sript src=script.js></sript>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Fresca|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">


</head>
<nav>
	<?php include 'navbar.php'; ?>
</nav>



<body>

	<div class="jumbotron">
		<header>
			<h2> Welcome to E &amp; J Catering and Private chefs, This is what we do</h2>
		</header>
	</div>


	<!-- container for pictures-->
	<!--width="200" height="200"-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/foodplate1.jpg" target="_blank">
								<img src="../images/foodplate1.jpg" class="img-circle"  width="200" height="200" alt="sample plate"></a>
						</figure>

						<a href="#" data-toggle="tooltip" data-placement="bottom" title="sample plate">more</a>

					</div>
				</div>
			</div>


			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/foodplate2.jpg" target="_blank">
								<img src="../images/foodplate2.jpg" class="img-circle"  width="200" height="200" alt="fish plate"></a>
						</figure>
						<a href="#" data-toggle="tooltip" data-placement="bottom" title="fish plate">more</a>
					</div>
				</div>
			</div>


			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/foodplate3.jpg" target="_blank">
								<img src="../images/foodplate3.jpg" class="img-circle" width="200" height="200" alt="meat plate"></a>
						</figure>

						<a href="#" data-toggle="tooltip" data-placement="bottom" title="Meat Plate">more</a>
					</div>
				</div>
			</div>
		</div>
		<!--closing for first three-->

		<div class="row">
			<!--start of second three-->
			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/frogleggs.jpg" target="_blank">
								<img src="../images/frogleggs.jpg" class="img-circle"  width="200" height="200" alt="Frogg leggs"></a>
						</figure>

						<a href="#" data-toggle="tooltip" data-placement="bottom" title="Frogg leggs">more</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/muffins.jpg" target="_blank">
								<img src="../images/muffins.jpg" class="img-circle"  width="200" height="200" alt="fresh muffins"></a>
						</figure>

						<a href="#" data-toggle="tooltip" data-placement="bottom" title="fresh muffins">more</a>
					</div>
				</div>
			</div>


			<div class="col-sm-4">
				<div class="well">
					<div class="text-center">

						<figure>
							<a href="../images/nola11.jpg" target="_blank">
								<img src="../images/nola11.jpg" class="img-circle" width="200" height="200" alt="Best Cuban Snadwich in town"></a>
						</figure>

						<!-- start of modal-->

						<h2>Modal Example</h2>
						<!-- Trigger the modal with a button -->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Best Cuban Sandwich in town</h4>
									</div>
									<div class="modal-body">
										<p>Yes, I said Best dam Cuban Sandwich in town. Made with real cuban bread ( and not a kuzier roll or sub-sandwich bread) it's cuban, not German or were every sub-sandwiches came from? </p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>

							</div>
						</div>



						<!--<a href="#" data-toggle="tooltip" data-placement="bottom" title="Best Cuban Sandwich in town">more</a>-->
					</div>
				</div>
			</div>
		</div>
		<!--closing for second three-->
	</div>
	<!--col-->


	<div class="jumbotron text-center">
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</div>




</body>

</html>
