@if(count($dataPosts))
    <div class="card-tools ml-auto">
    <span class="count">
        {{ $dataPosts->firstItem() }}-{{ $dataPosts->lastItem() }}/{{ $dataPosts->total() }}
    </span>
        <ul class="pagination pagination-sm float-right ml-3">
            <li class="page-item @if(!$dataPosts->previousPageUrl()) disabled @endif">
                <a class="page-link" href="{{ $dataPosts->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item @if(!$dataPosts->nextPageUrl()) disabled @endif()">
                <a class="page-link" href="{{ $dataPosts->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
@endif

