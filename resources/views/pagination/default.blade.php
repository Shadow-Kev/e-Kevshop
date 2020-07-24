

@if ($paginator->hasPages())
    <ul class="pagination" >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link" style="background-color: #c33720;color: #ffffff">&laquo;</span></li>
        @else
            <li class="page-item" ><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" style="background-color: #c33720;color: #ffffff">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link" style="background-color: #c33720;color: #ffffff">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" rel="prev" id="sweetactive"><span class="page-link" style="background-color: #ffffff;color: #c33720">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}" style="background-color: #c33720;color: #ffffff">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" style="background-color: #c33720;color: #ffffff">&raquo;</a></li>
        @else
            <li class="page-item disabled"><span class="page-link" style="background-color: #c33720;color: #ffffff">&raquo;</span></li>
        @endif
    </ul>
@endif
