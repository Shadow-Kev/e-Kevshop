
            <div class="shop-side-bar"> 
              
              <!-- Categories -->
              <h6>Categories</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                @foreach($allcats as $c)
                  <li>
                    <input id="catId" value="cat{{$c->id}}" class="styled" type="checkbox" >
                    <label for="cat{{$c->id}}"> {{$c->nom}} </label>
                  </li>
                @endforeach
                </ul>
              </div>
              
              <!-- Categories -->
              <h6>Prix</h6>
              <!-- PRICE -->
              <div class="cost-price-content">
                <div id="price-range" class="price-range"></div>
                <span id="price-min" class="price-min" style="width:auto;">{{$minprice}}</span> 
                <span id="price-max" class="price-max" style="width:auto;">{{$maxprice}}</span> 
                <a href="{{ url('/store/filter/'.$minprice.'-'.$maxprice)}}" class="btn-round" >Filter</a>
            </div>
              
              
              <!-- Featured Brands -->
              <h6>Marques de produits</h6>
              <div class="checkbox checkbox-primary">
                <ul>
                @foreach($allmarques as $m)
                  <li>
                    <input id="brand1" class="styled" type="checkbox" >
                    <label for="brand1">{{ strtoupper($m->title) }} <span>( {{ $m->countProducts() }} )</span> </label>
                  </li>
                @endforeach
                </ul>
              </div>
              
              <!-- Pubs -->
             
              <div class="rating">
                <ul>
                  <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> <span>(218)</span></a></li>
                  <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(178)</span></a></li>
                  <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(79)</span></a></li>
                  <li><a href="#."><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(188)</span></a></li>
                </ul>
              </div>
              
              
            
            </div>
          