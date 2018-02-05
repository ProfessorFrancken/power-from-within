<header class="header" id="top">
    <div class="container-fluid">
        <div class="row">
            {{-- Note: we add a padding left 0 since the gutter from the row adds a padding --}}
            <div class="col-12 col-md-4 col-lg-5 pl-0 pr-0" style="z-index: 1">
                @include("_layouts._logo")
            </div>
            <div class="col col-sm-4 col-md-8 col-lg-7 d-none d-md-block">
                @include("_layouts.navigation._navigation")
            </div>
        </div>
    </div>

    @yield('header-image')
</header>
