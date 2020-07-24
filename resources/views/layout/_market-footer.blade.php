<!-- Newslatter -->
<section class="newslatter">
      <div class="container">
        <div class="row">
          @if(isset($success))
              <ul class="alert alert-success">
                  <li>{{ $success }}</li>
              </ul>
          @endif
          {{--@if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif--}}
        </div>
        <div class="row">
          <div class="col-md-8">
            <h3>Ne ratez aucun événement<span>Abonnez-vous à notre Newsletter maintenant</span></h3>
          </div>
          <div class="col-md-4">
            <form method='POST' action="{{url(route('subscribe-newsletter'))}}">
              {{csrf_field()}}
              <input type="email" placeholder="Votre adresse mail..." name="email" value='{{old("email")}}'>
              <button type="submit">Souscrire!</button>
            </form>
          </div>
        </div>
      </div>
    </section>

<footer class="footer-dark">
    <div class="container"> 
      
      <!-- Footer Upside Links -->
      <div class="foot-link">
        <ul>
          <li><a href="{{url(route('apropos'))}}"> A propos </a></li>
          <li><a href="{{url(route('livraison-remboursement'))}}"> Livraison et remboursement </a></li>
          <li><a href="https://kadmarket.shop/public/files/kCGU.pdf" target="_blank"> Politique de confidentialite </a></li>
          <li><a href="{{ url('/contact') }}"> Contactez-nous</a></li>
        </ul>
      </div>
      <div class="row"> 
        
        <!-- Contact -->
        <div class="col-md-4">
          <h4>Contact Kadmarket!</h4>
          <p>Addresse: Libreville- Clando Lalala à Droite, face Foberd Gabon.</p>
          <p>Téléphone: +241 74 98 03 03</p>
          <p>Email: info@kadmarket.shop</p>
          <div class="social-links"> 
            <div class="col-md-6">
              <a href="https://www.facebook.com/kadmarket"><i class="fa fa-facebook" style="color:blue;"></i> Kadmarket</a> <br>
              <a href="https://www.facebook.com/oraimo.gabon"><i class="fa fa-facebook" style="color:green;"></i> Oraimo.gabon</a> <br>
            </div>
            <div class="col-md-6">
              <a href="#."><i class="fa fa-twitter"></i> Oraimo</a> <br>
              <a href="https://www.instagram.com/oraimogabon/"><i class="fa fa-instagram"></i> Oraimo</a> <br>
            </div>
          </div>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Nos marques</h4>
          <ul class="links-footer">
          <!-- @foreach($allcats as $c)
            <li ><a href="{{url('/store/'.time().'-'.$c->id.'-'.$c->slug)}}"> {{$c->nom}} </a> </li>
          @endforeach -->
          @foreach($allmarques as $m)
          <li><a href="{{url('/store?marque='.time().'-'.$m->id.'-'.str_slug($m->slug))}}"> {{ ucfirst(strtolower($m->title))}} </a></li>
          @endforeach
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-3">
          <h4>Nos Services</h4>
          <ul class="links-footer">
            <li><a href="{{url(route('livraison-remboursement'))}}">Livraison</a></li>
            <li><a href="#."> Paiement securise</a></li>
            <li><a href="#."> Partenaires</a></li>
            <li><a href="{{url('/contact')}}"> Contact </a></li>
          </ul>
        </div>
        
        <!-- Categories -->
        <div class="col-md-2">
          <h4>Informations</h4>
          <ul class="links-footer">
            <li><a href="{{url(route('apropos'))}}"> A propos</a></li>
            <li><a href="{{url(route('faq'))}}"> FAQs</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
