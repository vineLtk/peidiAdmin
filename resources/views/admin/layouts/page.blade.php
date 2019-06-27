<div class="col-sm-12 col-md-5">
    <div class="dataTables_info"><div class="dataTables_length" >
    <label>展示 
        <select class="custom-select custom-select-sm form-control form-control-sm page-select-change">
            <option value="15" {{request('pageNum') != 15 ?'':'selected'}}>15 </option>
            <option value="25" {{request('pageNum') != 25 ?'':'selected'}}>25 </option>
            <option value="50" {{request('pageNum') != 50 ?'':'selected'}}>50 </option>
            <option value="100" {{request('pageNum') != 100 ?'':'selected'}}>100</option>
        </select>
         每页 {{$paginator->perPage()}} / {{$paginator->total()}}
    </label>
</div></div>
</div>

@if ($paginator->hasPages())
<div class="col-sm-12 col-md-7">
    <div class="dataTables_paginate paging_simple_numbers" >
        <ul class="pagination" style="flex-wrap:wrap;white-space:wrap">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous disabled" >
                <a href="javascript:void(0);" class="page-link">&lsaquo;</a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" class="page-link">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="paginate_button page-item disabled">
                    <a href="disabled"  class="page-link">{{ $element }}</a>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="paginate_button page-item active">
                        <a href="javascript:void(0);" class="page-link">{{ $page }}</a>
                    </li>
                    @else
                    <li class="paginate_button page-item">
                        <a href="{{ $url}}"  class="page-link">{{ $page }}</a>
                    </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="paginate_button page-item next" >
                <a href="{{ $paginator->nextPageUrl()}}" class="page-link">&rsaquo;</a>
            </li>
        @else
            <li class="paginate_button page-item next disabled" >
                <a href="javascript:void(0);" class="page-link">&rsaquo;</a>
            </li>
        @endif
        </ul>
    </div>
</div>
@endif
@section('script')
<script>
    $(".page-select-change").change(function(e){
        var query = window.location.search ? (window.location.search) : '?';
        var href = '';
        if(query.indexOf('page') > 0){
            var re  = eval('/('+ 'page'+'=)([^&]*)/gi');
            query = query.replace(re, 'page'+'='+'1');
        }
        if(query.indexOf('pageNum') > 0){
            var re  = eval('/('+ 'pageNum'+'=)([^&]*)/gi');
            href = query.replace(re, 'pageNum'+'='+this.value);
        }else{
            href = query + '&pageNum='+this.value;
        }
        // console.log(href);
        window.location.href = window.location.origin + window.location.pathname + href;
    });
</script>
@endsection

