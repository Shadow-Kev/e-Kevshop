@extends('layout.market')

@section('content')



<!-- Content -->
<div id="content"> 
    
    <!-- Linking -->
    <div class="linking">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
        </ol>
      </div>
    </div>
    
    <!-- Contact -->
    <section class="contact-sec padding-top-40 padding-bottom-80">
      <div class="container"> 
        
        <!-- MAP -->
        <section class="map-block margin-bottom-40">
            
        <div class="row">
            <div class="map-wrapper col-md-12" id="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-zoom="13" data-style="1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.77899574764723!2d9.468834252471837!3d0.3630741996901834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3f043806d9a7%3A0x248754e753626f79!2sKADMARKET!5e1!3m2!1sfr!2sga!4v1536766854801"
                                    width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
        </div>  
          <!-- <div class="markers-wrapper addresses-block"> 
              
          <a class="marker" data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560" data-string="Smart Tech"></a> 
        </div>
    -->
        </section>
        <section>

         <!-- Conatct -->
        <div class="contact">
          <div class="contact-form"> 
            <!-- FORM  -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
              <div class="row">
                <div class="col-md-8"> 
                  
                  <!-- Payment information -->
                  <div class="heading">
                    <h2>Avez vous une question pour nous ?</h2>
                  </div>
                  <ul class="row">
                    <li class="col-sm-6">
                      <label>Nom
                        <input type="text" class="form-control" name="name" id="name" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-6">
                      <label>Prenom
                        <input type="text" class="form-control" name="email" id="email" placeholder="">
                      </label>
                    </li>
                    <li class="col-sm-12">
                      <label>Message
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder=""></textarea>
                      </label>
                    </li>
                    <li class="col-sm-12 no-margin">
                      <button type="submit" value="submit" class="btn-round" id="btn_submit" onClick="">Send Message</button>
                    </li>
                  </ul>
                </div>
                
                <!-- Conatct Infomation -->
                <div class="col-md-4">
                  <div class="contact-info">
                    <h5>Kadmarket</h5>
                    <p>Numéro 1 de la vente des téléphones Portables au Gabon</p>
                    <hr>
                    <h6> Addresse :</h6>
                    <p> Libreville- Clando Lalala à Droite, face Foberd Gabon.</p>
                    <h6>Tel : </h6>
                    <p>(+241) 74 98 03 03</p>
                    <h6>Email:</h6>
                    <p>info@kadmarket.shop</p>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        </section>
        
       
      </div>
    </section>
    
   
  </div>
<!-- 
      <div class="col-md-12 contact-map outer-bottom-vs">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d446.77899574764723!2d9.468834252471837!3d0.3630741996901834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3f043806d9a7%3A0x248754e753626f79!2sKADMARKET!5e1!3m2!1sfr!2sga!4v1536766854801"
                                width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                -->


@endsection
