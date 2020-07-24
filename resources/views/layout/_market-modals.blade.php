<div class="modal fade " id="cartmodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content" style="border-radius: 1px;">
            <div class="modal-header" style="background: black;">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white; font-size: 1.8rem;">Article ajouté au panier avec succès !!!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Votre article est ajouté avec succès; Voulez vous continuer les courses ou procéder à la commande ?
            </div>
            <div class="modal-footer padding-3">
                <button type="button" class="btn btn-round padding-3" data-dismiss="modal" style="color: black;background: transparent;border: 1px solid;">Continuer les courses</button>
                <a href="{{URL::to('/panier')}}" type="button" class="btn btn-round padding-3">Valider la commande</a>
            </div>
        </div>
    </div>
</div>