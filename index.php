<!DOCTYPE html>
<html lang="es">
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Explora las tiendas</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<body>
		<!--[if lt IE 8]>
		<script src="http://HTML5shim.googlecode.com/svn/trunk/HTML5.js"></script>
		<![endif]-->
	<header class="container cabecera">
		<?php include 'barra-navegacion/navbar.php';?>
	</header>

	<section class="container-fluid video_form">
		<div style="height:500px; width:100%;" data-vide-bg="video/video">
		</div>
		<form action="" class="formulario">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Lugar a buscar">
			</div>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Producto a buscar">
			</div>
			<div class="input-group">
				<button class="bnt btn-danger btn-lg" id="bntBuscar">Buscar</button>
			</div>
		</form>
	</section>
		<section class="container informacion">
			<div class="row">
			<article class="col-md-4 col-lg-4">
				<span class="icon-brujula"></span>
				<h2>EXPLORA</h2>
				<div>
					<p>
						Explora las tiendas desde tu casa.	
					</p>
				</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-ubicacion"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			<article class="col-md-4 col-lg-4">
				<span class="icon-computer"></span>
				<h2>ENCUENTRA</h2>
					<div>
						<p>
							Buscá sin salir de tu casa.
						</p>
					</div>
			</article>
			</div>
		</section>
		
		<section class="resultados container">
			<h1>EXPLORA LAS TIENDAS</h1>
			<div class="row">
			<article class="col-sm-3">
				<div class="thumbnail">
					<img src="img/smartphone.jpg" alt="smartphone" class="img-responsive">
					<div class="caption">
						<h4>Samsung galaxy</h4>
							<div class="item-descripcion">
								<span class="item-valor">$500</span>
							</div>
							<div>
							<a href="#modal-info" class="btn btn-info" role="button" data-toggle="modal">Detalles</a>
							</div>

					</div>
				</div>

				<!--INICIO DE LA VENTANA EMERGENTE-->
				<div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				        	<span aria-hidden="true">&times;</span>
				        </button>

				        <!--Titulo de la ventana. Aquí estará el nombre del producto-->
				        <h4 class="modal-title text-center" id="myModalLabel">Descripción del producto</h4>

				      </div>

				      <!--Aquí estará la información de toda la descripción del producto-->
				      <div class="modal-body">
				        <div id="map-canvas" style="height:250px; width:100%;"></div>
				        <div class="container-fluid">
				        	<div class="row">
				        		<div class="well col-md-4 col-xs-12">col-md-4</div>
				        		<div class="well col-md-4 col-xs-12">col-md-4</div>
				        		<div class="well col-md-4 col-xs-12">col-md-4</div>
				        	</div>
				        </div>
				      </div>

				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!--FIN DE LA VENTANA EMERGENTE-->
			</article>
			
			<article class="col-sm-3">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/pantalon.jpg" style="height:auto" alt="zapatos" class="img-responsive">
								<div class="caption">
										<h4>Deportivos Nike</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
									</div>
									<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
			</article>

			<article class="col-sm-3">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/silla_playera.jpg" alt="silla playera" class="img-responsive">
									<div class="caption">
										<h4>Silla playera</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
										</div>
										<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
									</div>
								</div>
			</article>

			<article class="col-sm-3">
							<div class="thumbnail">
								<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
								<img src="img/zapatos.jpg" alt="zapatos" class="img-responsive">
								<div class="caption">
										<h4>Deportivos Nike</h4>
										<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
									</div>
									<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
								</div>
							</div>
			</article>
			
			<article class="col-sm-3">
				<div class="thumbnail">
					<h4><span class="label label-danger pull-right"><span class=" glyphicon glyphicon-piggy-bank"></span>15% Desc</span></h4>
					<img src="img/lavadora.jpg" alt="lavadora" class="img-responsive">
					<div class="caption">
						<h4>Samsung galaxy</h4>
							<div class="item-descripcion">
											<span class="item-valor"><s>$500</s></span>
											<span class="item-desc">$435</span>
											<div class="item-votacion pull-right">
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class=" glyphicon glyphicon-star"></span>
												<span class="glyphicon glyphicon-star"></span>
												<span class="item-num-vota">12 votaciones</span>
											</div>
							</div>
							<div><a href="#" class="btn btn-info" role="button">Detalles</a></div>
					</div>
				</div>
			</article>
			</div>
		</section>
	<?php include 'pie-pagina/footer.php';?>
<script type="text/javascript" src="js/modernizr.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAw86BjBuILI2xv5MAsgPfOOBQUc0ZByXY&callback=inicializar" async defer></script>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.vide.js"></script>
<script type="text/javascript" src="js/bntBuscar.js"></script>
<script type="text/javascript" src="js/map_script.js"></script>
</body>
</html>