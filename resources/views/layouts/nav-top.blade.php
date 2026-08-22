<div class="bg-primary text-white fw-bold fs-15 nav-top-bar">
    <div class="container d-md-flex flex-md-row position-relative">
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mb-1 me-2"> <i class="uil uil-download-alt"></i></div>
            <address class="mb-0">Download App Now!</address>
        </div>
        <div class="d-flex flex-row align-items-center me-6 ms-auto">
            <div class="icon text-white fs-22 mb-1 me-2"> <i class="uil uil-android"></i></div>
            <p class="mb-0"><a href="https://play.google.com/store/apps/details?id=com.gomeat.app" target="_blank" class="link-white hover">Android App</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mb-1 me-2"> <i class="uil uil-apple"></i></div>
            <p class="mb-0"><a href="https://apps.apple.com/us/app/gomeat/id1441921154" target="_blank" class="link-white hover">iOS App</a></p>
        </div>
        <div class="top-search-wrap">
            <form action="{{ route('restaurants') }}" method="GET" class="top-search-form">
                <input type="search" name="name" class="form-control form-control-sm" placeholder="Search restaurant or food" value="{{ request('name') }}">
                <button type="submit" class="top-search-submit" aria-label="Search">
                    <i class="uil uil-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
