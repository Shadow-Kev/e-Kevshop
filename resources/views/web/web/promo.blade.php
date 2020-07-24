@extends('layout.default')

@section('content')

    <div class="clearfix filters-container m-t-10">
        <div class="row">

            <div class="col col-sm-6 col-md-12 text-right">
                {{ $produits->links('shop.pagination') }}
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <div class="search-result-container ">
        <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane  " id="grid-container">
                <div class="category-product">
                    <div class="row">
                        <?php
                        if (count($produits)){
                        foreach ($produits

                        as $p) : ?>
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                            <a href="produit.php?id=<?php echo $p->id; ?>">
                                <div class="products">
                                    <div class="product">
                                        <div class="product-image">
                                            <div class="image">
                                                <a href="produit.php?id=<?php echo $p->id; ?>"><img
                                                            src="{{ asset('assets/img/articles/'.$p->image) }}"
                                                            alt="<?php echo $p->nom_produit; ?>"></a>
                                            </div><!-- /.image -->

                                        </div><!-- /.product-image -->

                                        <div class="product-info text-left">
                                            <h3 class="name">
                                                <b>
                                                    <a href="detail.html">
                                                        <?php echo $p->nom_produit; ?>
                                                    </a>
                                                </b>

                                            </h3>

                                            <div class="product-price">
															<span class="price">
															<?php echo $p->prix; ?></span>
                                            </div><!-- /.product-price -->

                                        </div><!-- /.product-info -->
                                        <div class="cart clearfix animate-effect">
                                            <div class="action">
                                                <ul class="list-unstyled">
                                                    <li class="add-cart-button btn-group">
                                                        <button class="btn btn-primary icon"
                                                                data-toggle="dropdown" type="button">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                        <button class="btn btn-primary cart-btn"
                                                                type="button">Ajouter au panier
                                                        </button>

                                                    </li>

                                                    <li class="lnk wishlist">
                                                        <a class="add-to-cart"
                                                           href="produit.php?id=<?php echo $p->id; ?>"
                                                           title="Details">
                                                            <i class="icon fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div><!-- /.action -->
                                        </div><!-- /.cart -->
                                    </div><!-- /.product -->

                                </div><!-- /.products -->
                            </a>
                        </div><!-- /.item -->

                    <?php endforeach;
                    } else { ?>  <!-- endif -->
                        <div class="col-md-12 x-text text-center">
                            <h3>Aucun produit dans cette categorie pour l'instant </h3>
                        </div>

                    <?php } ?> <!-- end -->
                    </div><!-- /.row -->
                </div><!-- /.category-product -->
            </div>
            <div class="tab-pane active" id="list-container">
                <div class="category-product">
                    <div class="category-product-inner wow fadeInUp">
                        <div class="products">
                            <div class="product-list product">
                                <?php
                                if (count($produits)){
                                foreach ($produits as $p) : ?>

                                <div class="row product-list-row">
                                    <div class="col col-sm-4 col-lg-4">
                                        <div class="product-image">
                                            <div class="image">
                                                <img src="{{ asset("assets/img/articles/$p->image") }}" alt="">
                                            </div>
                                        </div><!-- /.product-image -->
                                    </div><!-- /.col -->
                                    <div class="col col-sm-8 col-lg-8">
                                        <div class="product-info">
                                            <h3 class="name"><a
                                                        href="produit.php?id=<?php echo $p->id; ?>">{{ $p->nom }}</a>
                                            </h3>
                                            <div class="rating rateit-small"></div>
                                            <div class="product-price">
																<span class="price">
																	{{ number_format($p->prix, 0, '.', ' ')." XAF"  }}</span>
                                            </div><!-- /.product-price -->
                                            <div class="description m-t-10">
                                                <?php echo $p->description; ?>
                                            </div>
                                            <div class="cart clearfix animate-effect">
                                                <div class="action">
                                                    <ul class="list-unstyled">
                                                        <li class="add-cart-button btn-group">
                                                            <button class="btn btn-primary icon" data-toggle="dropdown"
                                                                    type="button">
                                                                <i class="fa fa-shopping-cart"></i>
                                                            </button>
                                                            <button class="btn btn-primary cart-btn" type="button">
                                                                Ajouter au panier
                                                            </button>

                                                        </li>

                                                        <li class="lnk">
                                                            <a class="add-to-cart" href="detail.html" title="Details">
                                                                <i class="fa fa-signal"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.action -->
                                            </div><!-- /.cart -->

                                        </div><!-- /.product-info -->
                                    </div><!-- /.col -->
                                </div><!-- /.product-list-row -->
                                <div class="tag new"><span>new</span></div>

                            <?php endforeach;
                            } else { ?>  <!-- endif -->
                                <div class="row product-list-row">
                                    <div class="col-md-12 text-center" >
                                        <h3>Aucun produit dans cette categorie pour l'instant </h3>
                                    </div>
                                </div>

                            <?php } ?> <!-- end -->
                            </div><!-- /.product-list -->
                        </div><!-- /.products -->
                    </div><!-- /.category-product-inner -->
                </div><!-- /.row -->
            </div><!-- /.category-product -->
        </div><!-- /.tab-pane #list-container -->
    </div>
    </div>

@endsection
