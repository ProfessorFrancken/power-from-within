@component('_layouts.header._header_image')
    <div class="registration-cta__body col-md-6 offset-md-3 align-self-center">
        <h1>
            <strong>
                <small>
                {{ $page->date->format('j') }}th
                of
                {{ $page->date->format('M')}}<br />
                </small>
                {{ $page->symposium_title }}
                <br />
            </strong>
            <small>
                <em>
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
