<div class="modal fade" id="onload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Add this line to your code -->
    <div class="modal-dialog modal-dialog-centered col-10">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-fluid" src="images/puskesmas.jpg" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Modal JS Script -->
<script type="text/javascript">
    window.onload = () => {
        $('#onload').modal('show');
    }
</script>