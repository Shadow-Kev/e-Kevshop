	<header class="header-style-1">


<div class="main-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
				<!-- ============================================================= LOGO ============================================================= -->
				<div class="logo">
					<a href="index.php">
						
						<img src="assets/img/logo1.png" alt="">

					</a>
				</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				
			</div><!-- /.logo-holder -->

			<div class="col-xs-12 col-sm-12 col-md-9 top-search-holder">
			<!-- /.contact-row -->
				
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="row">
						<!-- ============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
<div class="container w100" >
	<div class="header-top-inner">
		<div class="cnt-account">
			<ul class="list-unstyled">
								

                @guest
				<li><a href="login.php">Connexion</a></li>

                <li><a href="signup.php">Créer un compte</a></li>
                @else

				<li><a href="profil.php"><i class="fa fa-user-o"></i> Bienvenue, {{ Auth::user()->nom }}   {{ Auth::user()->prenom }}</a></li>

			<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Deconnection
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
               @endguest


				<!-- <li><a href="#"><i class="icon fa fa-lock"></i>Login</a></li> -->
			</ul>
		</div><!-- /.cnt-account -->

		<div class="cnt-block">
			<ul class="list-unstyled list-inline">				

				<li class="dropdown dropdown-small">
					<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">English</a></li>
						<li><a href="#">Français</a></li>						
						<li><a href="#">German</a></li>
					</ul>
				</li>
			</ul><!-- /.list-unstyled -->
		</div><!-- /.cnt-cart -->
		<div class="clearfix"></div>
	</div><!-- /.header-top-inner -->
</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
					</div>
					
				</div>
				<!-- ============================================================= SEARCH AREA ============================================================= -->
				<div class="col-xs-12 col-sm-12 col-md-9 mt-2p">
					<div class="search-area">
						<form>
							<div class="control-group">

								<ul class="categories-filter animate-dropdown">
									<li class="dropdown">

										<a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>

										<ul class="dropdown-menu" role="menu" >
											<li class="menu-header">Computer</li>
											<li role="presentation"><a role="menuitem" tabindex="0" href="category.html">- Smartphones</a></li>
											<li role="presentation"><a role="menuitem" tabindex="1" href="category.html">- Tablettes</a></li>
											<li role="presentation"><a role="menuitem" tabindex="2" href="category.html">- Accessoires</a></li>
											

										</ul>
									</li>
								</ul>


								<input class="search-field" placeholder="Search here..." name="requete" />

								<a class="search-button" href="#" id="search-button"></a>    

							</div>
						</form>
					</div><!-- /.search-area -->
					<!-- ============================================================= SEARCH AREA : END ============================================================= -->				
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3 no-pad mt-2p">
					<div class="col-xs-12 col-sm-12 col-md-12 animate-dropdown top-cart-row">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
						<div class="dropdown dropdown-cart no-pad">
							<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
								<div class="items-cart-inner">
								<div class="basket">
										<i class="glyphicon glyphicon-shopping-cart"></i>
									</div>
									<div class="basket-item-count"><span class="count"></span></div>
									<div class="total-price-basket">
										<span class="lbl">PANIER -</span>
										<span class="total-price">
											<span class="sign">XAF</span><span class="value"> </span>
										</span>
									</div>
									
																		

								</div>
							</a>
							<ul class="dropdown-menu" id="cart-content">

									<div class="cart-item product-summary">
										<div class="row">											
											<div class="col-xs-12">												
												<h4 class="name">Panier vide!</h4>												
											</div>									
										</div>
									</div>									
						

								<li>
									
									<div class="cart-item product-summary">
										<div class="row">
											<div class="col-xs-4">
												<div class="image">
													<a href="detail.html"><img src="admin/articles/"></a>
												</div>
											</div>
											<div class="col-xs-7">
												
												<h3 class="name"><a href="index.php?page-detail"></a></h3>
												<div class="price"></div>
											</div>
											<div class="col-xs-1 action">
												<a href="store.php?delPanier=" ><i class="fa fa-trash"></i></a> 
											</div>
										</div>
									</div><!-- /.cart-item -->
									<div class="clearfix"></div>
								<hr>

								
							
								<div class="clearfix cart-total">
									<div class="pull-right">
										
											<span class="text">Total :</span><span class='price'></span>
											
									</div>
									<div class="clearfix"></div>
										
									<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">COMMANDER</a>	
								</div><!-- /.cart-total-->									
							</li>
							</ul><!-- /.dropdown-menu-->
						</div><!-- /.dropdown-cart -->`
					</div>				
				</div><!-- /.top-search-holder -->			
<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
		</div><!-- /.row -->

	</div><!-- /.container -->

</div><!-- /.main-header -->

<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
<div class="container">
	<div class="yamm navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="nav-bg-class">
			<div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
<div class="nav-outer">
	<ul class="nav navbar-nav">
		<li class="active dropdown yamm-fw">
			<a href="index.php" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">ACCUEIL</a>
			
		</li>
		<li class="dropdown yamm mega-menu">
			<a href="store.php" >BOUTIQUE</a>			
			
		</li>

		<li class="dropdown mega-menu">
			<a href="#"  data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">
			   PROMOTION
			   <!-- <span class="menu-label hot-menu hidden-xs">hot</span> -->
			</a>			
		</li>
		<li class="dropdown hidden-sm">
			
			<a href="#">FORFAIT INTERNET
				<!-- <span class="menu-label new-menu hidden-xs">new</span> -->
			</a>
		</li>

		<li class="dropdown hidden-sm">
			<a href="about.php">A PROPOS</a>
		</li>

		<li class="dropdown">
			<a href="contact.php">CONTACT</a>
		</li>

	
		 <li class="dropdown  navbar-right special-menu">
			<a href="#">KADMARKET241.COM</a>
		</li>
				
		
	</ul><!-- /.navbar-nav -->
	<div class="clearfix"></div>				
</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


		</div><!-- /.nav-bg-class -->
	</div><!-- /.navbar-default -->
</div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>