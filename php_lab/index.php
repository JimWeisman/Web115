<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>php lab</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" href="style.css">

</head>

<body>

	<?php include'header.php';?>
	<?php include'vars.php';?>
	<?php require'cars.php';?>

	<div class="row">
		<div class="col-9 col-m-9">


			<div class="container">
				<div class="item"> <img src="../images/DaveDebMary.jpeg" alt="Dave, Deb, and Mary"> </div>
				<div class="item"> <img src="../images/nola07.jpg" alt="7"> </div>
				<div class="item"> <img src="../images/nola11.jpg" alt="11"> </div>
				<div class="item"> <img src="../images/nola18.jpg" alt="18"> </div>
				<div class="item"> <img src="../images/foodplate2.jpg" alt="food plate"> </div>
				<div class="item"> <img src="../images/foodplate3.jpg" alt=" the other plate"> </div>
				<div class="item"> <img src="../images/jimmary.jpg" alt="ji and mary"> </div>
				<div class="item"> <img src="../images/theblade5.jpg" alt="the blade logo"> </div>
			</div>

<div class="container2">
	<section>
		<p>This part is for the php lab only, that was due yesterday and will not be in the fianl project for net week.</p>
		 <p>I have a <?php echo $boat ?> boat that is <?php echo $color ?> and is worth <?php echo $price ?></p>
		 <p>I have a <?php echo $car ?> that is a <?php echo $carcolor ?> and is worth <?php echo $carprice ?></p>
	</section>
</div>

		</div>
	</div>



	<?php include'footer.php';?>

</body>

</html>
