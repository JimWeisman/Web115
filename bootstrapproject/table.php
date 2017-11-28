<!DOCTYPE html>
<html lang="en">

<head>
	<title>Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Fresca|Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">

	<link rel="stylesheet" href="style.css">

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

	<div class="table-responsive">
		<div class="row">
			<section class="col-xs-12">

				<table class="table table-hover">
					<thead>
						<tr>
							<th> chef</th>
							<th> breakfest</th>
							<th> Lunch</th>
							<th> Dinner</th>
							<th> Bar</th>
							<th> After hours</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<th scope="row">Elaine</th>

							<td>Lead</td>
							<td>2nd</td>
							<td>3rd</td>
							<td>4th</td>
							<td>5th</td>
						</tr>
						<tr>
							<th scope="row">Jav</th>
							<td>2nd</td>
							<td>Lead</td>
							<td>3rd</td>
							<td>4th</td>
							<td>5th</td>
						</tr>
						<tr>
							<th scope="row">Jimmy P</th>
							<td>off</td>
							<td>2nd</td>
							<td>3rd</td>
							<td>4th</td>
							<td>Lead</td>
						</tr>
						<tr>
							<th scope="row">Mary</th>
							<td>off</td>
							<td>2nd</td>
							<td>3rd</td>
							<td>4th</td>
							<td>Lead</td>
						</tr>

					</tbody>
				</table>
			</section>
		</div>
	</div>
	<div class="jumbotron text-center">
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</div>
</body>


</html>
