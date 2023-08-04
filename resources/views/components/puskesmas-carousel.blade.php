<div class="container my-5">
    <div class="row">
        <div class="text-center">
            <h2>Puskesmas dan UPTD</h2>
            <p class="text-center">Kami mengutamakan pelayanan masyarakat di Puskesmas dan UPTD Semarang.</p>  
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-15 d-flex justify-content-center">
            <div id="myCarousel" class="carousel carousel-card slide container" data-bs-ride="carousel">
                <div  id="puskesmas" class="carousel-inner carousel-inners">
                    {!! $puskesmas->body !!}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span><i class="bi bi-arrow-left-square-fill text-dark fs-2" aria-hidden="true"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span><i class="bi bi-arrow-right-square-fill text-dark fs-2" aria-hidden="true"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>