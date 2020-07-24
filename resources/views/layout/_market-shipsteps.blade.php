

  <!-- Ship Process -->
  <div class="ship-process padding-top-30 padding-bottom-30">
      <div class="container">
        <ul class="row">
          
          <!-- Step 1 -->
          <li class="col-sm-3 {{ (isset($page) && $page=='liste-panier') ? 'current' :'' }}">
            <div class="media-left"> <i class="fa fa-shopping-cart"></i> </div>
            <div class="media-body"> <span>Step 1</span>
              <h6>Panier</h6>
            </div>
          </li>
          
          <!-- Step 2 -->
          <li class="col-sm-3 {{ (isset($page) && $page=='livraison-commande') ? 'current' :'' }}">
            <div class="media-left"> <i class="fa fa-bug"></i> </div>
            <div class="media-body"> <span>Step 2</span>
              <h6>Livraison</h6>
            </div>
          </li>

          <!-- Step 3 -->
          <li class="col-sm-3 {{ (isset($page) && $page=='modepaie-commande') ? 'current' :'' }}">
            <div class="media-left"> <i class="fa fa-money"></i> </div>
            <div class="media-body"> <span>Step 3</span>
              <h6>Paiement</h6>
            </div>
          </li>
          
          <!-- Step 4 -->

          <li class="col-sm-3 {{ (isset($page) && $page=='confirm-commande') ? 'current' :'' }}">
            <div class="media-left"> <i class="fa fa-check-circle"></i> </div>
            <div class="media-body"> <span>Step 4</span>
              <h6>Confirmation</h6>
            </div>
          </li>
        </ul>
      </div>
    </div>