@component('_layouts.header._header_image')
    <div class="registration-cta__body col-md-6 offset-md-3 align-self-center">
        <img
            alt="Power from within logo"
            src="./images/FranckenSymposium2018Logo-klein.png"
            class="rounded-circle d-md-none img-fluid"
            style="max-width: 200px"
        />

        <h1>
            <strong>
                <small>
                {{ $page->date->format('j') }}th
                of
                {{ $page->date->format('M')}}<br />
                </small>
                <span class="">
                {{ $page->symposium_title }}
                <br />
                </span>
            </strong>
            <small>
                <em class="d-none d-md-block">
                    {{ $page->symposium_sub_title }}
                </em>
            </small>
        </h1>
    </div>
    <div class="col-md-1 registration-cta__button">
        <a class="btn btn-lg btn-primary" href="#register">Register</a>
    </div>

    @slot('header_image')
        {{ $header_image }}
    @endslot
@endcomponent
