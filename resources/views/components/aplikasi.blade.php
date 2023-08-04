{{-- Aplikasi Umum --}}
<div id="app_umum" class="container container-fluid py-5">
    <div class="grid">
        <div class="row">
            <h2 class="text-white mb-3 text-center" >Aplikasi Umum</h2>
        </div>
        <div id="app-umum" class="row row-cols-auto justify-content-center">
            {!! $app_umum->body !!}
        </div>
    </div>
</div>
{{-- End Aplikasi Umum --}}

{{-- Aplikasi Internal --}}
<div class="container container-fluid py-5">
    <div class="grid">
        <div class="row">
            <h2 class="text-dark mb-3 text-center" >Aplikasi Internal</h2>
        </div>
        <div id="app-internal" class="row row-cols-auto justify-content-center">
            {!! $app_internal->body !!}
        </div>
    </div>
</div>
{{-- End Aplikasi internal --}}