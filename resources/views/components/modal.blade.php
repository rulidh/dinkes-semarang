<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        {!! $modal->body !!}
                            {{-- <img class="imagepreview img-fluid rounded mx-auto d-block" src="images/puskesmas.jpg" style="width: 100%;" alt=""> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>