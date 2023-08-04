<style>
    img.app{
        width: 130px;
        height: 130px;
        margin: 10px;
        transition: .3s;
    }
    img.app:hover{
        transform: scale(1.1);
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 17px;
    }
    #app_umum{
        background-color: #FA1F23;
    }
</style>

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
<script>
    $('#app-umum').children('div')
      .removeAttr('style')
      .addClass('col').children('a').children('img')
                            .removeAttr('style')
                            .addClass('app');
  </script>
{{-- End Aplikasi Umum --}}

{{-- Aplikasi Internal --}}
<div class="container container-fluid py-5">
    <div class="grid">
        <div id="app-internal" class="row row-cols-auto justify-content-center">
            {!! $app_internal->body !!}
        </div>
    </div>
  </div>
  <script>
    $('#app-internal').children('div')
      .removeAttr('style')
      .addClass('col').children('a').children('img')
                            .removeAttr('style')
                            .addClass('app');
  </script>
{{-- <div class="container container-fluid py-5">
    <div class="grid">
        <div class="row row-cols-auto justify-content-center">
            <div class="col">
                <img class="app" src="/images/app-internal/AI-0.png" alt="hover">
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="http://119.2.50.170:9095/sip">
                    <img class="app" src="/images/app-internal/AI-1.png" alt="hover">
                </a>
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="https://dinkes.semarangkota.go.id/hris">
                    <img class="app" src="/images/app-internal/AI-2.png" alt="hover">
                </a> 
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="http://119.2.50.170:9093/spgdt-beta">
                    <img class="app" src="/images/app-internal/AI-3.png" alt="hover">
                </a>
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="https://dinkes.semarangkota.go.id/siklinik">
                    <img class="app" src="/images/app-internal/AI-4.png" alt="hover">
                </a>
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="https://dinkes.semarangkota.go.id/sipp-nakes">
                    <img class="app" src="/images/app-internal/AI-5.png" alt="hover">
                </a>
            </div>
            <div class="col">
                <a class="link-body-emphasis" target="img" href="https://dinkes.semarangkota.go.id/sikempling">
                    <img class="app" src="/images/app-internal/AI-6.png" alt="hover">
                </a>
            </div>
        </div>
    </div>
</div> --}}
{{-- End Aplikasi internal --}}