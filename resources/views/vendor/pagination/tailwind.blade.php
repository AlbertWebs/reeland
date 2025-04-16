
<div class="padding_bottom text-center">
    @if ($paginator->hasPages())
            <ul class="pager">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    {{-- <li >
                        <a aria-hidden="true">&lsaquo;</a>
                    </li> --}}
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active" aria-current="page"><a>{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li>
                        <a href="{{ $paginator->nextPageUrl() }}">&rsaquo;</a>
                    </li>
                @else
                    {{-- <li>
                        <a aria-hidden="true">&rsaquo;</a>
                    </li> --}}
                @endif
            </ul>
    @endif
</div>
