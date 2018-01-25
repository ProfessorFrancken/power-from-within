<style>
 .header__registration-cta::before {
     background-image:
        linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),
        url('./images/{{ $header_image }}') !important;
 }

 .header__registration-cta::before,
 .header__registration-cta::after {
    background-position-y: -100px;
 }
</style>
<div class="stop-overflow">
    <div class="header__registration-cta">
        <div class="registration-cta container h-100">
            <div class="row align-items-center h-100">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
