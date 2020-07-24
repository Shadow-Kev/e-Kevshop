@extends('layout.market')

@section('content')


<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">{{$article->post_title}}</li>
        </ol>
      </div>
    </div>
    
    <!-- Blog -->
    <section class="blog-single padding-top-30 padding-bottom-60">
      <div class="container">
        <div class="row">
          <div class="col-md-9"> 
            
            <!-- Blog Post -->
            <div class="blog-post">
              <article> 
              {!! $article->post_content !!}
              </article>
              
              <!-- Comments -->
            </div>
          </div>
          
          <!-- Side Bar -->
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
      </div>
    </section>
    


@endsection
@section('css')

<style>
p{
    text-align:justify;
    font-size : 1.1em;
}

.blog-post article h3{
  font-size : 28px !important;
}
</style>


@endsection