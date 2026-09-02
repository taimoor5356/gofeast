@extends('layouts.app')
@section('meta_tags')
    {!! $schema_code !!}
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
                        <a href="https://order.gofeast.io/store?id={{$item['store_id']}}&cat_id={{$item['category']['parent_id']}}&sub_id={{$item['category']['id']}}&moduleId={{$item['store']['module_id']}}&page=module">
                            <div class="d-flex flex-column justify-content-between align-items-center p-2"
                                style="border-radius: 15px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                                <div style="height: 200px; display: flex; align-items: center; justify-content: center;">
                                    <img src="https://dashboard.gofeast.io/storage/app/public/product/{{$item['image']}}"
                                        class="img-fluid restaurant-image" referrerpolicy="no-referrer"
                                        style="border-radius: 15px; width: 100%; height: 150px; object-fit: cover;" alt="Product Image">
                                </div>
                                <div class="mt-auto text-start border-top border-default pt-2" style="width: 100%;">
                                    <p style="font-size: 15px; font-weight: bold; margin-bottom: 0; padding-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">{{$item['name']}}</p>
                                    <p style="font-size: 12px; color: #555; padding-bottom: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" class="text-start">
                                       Rs.{{$item['price']}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Pagination Links -->
            <div class="d-flex justify-content-center mt-4">
                {{ $restaurantItems->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</section>

<div class="position-fixed top-0 end-0 p-3" style="z-index: 6000;">
    <div id="menuUpdateToast" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <i class="uil uil-check-circle me-1"></i> This menu has been updated. Refreshing…
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var checkUrl = @json(route('restaurant.check-updates', $restaurant_slug));
        var pollInterval = 20000;
        var lastSignature = null;
        var stopped = false;

        function showUpdateToastAndReload() {
            stopped = true;
            var toastEl = document.getElementById('menuUpdateToast');
            if (toastEl && window.bootstrap && window.bootstrap.Toast) {
                var toast = new bootstrap.Toast(toastEl, { autohide: false });
                toast.show();
            }
            setTimeout(function () {
                window.location.reload();
            }, 2500);
        }

        function poll() {
            if (stopped || document.hidden) return;
            fetch(checkUrl, { headers: { 'Accept': 'application/json' } })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    if (!data.signature) return;
                    if (lastSignature === null) {
                        lastSignature = data.signature;
                        return;
                    }
                    if (data.signature !== lastSignature) {
                        showUpdateToastAndReload();
                    }
                })
                .catch(function () {});
        }

        poll();
        var timer = setInterval(poll, pollInterval);
        window.addEventListener('beforeunload', function () { clearInterval(timer); });
    });
</script>
@endsection