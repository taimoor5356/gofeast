@extends('layouts.app')
@section('meta_tags')

@endsection
@section('styles')
<style>
    .pagination {
        display: flex;
        justify-content: center;
        padding-left: 0;
        list-style: none;
        border-radius: 0.375rem;
    }

    .pagination .page-item .page-link {
        color: #bd3c4a;
        /* Custom text color */
        border: 1px solid #bd3c4a;
        padding: 0.5rem 0.75rem;
        margin: 0 0.25rem;
        border-radius: 0.375rem;
    }

    .pagination .page-item.active .page-link {
        background-color: #bd3c4a;
        /* Active page background */
        border-color: #bd3c4a;
        color: white;
    }

    .pagination .page-item .page-link:hover {
        background-color: #bd3c4a;
        border-color: #bd3c4a;
        color: #fff;
        /* Hover text color */
    }

    p.small.text-muted {
        display: none;
    }
</style>
@endsection
@section('content')

<section class="wrapper px-0" style="background-size: 100% 100%;">
    <div class="container p-0">
        <p>
            <a href="{{route('home')}}">Home </a> > <a href="{{route('restaurants')}}">Restaurant</a> > {{$pretty_name}} > Menu
        </p>
        <div class="container-fluid p-0">
            <div class="row">
                @foreach($restaurantItems as $item)
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-4">
                        <a href="https://orders.gofeast.pk/store?id={{$restaurant->id}}&page=store">
                            <div class="d-flex flex-column justify-content-between align-items-center p-2"
                                style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                                <div style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <img src="https://dashboard.gomeat.io/storage/app/public/product/{{$item->image}}"
                                        class="img-fluid restaurant-image"
                                        style="border-radius: 15px; width: 100%; height: 150px; object-fit: cover;" alt="">
                                </div>
                                <div class="mt-auto text-start border-top border-default pt-2" style="width: 100%;">
                                    <p style="font-size: 15px; font-weight: bold; margin-bottom: 0; padding-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">{{$item->name}}</p>
                                    <p style="font-size: 12px; color: #555; padding-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">
                                       Rs.{{$item->price}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                @if ($restaurantItems->hasPages())
                <nav>
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($restaurantItems->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $restaurantItems->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- Page 1 --}}
                        @if ($restaurantItems->currentPage() == 1)
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $restaurantItems->url(1) }}">1</a>
                        </li>
                        @endif

                        {{-- Pages 2 and 3 --}}
                        @for ($i = 2; $i <= 2; $i++)
                            @if ($restaurantItems->currentPage() == $i)
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $i }}</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $restaurantItems->url($i) }}">{{ $i }}</a>
                            </li>
                            @endif
                            @endfor

                            {{-- Dots (Ellipsis) --}}
                            @if ($restaurantItems->currentPage() > 2 && $restaurantItems->currentPage() < $restaurantItems->lastPage() - 1)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($restaurantItems->currentPage() == $restaurantItems->lastPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $restaurantItems->lastPage() }}</span>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $restaurantItems->url($restaurantItems->lastPage()) }}">{{ $restaurantItems->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($restaurantItems->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $restaurantItems->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                                @else
                                <li class="page-item disabled" aria-disabled="true">
                                    <span class="page-link">&raquo;</span>
                                </li>
                                @endif
                    </ul>
                </nav>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection