@php $searchType = request('type', 'store'); @endphp
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
                <div class="top-search-type-dropdown" id="topSearchTypeDropdown">
                    <button type="button" class="top-search-type-btn" id="topSearchTypeBtn" aria-haspopup="listbox" aria-expanded="false">
                        <span class="top-search-type-icon-badge">
                            <i class="uil {{ $searchType === 'item' ? 'uil-pizza-slice' : 'uil-store' }} top-search-type-icon"></i>
                        </span>
                        <span class="top-search-type-label">{{ $searchType === 'item' ? 'Item' : 'Restaurant' }}</span>
                        <i class="uil uil-angle-down top-search-type-caret"></i>
                    </button>
                    <ul class="top-search-type-menu" role="listbox" id="topSearchTypeMenu">
                        <li role="option" aria-label="Restaurant" title="Restaurant" data-value="store" data-label="Restaurant" data-icon="uil-store" class="{{ $searchType !== 'item' ? 'active' : '' }}">
                            <span class="top-search-type-icon-badge"><i class="uil uil-store"></i></span>
                        </li>
                        <li role="option" aria-label="Item" title="Item" data-value="item" data-label="Item" data-icon="uil-pizza-slice" class="{{ $searchType === 'item' ? 'active' : '' }}">
                            <span class="top-search-type-icon-badge"><i class="uil uil-pizza-slice"></i></span>
                        </li>
                    </ul>
                    <input type="hidden" name="type" id="topSearchTypeInput" value="{{ $searchType }}">
                </div>
                <input type="search" name="name" class="form-control form-control-sm" placeholder="Search" value="{{ request('name') }}">
                <button type="submit" class="top-search-submit" aria-label="Search">
                    <i class="uil uil-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    (function () {
        var dropdown = document.getElementById('topSearchTypeDropdown');
        if (!dropdown) return;
        var btn = document.getElementById('topSearchTypeBtn');
        var menu = document.getElementById('topSearchTypeMenu');
        var input = document.getElementById('topSearchTypeInput');
        var iconEl = btn.querySelector('.top-search-type-icon');
        var labelEl = btn.querySelector('.top-search-type-label');
        var options = menu.querySelectorAll('li');

        function closeMenu() {
            dropdown.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
        }

        function openMenu() {
            dropdown.classList.add('open');
            btn.setAttribute('aria-expanded', 'true');
        }

        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (dropdown.classList.contains('open')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        options.forEach(function (opt) {
            opt.addEventListener('click', function () {
                options.forEach(function (o) { o.classList.remove('active'); });
                opt.classList.add('active');
                input.value = opt.getAttribute('data-value');
                iconEl.className = 'uil ' + opt.getAttribute('data-icon') + ' top-search-type-icon';
                labelEl.textContent = opt.getAttribute('data-label');
                closeMenu();
            });
        });

        document.addEventListener('click', function (e) {
            if (!dropdown.contains(e.target)) closeMenu();
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeMenu();
        });
    })();
</script>
