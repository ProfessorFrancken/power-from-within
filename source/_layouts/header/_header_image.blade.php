<style>
 .header__registration-cta::before {
     background-image: url('./images/symposium/rocket-min.jpg') !important;
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
