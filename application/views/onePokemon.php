<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title>Preview Pokemon</title>
	<link href="/assets/onePokemon.css" rel="stylesheet" type="text/css">
	<style type="text/css">

	.navbar{
		padding: 5px 25px;
	}

	.container{
		background-image: url(http://orig05.deviantart.net/6c46/f/2012/246/f/9/pallet_town_by_44tim44-d5dep2b.png);
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
	}

	a{
		color: white;
		font-size: 22px;
		text-decoration: underline;
	}

	h1, h4{
		color: white;
	}

	.simPokeImg{
		background-color: white;
	}
	</style>
</head>
<body>
<!-- Nav Bar -->

	<div class='navbar navbar-default'>
		<div class='navbar-header'>
			<p class='navbar-brand'>R</p>
		</div>
<?php
		if($this->session->userdata('cart')){
		$cart = $this->session->userdata('cart');
		$quantity = 0;
		foreach($cart as $item)
		{
		  $quantity += $item['amount'];
		}
	}else{ $quantity = 0;}
?>
		<div>
			<ul class='nav navbar-nav navbar-right'>
				<li><h4><a href='/dashboards/checkout' style='color: blue'>Shopping Cart (<?=$quantity?>)</a></h4></li>
			</ul>
		</div>
	</div>

	<div class='container'>
		<div class='row'>
			<a href='/products/product_page'>Go back</a>
			<h1><?= $info['name']; ?></h1>
		</div>

		<div id='pokedex' class="row">
			<img src='/<?= $info['image']; ?>' alt='No Image Selected'>
			<div id='text'>
				<p><?= $info['description']; ?></p>
				<p>Type: <?= $info['category']; ?></p>
			</div>
		</div>

		<div class='row'>
			<form action='/dashboards/cart' method='post'>
				<input type="hidden" name="id" value="<?=$info['id'];?>">
				<input type="hidden" name="price" value="<?=$info['price'];?>">
				<input type="hidden" name="name" value="<?=$info['name'];?>">
				<!-- <input type="hideen" name="image" value="<?= $info['image']; ?>"> -->
				<select class='form-control' name='amount'>
					<option name='quantity' value='1'>1 (<?= $info['price']; ?>)</option>
					<option name='quantity' value='2'>2 (<?= floatval($info['price'])*2; ?>)</option>
					<option name='quantity' value='3'>3 (<?= floatval($info['price'])*3; ?>)</option>
				</select>
				<input type='submit' value='Buy' class='btn btn-primary' />
			</form>
		</div>
<!-- <?=$info['id'];?>/<?=$info['price'];?> -->
		<div class='row'>
			<h4>Similar Pokemon</h4>

<?php shuffle($similarPokemons);
			$count = 0;
			foreach ($similarPokemons as $simPoke)
			{
				if ($count < 4)
				{ ?>
					<div class='similar'>
						<a href="/products/one_pokemon/<?=$simPoke['id'];?>"><img class='simPokeImg' src='/<?= $simPoke['image']; ?>' alt='raichu'></a>
						<h4><?= $simPoke['name']; ?></h4>
					</div>
<?php 			$count++;
				}
			} ?>
		</div>
	</div>
</body>
</html>
