

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/home/save" method="post">
        <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="bookname" class="col-sm-4 col-form-label">Name of book</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="bookname" name="bookname">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="author" class="col-sm-4 col-form-label">Author</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="author" name="author">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
</div>