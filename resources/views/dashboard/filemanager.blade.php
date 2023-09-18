@extends('dashboard.layouts.main')

@section('container')
    <div id="fm-main-block" class="mt-5">
        <div id="fm"></div>
    </div>

    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            // document.getElementById('fm-main-block').setAttribute('style', 'height:'+ window.innerHeight+ 'px');

            fm.$store.commit('fm/setFileCallback', function(fileUrl){
                window.opener.fmSetLink(fileUrl);
                window.close();
            });
        });
    </script>
@endsection

