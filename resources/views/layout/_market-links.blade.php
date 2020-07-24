<ul class="pagination">
    <?php
        $nb = $produits->lastPage();
    ?>
    @if($nb > 1)
        @if(!$produits->onFirstPage())
        <li><a href="{{$produits->previousPageUrl()}}" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
        @endif
        @for($i=1; $i <= $nb; $i++)
            <li><a class="{{$i == $produits->currentPage() ? 'active' : ''}}" href="{{$produits->url($i)}}">{{$i}}</a></li>
        @endfor

        @if($produits->hasMorePages())
        <li><a href="{{$produits->nextPageUrl()}}" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
        @endif
    @endif
</ul>