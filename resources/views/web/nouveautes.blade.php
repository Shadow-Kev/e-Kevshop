@extends('layout.market')


@section('content')

<div id="wrap"> 

  <!-- Linking -->
  <div class="linking">
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li>
        <li class="active">{{$page}}</li>
      </ol>
    </div>
  </div>

  <!-- Content -->
  <div id="content"> 
    
    <!-- Products -->
    <section class="padding-top-40 padding-bottom-60">
      
      <div class="container">
        <div class="row"> 


         

          
          <!-- Shop Side Bar -->
          <div class="col-md-3">
            <div class="shop-side-bar"> 
                
                <!-- Search -->
                <div class="search">
                  <form>
                    <label>
                      <input type="email" placeholder="Search here">
                    </label>
                    <button type="submit" style='background:red'><i class="fa fa-search"></i></button>
                  </form>
                </div>
                
            
                <!-- Recent Posts -->
                <h6>Articles recents</h6>
                <div class="recent-post"> 

                  @foreach($recent_posts as $p)
                  <!-- Recent Posts -->
                  <div class="media">
                    <div class="media-left"> 
                      <a href="{{url('details-infos/'.time().'-'.$p->id.'-'.str_slug($p->post_title) )}}"><img class="img-responsive" src="{{asset('storage/uploads/articles/'.$p->post_image)}}" alt=""> </a> 
                    </div>
                    <div class="media-body"> 
                      <a href="{{url('details-infos/'.time().'-'.$p->id.'-'.str_slug($p->post_title) )}}">{{$p->post_title}} </a> 
                      <?php $d = new DateTime($p->publication_date); ?>
                      <span>{{$d->format('Y-m-d')}} </span>
                    </div>
                  </div>
                  @endforeach
                </div>
            </div>
          </div>
          
          <!-- Products -->
          <div class="col-md-9"> 
            
            <!-- Short List -->
            <div class="short-lst">
            <h2> {{ $page }}{{isset($search) ? ' / '.$search :  '' }}</h2>
              <ul>
                <!-- Short List -->
                <li>
                  <p>{{$nouveautes->firstItem()}}–{{$nouveautes->lastItem()}} sur {{$nouveautes->total()}} articles</p>
                </li>
              
              </ul>
            </div>

            
            @foreach($nouveautes as $n)
          <!-- Blog Post -->
          <div class="blog-post">
              <article class="row">
                <div class="col-xs-7">
                  <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}"> 
                  @if($n->post_image != NULL)
                    <img class="img-responsive" src="{{asset('storage/uploads/articles/'.$n->post_image)}}" alt="" >
                  @endif
                  </a> 
                </div>
                <?php $d = new DateTime($n->publication_date); ?>
                <div class="col-xs-5"> <span><i class="fa fa-bookmark-o"></i> {{ "Publié le ".strftime('%d %B %Y',$d->getTimestamp()) }}</span>  
                <a href="#." class="tittle">{{$n->post_title}} </a>
                  <p> {!! str_limit($n->post_content, $limit = 300, $end = '...') !!} </p>
                  <a href="{{url('details-infos/'.time().'-'.$n->id.'-'.str_slug($n->post_title) )}}">Lire plus...</a></div>
              </article>
            </div>
            @endforeach
            
            
           <div class="col-sm-12 text-center">
                {!! $nouveautes->links() !!}
            </div>
              <!-- pagination -->
          </div>
        </div>
      </div>
    </section>

   
  </div>
  <!-- End Content --> 
  
  <!-- End Footer --> 
  
  <!-- GO TO TOP  --> 
  <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a> 
  <!-- GO TO TOP End --> 
</div>


@endsection

@section('js')

<script>
jQuery(document).ready(function($) {

 

  // $('.cart-btn').on('click', function(e){
    
  //   e.preventDefault();
  //    $.ajax({
  //      url : {{url('/api/addToCart/')}}+e.target.attr('i')+'/1',
  //      type : 'POST',
  //     success : function(data){
  //       console.log(data);
  //       if(data.r){
  //         $('#cartQuantity').val(data.q);
  //         $('#cartTotal').val(data.m);
  //       }
        
  //     }
  //    })
  // });
  //  Price Filter ( noUiSlider Plugin)
    $("#price-range").noUiSlider({
    range: {
      'min': [ {{$minprice}} ],
      'max': [ {{$maxprice}} ]
    },
    start: [0, {{$maxprice}}],
        connect:true,
        serialization:{
            lower: [
        $.Link({
          target: $("#price-min")
        })
      ],
      upper: [
        $.Link({
          target: $("#price-max")
        })
      ],
      format: {
      // Set formatting
        decimals: 2,
        prefix: "{{'XAF'}}"
      }
        }
  });

  
});

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