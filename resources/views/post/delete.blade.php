<div class="modal-content">
    <div  class="modal-header modal-head-radius bg-primary">
        <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="">
            <h6>Are your sure to change status ?</h6>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" onclick="delete_record({{ $del_id }})" class="btn  btn-primary">Yes</button>
        <button type="button" class="btn  btn-secondary" data-dismiss="modal">No</button>
    </div>
</div>



