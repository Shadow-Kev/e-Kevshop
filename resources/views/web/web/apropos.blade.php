@extends('layout.fullwidth')

@section('content')



    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Accueil</a></li>
                    <li class='active'>A propos</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div style="min-height: 50vh;">
                <div class="row">
                    <div class="col-md-12 terms-conditions" style="margin-bottom: 10vh;">
                        <h2 class="heading-title">A propos</h2>
                        <div class="" style="font-size:2rem;">
                            <div class="text-center col-md-5" style="margin: 1.8em auto;" >
                                <img src="{{ url('assets/img/logo2.png'") }}" alt="" style="margin: 0 auto; max-width:300px ;">
                            </div>
                            <div class="col-md-7 text-justify" >
                                <p>Kadmarket, le premier site e-commerce gabonais, spécialisé dans la vente des téléphones
                                    portables et accessoires,a été créé en 2017. Depuis lors, il obtient d’excellents résultats
                                    en matière de satisfaction auprès de sa clientèle. Notre objectif,
                                    mettre à la disposition de nos clients des produits de qualité,garantis et à meilleur prix.
                                </p>
                                <p>
                                    Une équipe de professionnels n’ayant qu’une seule passion: répondre à vos besoins et
                                    dépasser vos attentes.
                                    Vos avis compte beaucoup pour nous.
                                </p>
                            </div>

                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div>

    </div>




@endsection
