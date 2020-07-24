  <!-- Top bar -->

  <div class="top-bar">
    <div class="container">
      <p>Bienvenue sur KADMARKET!
      <span><i class="fa fa-phone"></i> <strong>Service client:</strong> (+241) 74 98 03 03</span> 
      </p>
      
      <div class="right-sec">
        <ul>
          @if(Auth::check())
          <li class="active"><a href="{{url(route('webLogout'))}}">Deconnexion </a></li>
          @else
          <li><a href="{{url(route('webLogin'))}}">Connexion/Inscription </a></li>
          @endif
          <li><a href="{{url(route('store'))}}">Notre boutique </a></li>
          <!-- <li><a href="#.">FAQ </a></li>
          <li><a href="#.">Newsletter </a></li> -->
          <!-- <li>
            <select class="selectpicker">
              <option>French</option>
              <option>German</option>
              <option>Italian</option>
              <option>Japanese</option>
            </select>
          </li> -->
          <li>
            <select class="selectpicker">
              <option>Devise</option>
              <option>XAF(CFA)</option>
              <!-- <option>GBP</option>
              <option>Euro</option>
              <option>JPY</option> -->
            </select>
          </li>
        </ul>
        <div class="social-top"> 
          <a href="#."><i class="fa fa-facebook"></i></a> 
          <a href="#."><i class="fa fa-twitter"></i></a> 
          <a href="#."><i class="fa fa-linkedin"></i></a> 
          <a href="#."><i class="fa fa-dribbble"></i></a> 
          <a href="#."><i class="fa fa-pinterest"></i></a> 
        </div>
      </div>
    </div>
  </div>
  