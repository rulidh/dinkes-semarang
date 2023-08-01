@extends('layouts.main')

@section('container')
<style>
    #myCarousel {
        margin-top: 0;
    }
</style>

<div class="container container-fluid">
    <div class="row">
        <div class="mt-2 d-flex flex-column justify-content-center align-items-center">
            <h2>Profil Kesehatan</h2>
            <p class="col-md-10">
                Profil Kesehatan adalah gambaran situasi kesehatan di Kota Semarang yang memuat berbagai data tentang situasi dan hasil pembangunan kesehatan selama kurun waktu satu tahun. Data dan informasi yang termuat meliputi : 
            </p>
            <ol class="col-md-10">
                <li>Data demografi</li>
                <li>Sumber daya kesehatan</li>
                <li>Derajat kesehatan</li>
                <li>Keadaan lingkungan</li>
                <li>Perilaku masyarakat</li>
                <li>Upaya kesehatan </li>
                <li>Manajemen kesehatan.</li>
            </ol>
        </div>
    </div>
</div>
<div class="container container-fluid py-5">
    <div class="row">    
        <div class="mt-2 d-flex flex-column justify-content-center align-items-center">
            <h2>Download</h2>
            <div class="container text-center pt-2">
                <div id="myCarousel" class="carousel carousel-card slide container" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-inners">
                        <div class="carousel-item carousel-items active">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/FIXX%20PROFIL%202022%20JADIIII.pdf" class="under">
                                            Profil Kesehatan 2022
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="carousel-item carousel-items">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/Profil%202021/FIX_Profil%20Kesehatan%202021.pdf" class="under">
                                            Profil Kesehatan 2021
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="carousel-item carousel-items">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/Profil/Profil%20Kesehatan%202020.pdf" class="under">
                                            Profil Kesehatan 2020
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="carousel-item carousel-items">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/Profil/Profil%20Kesehatan%202019.pdf" class="under">
                                            Profil Kesehatan 2019
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="carousel-item carousel-items">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/Profil%20Kesehatan%202018.pdf" class="under">
                                            Profil Kesehatan 2018
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="carousel-item carousel-items">
                            <div class="col-md-sm-3 px-2">
                                <div class="card">
                                    <img class="img-fluid" src="/images/profil-kesehatan/2021.png" alt="">
                                    <div class="card-body">                                        
                                        <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                                        href="https://dinkes.semarangkota.go.id/asset/upload/Profil/Profil/Profil%20Kesehatan%202017.pdf" class="under">
                                            Profil Kesehatan 2017
                                        </a>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                    {{-- button prev --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span aria-hidden="true">
                            <i class="bi bi-arrow-left-square-fill text-dark fs-1"></i>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    {{-- botton next --}}
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span aria-hidden="true">
                            <i class="bi bi-arrow-right-square-fill text-dark fs-1"></i>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection