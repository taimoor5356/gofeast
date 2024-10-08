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

    .restaurant-image {
        
    }
</style>
@endsection
@section('content')

<section class="wrapper px-0" style="background-size: 100% 100%;">
    <div class="container p-0">
        <p>
            <a href="https://www.gofeast.pk">Home </a> > Restaurants
        </p>
        <div class="container-fluid p-0">
            <div class="row">
                @if (count($restaurants) > 0)
                    @foreach($restaurants as $restaurant)
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-4">
                        <a href="{{route('restaurant.details', [$restaurant->pretty_name])}}">
                            <div class="d-flex flex-column justify-content-between align-items-center p-2"
                                style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                                <div style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <img src="https://dashboard.gomeat.io/storage/app/public/store/{{$restaurant->logo}}"
                                        class="img-fluid restaurant-image"
                                        style="border-radius: 15px; width: 100%; height: 150px; object-fit: cover;" alt="">
                                </div>
                                <div class="mt-auto text-start border-top border-default pt-2" style="width: 100%;">
                                    <p style="font-size: 15px; font-weight: bold; margin-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">{{$restaurant->name}}</p>
                                    <p style="font-size: 12px; color: #555; margin-top: 5px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">
                                        {{$restaurant->address}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                @else 
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4 text-center">
                        <h6>No restaurants available</h6>
                        <a href="{{route('restaurants')}}" class="btn btn-danger">
                            Return to all restaurants
                        </a>
                    </div>
                @endif
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                @if ($restaurants->hasPages())
                <nav>
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($restaurants->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">&laquo;</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $restaurants->previousPageUrl() }}" rel="prev">&laquo;</a>
                        </li>
                        @endif

                        {{-- Page 1 --}}
                        @if ($restaurants->currentPage() == 1)
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $restaurants->url(1) }}">1</a>
                        </li>
                        @endif

                        {{-- Pages 2 and 3 --}}
                        @for ($i = 2; $i <= 2; $i++)
                            @if ($restaurants->currentPage() == $i)
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $i }}</span>
                            </li>
                            @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $restaurants->url($i) }}">{{ $i }}</a>
                            </li>
                            @endif
                            @endfor

                            {{-- Dots (Ellipsis) --}}
                            @if ($restaurants->currentPage() > 2 && $restaurants->currentPage() < $restaurants->lastPage() - 1)
                                <li class="page-item disabled"><span class="page-link">...</span></li>
                                @endif

                                {{-- Last Page Link --}}
                                @if ($restaurants->currentPage() == $restaurants->lastPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $restaurants->lastPage() }}</span>
                                </li>
                                @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $restaurants->url($restaurants->lastPage()) }}">{{ $restaurants->lastPage() }}</a>
                                </li>
                                @endif

                                {{-- Next Page Link --}}
                                @if ($restaurants->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $restaurants->nextPageUrl() }}" rel="next">&raquo;</a>
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