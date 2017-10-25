<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>php lab</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<script src="javascript.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Princess+Sofia" rel="stylesheet">

</head>

<body>

	<?php include'header.php';?>
	<?php include'vars.php';?>
	<?php require'cars.php';?>

	<!--<div class="row">
		<div class="col-9 col-m-9"> -->


	<div class="container">
		
		<div class="item"><a href="#large"><img src="../images/DaveDebMary.jpeg" alt="Dave, Deb, and Mary" onlcick ="change01()"></a></div>
		<div class="item"><a href="#large"><img src="../images/nola07.jpg" alt="7" onclick ="change02()"> </a> </div>
		<div class="item"><a href="#large"><img src="../images/nola11.jpg" alt="11" onclick ="change03()"> </a> </div>
		<div class="item"><a href="#large"><img src="../images/nola18.jpg" alt="18" onclick ="change04()"> </a></div>
		<div class="item"><a href="#large"><img src="../images/foodplate2.jpg" alt="food plate" onclick ="change05()"> </a></div>
		<div class="item"><a href="#large"><img src="../images/foodplate3.jpg" alt=" the other plate" onclick ="change06()"> </a></div>
		<div class="item"><a href="#large"><img src="../images/jimmary.jpg" alt="ji and mary" onclick ="change07()"> </a></div>
		<div class="item"><a href="#large"><img src="../images/theblade5.jpg" alt="the blade logo" onclick ="change08()"></a>
	</div>

	<div class="aside">
		<div class="row">
			<img id="large" src="../images/nola07.jpg" alt="Dave, Deb, and Mary">
		</div>
	</div>

	<div class="container2">
		<div class="col-9 col-m-9">
			<section>
				<p>I have a
					<?php echo $boat ?> boat that is
					<?php echo $color ?> and is worth
					<?php echo $price ?>
				</p>
				<p>I have a
					<?php echo $car ?> that is a
					<?php echo $carcolor ?> and is worth
					<?php echo $carprice ?>
				</p>
			</section>
		</div>
	</div>

    </div>



	<?php include'footer.php';?>

</body>

</html>
