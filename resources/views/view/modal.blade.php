<div class="modal" id="cropperModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <img id="imageCropper" src="{{ asset('/images/200_default.png') }}" height="400">
                </div>
            </div>
            <div class="modal-footer">
                <a id="img-rotation" class="btn btn-success"><i class="fa fa-repeat" aria-hidden="true"></i></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="cropImg" class="btn btn-primary">Обрізати фото</button>
            </div>
        </div>
    </div>
</div>
