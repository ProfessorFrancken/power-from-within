<div
    class="skew-md--top-right header__logo d-flex justify-content-between justify-content-md-end"
>
    <a class="header__title-link align-items-center align-middle d-inline-flex" href="/">
        <img
            alt="Logo of T.F.V. 'Professor Francken'"
            src="./images/logo-min.png"
            class="img-fluid"
        />
        <span class="header__title text-left">
            T.F.V.<br class="hidden-md-down"/>
            'Professor<br class="hidden-md-down"/>
            Francken'
        </span>
    </a>

    @include('_layouts.navigation._hamburger')

    {{--

        This section contains all of the menu items
        We're using partial views so we can focus on
        the structure on the menu

    --}}
    <ul class="navigation-list clearfix" id="main-menu">
        @foreach ($page->items as $item)
            @include('_layouts.navigation._mobile-navigation-item', [
                'url' => $item['url'],
                'title' => $item['title'],
                'icon' => $item['icon'],
                'subItems' => $item['subItems'] ?? [],
            ])
        @endforeach
    </ul>
</div>
