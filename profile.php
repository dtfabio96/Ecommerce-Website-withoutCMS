<?php
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="shotcut icon" href="immagini/logo.png"/>
		<title>Route66 Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		@media screen and (max-width:767px){
			#search{width:100%;}
			#search_btn{width:100px;margin-top:-56px;margin-left: 200px;}
			#cart_continer{width:100px;}
		}
		</style>
	</head>
<body background="immagini/sfondo.jpg">
	<!--Navbar-->
	<div class="navbar navbar-inverse navbar-fixed-top" style="background: url(immagini/b.jpg)">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="immagini/logo.png" width="60" height="60">
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="contattaci.php"><span class="glyphicon glyphicon-envelope"></span>Contattaci</a></li>
				<li style="width:200px;left:10px;top:10px;"><input type="text" class="form-control" id="search" size=45px></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Cerca</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Carrello<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px; background:black;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">N°</div>
									<div class="col-md-3 col-xs-3">Immagine prodotto</div>
									<div class="col-md-3 col-xs-3">Nome prodotto</div>
									<div class="col-md-3 col-xs-3">Prezzo in €</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product" style="color:white;">
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle"  data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Ciao, ".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu" style="background-color:black; border-color:white;">
						<li><a href="carrello.php" style="text-decoration:none; color:white;"><span class="glyphicon glyphicon-shopping-cart">Carrello</a></li>
						<li class="divider"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color:white;">Ordini</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:white;">Esci</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<!--Contenuti della pagina-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<div id="get_brand">
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Prodotti</div>
					<div class="panel-body">
						<div id="get_product">
						</div>
					</div>
					<div class="panel-footer">&copy; 2018</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
