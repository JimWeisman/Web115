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

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="container">
					<div class="panel panel-default">
						<h2>Breakfast</h2>
						<div class="btn-group">
							<button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#colds">Colds</button>
							<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#hots">Hots</button>
						</div>

						<div id="colds" class="collapse">
							Whipped greek yogurt / Fruit coulis / Fresh fruit Yogurt / Cranberry sauce / Granola / Toasted Magical Honey Cake Quinoa / Raspberry / Blueberry / Strawberry / Cranberry / Mango Smoothie Bowl - Changes daily depending on what’s available Housemade Granola / Milk
						</div>
					</div>

					<div class="panel panel-default">
						<div id="hots" class="collapse">
							Chocolate and Halva French Toast/ Local honey Apple Oatmeal Pancakes / Apples syrup / Cranberry sauce Blueberry-Lemon Buttermilk pancakes / Shredded Duck / Lemon curd / Duck jus / Blueberries Pumpkin waffles / Brown pumpkin butter / Pomegranate molasses syrup / Pomegranate seeds / Micro mint Warm hummus / Boiled broad beans / Hard-boiled egg / Confited sundried tomato Eggs / Tomato Sauce / Merguez / Mushrooms / Spinach / Feta Quinoa Porridge / Tomatoes / Feta / Garlic / Basil Sweet Potato Cake / Caramelized Bacon / Poached Egg / Bearnaise Sauce
						</div>
					</div>

				</div>

				<div class="container">
					<h2>Lunch</h2>
					<a href="#lunch" class="btn btn-warning btn-block" data-toggle="collapse">Click to see Lunch Menu</a>
					<div id="lunch" class="collapse">
						<div class="panel-group">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<h3>Appetizers</h3>
								</div>
								<div class="panel-body"> Avocado green goddess dressing / Arugula / Bruléed grapefruit segments / Shaved radish / Crumbled feta Gem Lettuce / Brown butter vinaigrette / Roasted butternut squash / Bourbon soaked cherries / Julienned Apples / Sage rosemary oil / Parmigiano Reggiano Chickpeas / Christmas lima beans / Black beans / Greek yogurt / Parsley Roasted Butternut Squash Soup / Chili Flakes / Toasted Almonds / Crumbled shanklish Hummus with pumpkin and brown butter sage/ Hummus with chestnuts (fire roasted) / Hummus with lamb ragu / pita / za’tar Three meats / Dijon / Pickled veg / Toasted brioche / Seasoned nuts Three cheeses / Marmalade / Toasted biscotti / Seasonal fruit / Candied nuts</div>
							</div>
						</div>

						<div class="panel panel-warning">
							<div class="panel-heading">
								<h3>Entrées</h3>
							</div>
							<div class="panel-body"> Fried Eggplant / Concasséd Tomatoes / Cheese sauce Grilled focaccia / Housemade mozzarella / Tomatoes / Local basil pesto / Basil leaves / Choice of side Housemade pita / Falafel / Tahini dip / Israeli Salad / Choice of side Beef bacon / Lettuce / Tomato / Brioche / Choice of side Merguez patty / Brioche pine nut bun / Tahini sauce / Caramelized onions / Kashkaval cheese / Choice of side Pumpernickel / Pickled veg / Dijon mustard / Beef carpaccio - marinated with olive oil, oregano, thyme / Choice of side Sides Sweet Potato Fries Eggplant Fries / Feta tzatziki sauce Red and yellow beet / taro / carrot / sweet potato / yuca / turnip / rutabaga / parsnip Tabbouleh Salad Israeli Salad</div>
						</div>
					</div>

					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3>Desserts</h3>
						</div>
						<div class="panel-body"> Green apple sorbet / Ginger snap Fritters / Cranberry coulis / Powdered sugar Sweet cracker / Coconut chantilly / Strawberries / Dry caramel / Cranberry coulis / Powdered Sugar (colored) Apple Tart with frangipane filling / red and green powdered sugar Dark chocolate cake / Whipped cream / Raspberry Marmelade / Dark chocolate ganache / raspberry coulis / creme anglaise</div>
					</div>
				</div>


				<div class="container">
					<h2>Dinner</h2>
					<a href="#dinner" class="btn btn-success btn-block" data-toggle="collapse">Click to see Dinner Menu</a>
					<div id="dinner" class="collapse">
						Pickled pork tongue rillette / Meyer lemon gel / Red pepper coulis / Cracker Deep fried pigs ears / Chestnut purée / Yogurt sauce / Harissa Tortellini / Pig’s brain / Parmesan / Pork consommé / Yellowfoot Mushrooms / White Beech Mushrooms / Lemon oil Fried tail / Ginger lemon honey sauce / Honey comb / Lemon caviar / Powdered ginger Pork belly / Dark chocolate ganache demi / Assorted tomato / Pomegranate / Parsnip purée / pomegranate molasses Bougatsa / Hard cider gastrique / Compressed granny smith apple / Pork floss / Dehydrated Apple Leaf lard pie crust / Cardamon ice cream / Bourbon poached sweet potato / Chamomile caramel / Persimmon

					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="jumbotron text-center">
		<footer>
			<?php include 'footer.php';?>
		</footer>
	</div>



</body>

</html>
