@extends('layout.market')

@section('content')

<div id="wrap"> 
  
  <!-- Content -->
  <div id="content"> 
    @if(count($listepanier))
      @include('layout._market-shipsteps')

        <!-- Shopping Cart -->
        <section class="shopping-cart padding-bottom-60">
          <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th>Articles</th>
                  <th class="text-center">Prix</th>
                  <th class="text-center">Quantité</th>
                  <th class="text-center">Prix Total </th>
                  <th>&nbsp; </th>
                </tr>
              </thead>
              <tbody>
                @foreach($listepanier as $p)
                <!-- Item Cart -->
                <?php $prod = $p->produit; ?>
                <tr>
                  <td><div class="media">
                      <div class="media-left"> <a href="{{url('/store/afficher/'.time().'-'.$prod->id.'-'.$prod->slug)}}."> <img class="img-responsive" src="{!!  file_exists('assets/img/articles/'.$prod->image)  ? asset('assets/img/articles/'.$prod->image) :  (  file_exists(url('storage').'/'.$prod->nom) ? url('storage').'/'.$prod->nom : asset('storage/'.$prod->images->first()->nom )) !!}" alt="" > </a> </div>
                      <div class="media-body">
                        <p>{{$prod->nom}} </p>
                      </div>
                    </div></td>
                  <td class="text-center padding-top-60">{{number_format($prod->getFinalPrice(),2)}}</td>
                  <td class="text-center padding-top-60" style="padding-right: 0px; padding-left: 0px;"><!-- Quinty -->
                    <div class="row text-center">
                        <div class="quinty col-sm-8" style="margin-left: 15px;padding-right: 0;" >
                            <input type="text" class="form-control" disabled='true' value="{{$p->quantite_produit}}" name="quantiteproduit-{{$p->produit_id}}">
                        </div>
                        <div class="col-sm-2" style="padding-right: 0;padding-left: 0;">
                            <a href='#' dataid="{{time().'-'.$prod->id.'-'.$prod->slug}}" class="btn-round increaseCart btn-success  text-white text-center" style="background-color: dodgerblue;color: white;font-size: 14px;border-radius: 4px; padding: 5px 10px;">+</a>
                        </div>
                        <div class="col-sm-2" style="padding-left: 0;">
                        @if($p->quantite_produit > 1)
                                <a href='#' dataid="{{time().'-'.$prod->id.'-'.$prod->slug}}" class="btn-round decreaseCart bg-danger text-white text-center" style="font-size: 14px;border-radius: 4px; padding: 5px 10px;">-</a>
                            @endif
                        </div>
                    </div>
                  </td>
                  <td class="text-center padding-top-60">{{ number_format($prod->getFinalPrice() * $p->quantite_produit,2) }}</td>
                  <td class="text-center padding-top-60" style="padding-right: 0px; padding-left: 0px;"><a href="{{url('/removeFromCart/'.time().'-'.$prod->id.'-'.$prod->slug)}}" class="remove rmFrmCart btn-sm btn-danger" style="color: white;font-size: 14px;border-radius: 4px; padding: 5px 10px;"><i class="fa fa-window-close"></i> Supprimer</a></td>
                </tr>
                @endforeach

              </tbody>
            </table>

            <!-- Promotion -->
            <div class="promo">
              <div class="coupen">

              </div>

              <!-- Grand total -->
              <div class="g-totel">
                <h5>Grand total: <span id="total">{{ number_format($mnt_total,2)}}</span></h5>
              </div>
            </div>

            <!-- Button -->
            <div class="pro-btn"> <a href="{{url(route('store'))}}" class="btn-round btn-light btn-width-harmo">Retour à la boutique </a>
            <a href="{{url(route('modeLivraisonCli'))}}" class="btn-round btn-width-harmo"> Suivant <span><i class="fa fa-arrow-circle-right"></i></span></a> </div>

          </div>
        </section>

        @else

            <section>
                <div class="container">
                    <div class="order-success error-page" style="max-width:320px;margin: 50px auto;"> <img style="max-width: 200px;"   src="{{asset('assets/images/empty-cart-icon.png')}}" alt="">
                        <h3><span>Ooops !!!!</span> </h3>
                        <p>Votre panier est vide<br>
                        <div>
                            <a href="{{URL::to('/store')}}" class="btn-round btn-light text-white btn-width-harmo" style="color: white;">
                                Retourner à la boutique
                            </a>
                        </div>
                    </div>
                </div>
            </section>

        @endif

  </div>
  <!-- End Content -->
  
</div>


@endsection

@section('js')

<script>
jQuery(document).ready(function($) {


    $('.increaseCart').click(function(e){
        e.preventDefault();
       // e.stopPropagation();

        $.ajax({
            url : "{{url('/increaseCartQuantity')}}/"+$(e.target).attr('dataid')+'/1',
            type : 'GET',
            success : function(data){
                if(data.r){
                    window.location.href = "{{url(route('monPanier'))}}";
                    /*$('#cartQuantity').html(data.q);
                    $('#cartQuantity-badge').html(data.q);
                    $('#cartTotal').html(data.m);
                    $('#cart-number').html(data.q);*/

                }else{
                    if(data['code'] == "12" || data['code'] == 12 ){
                        window.location.href = "{{url(route('webLogin'))}}";
                    }
                }
            }
        })

    })

    $('.decreaseCart').click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            url : "{{url('/decreaseCartQuantity')}}/"+$(e.target).attr('dataid')+'/1',
            type : 'GET',
            success : function(data){
                console.log(data);
                if(data.r){
                    window.location.href = "{{url(route('monPanier'))}}";
                    /*$('#cartQuantity').html(data.q);
                    $('#cartQuantity-badge').html(data.q);
                    $('#cartTotal').html(data.m);
                    $('#cart-number').html(data.q);*/
                }else{
                    if(data['code'] == "12" || data['code'] == 12 ){
                        window.location.href = "{{url(route('webLogin'))}}";
                    }
                }
            }
        })
    })

    $('.rmFrmCart').click(function(e){
        e.preventDefault();
        //e.stopPropagation();

        if($(e.target).attr('href') != undefined) {
            console.log($(e.target));
            $.ajax({
                url: $(e.target).attr('href'),
                type: 'GET',
                success: function (data) {
                    console.log(data);
                    if (data.r) {
                        window.location.href = "{{url(route('monPanier'))}}";
                    } else {
                        if (data['code'] == "12" || data['code'] == 12) {
                            window.location.href = "{{url(route('webLogin'))}}";
                        }
                    }
                }
            })
        }
    })


    $("[name^='quantiteproduit-']").change(function(e){
        e.preventDefault();
        e.stopPropagation();
        var getid= $(e.target).attr('name');
        var myvalue = '';
        if(getid){
            myvalue = getid.split('-')[1];
        }
        $.ajax({

            url : "{{url('/updateqte')}}/"+myvalue+'/'+e.target.value,
            type : 'GET',
            success : function(data){
                console.log(data);
                if(data.r){
                    window.location.href = "{{url(route('monPanier'))}}";
                }
            }
        })
    })


})

</script>

@endsection

@section('css')
<style>
        section {
            position: relative;
            width: 100%;
            background: #f9f9f9;
        }
</style>
@endsection