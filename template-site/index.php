<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

	<section>
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Manga++</a></li>
				  <li class="active">Accueil</li>
				</ol>
			</div>
		</div>
	</section>
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6 slider-img">
									<img src="images/home/slider-manga.png" class="girl img-responsive" alt="Mangas" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6 slider-img">
									<img src="images/home/slider-bd.png" class="girl img-responsive" alt="Bandes dessinées" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Catégories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mangas
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Blackclover </a></li>
											<li><a href="#">Bleach </a></li>
											<li><a href="#">Dragonball </a></li>
											<li><a href="#">My Hero Academia</a></li>
											<li><a href="#">Naruto </a></li>
											<li><a href="#">Onepiece </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Bandes dessinées
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Asterix & Obélix</a></li>
											<li><a href="#">Boule & Bill</a></li>
											<li><a href="#">Gaston lagaffe</a></li>
											<li><a href="#">Les profs</a></li>
											<li><a href="#">Tintin</a></li>
											<li><a href="#">Titeuf</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Exemplaires</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Astérix et Obélix</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>Naruto</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Boule et Bill</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Bleach</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Titeuf</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Tranche de prix</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="[0,20]" id="sl2" ><br />
								 <b class="pull-left">0€</b> <b class="pull-right">100€</b>
							</div>
						</div><!--/price-range-->
						
						<!--<div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div>-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Articles en vedette</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/asterix1.png" alt="Asterix & Obelix" />
										<h2>56€</h2>
										<p>Asterix & Obelix, Tome 38 : La fille de Vercingetorix</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>Asterix & Obelix, Tome 38 : La fille de Vercingetorix</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/blackclover.jpg" alt="blackclover" />
										<h2>56€</h2>
										<p>blackclover, Tome 1</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>blackclover, Tome 1</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/titeuf_cover.jpg" alt="Titeuf" />
										<h2>56€</h2>
										<p>Titeuf, Tome 3 : Ça épate les filles</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>Titeuf, Tome 3 : Ça épate les filles</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/naruto_cover.png" alt="Naruto" />
										<h2>56€</h2>
										<p>Naruto, Tome 63</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>Naruto, Tome 63</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/profs.png" alt="Les profs" />
										<h2>56€</h2>
										<p>Les Profs, Tome 5 </p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>Les Profs, Tome 5 </p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/mha1.jpg" alt="My Hero Accademia" />
										<h2>56€</h2>
										<p>My Hero Accademia, Tome 3</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>56€</h2>
											<p>My Hero Accademia, Tome 3</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div><!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#mangas" data-toggle="tab">Mangas</a></li>
								<li><a href="#bd" data-toggle="tab">Bandes dessinées</a></li>
							</ul>
						</div>

						<div class="tab-content">
							<div class="tab-pane fade active in" id="mangas" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/naruto_cover.png" alt="" />
												<h2>56€</h2>
												<p>Naruto, Tome 63</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/dbz1.jpg" alt="" />
												<h2>56€</h2>
												<p>DrangonBall, tome 1 </p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/mha1.jpg" alt="" />
												<h2>56€</h2>
												<p>My Hero Accademia, Tome 3</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/blackclover.jpg" alt="blackclover" />
												<h2>56€</h2>
												<p>blackclover, Tome 1</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane fade" id="bd" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/titeuf_cover.jpg" alt="Titeuf" />
												<h2>56€</h2>
												<p>Titeuf, Tome 3 : Ça épate les filles</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/profs.png" alt="Les profs" />
												<h2>56€</h2>
												<p>Les Profs, Tome 5</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/asterix1.png" alt="Asterix & Obelix" />
												<h2>56€</h2>
												<p>Asterix & Obelix, Tome 38 : La fille de Vercingetorix</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo category-img text-center">
												<img src="images/home/tintin2.png" alt="Titeuf" />
												<h2>56€</h2>
												<p>Tintin, tome 3 : Tintin en Amérique</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Articles recommandés</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/naruto_cover.png" alt="Naruto" />
													<h2>56€</h2>
													<p>Naruto, Tome 63</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/titeuf_cover.jpg" alt="Titeuf" />
													<h2>56€</h2>
													<p>Titeuf, Tome 3 : Ça épate les filles</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/naruto_cover.png" alt="Naruto" />
													<h2>56€</h2>
													<p>Naruto, Tome 63</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/titeuf_cover.jpg" alt="Titeuf" />
													<h2>56€</h2>
													<p>Titeuf, Tome 3 : Ça épate les filles</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/naruto_cover.png" alt="Naruto" />
													<h2>56€</h2>
													<p>Naruto, Tome 63</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/titeuf_cover.jpg" alt="Titeuf" />
													<h2>56€</h2>
													<p>Titeuf, Tome 3 : Ça épate les filles</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php include 'footer.php'; ?>
</body>
</html>