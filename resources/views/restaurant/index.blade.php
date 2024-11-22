@extends('layouts.app')
@section('meta_tags')
@if(!empty($pickup_meta_tags))
{!! $pickup_meta_tags !!}
@elseif (!empty($delivery_meta_tags))
{!! $delivery_meta_tags !!}
@endif
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

    .restaurant-image {}
</style>
@endsection
@section('content')

<section class="wrapper px-0" style="background-size: 100% 100%;">
    <div class="container">
        <p>
            <a href="https://www.gofeast.pk">Home </a> > Restaurants
        </p>
        <div class="container-fluid p-0">
            <div class="row">
                @if (count($restaurants) > 0)
                @foreach($restaurants as $restaurant)
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mb-4">
                    <a href="@if(!empty($restaurant->pretty_name)) {{route('restaurant.details', [$restaurant->pretty_name])}} @else # @endif">
                        <div class="d-flex flex-column justify-content-between align-items-center p-2"
                            style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                            <div style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                <img src="https://dashboard.gomeat.io/storage/app/public/store/{{$restaurant->logo}}"
                                    class="img-fluid restaurant-image"
                                    style="border-radius: 15px; width: 100%; height: 150px; object-fit: cover;" alt="Restaurant Image">
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
                {{ $restaurants->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</section>

@endsection