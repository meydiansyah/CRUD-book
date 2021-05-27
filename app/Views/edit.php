<?= $this->extend('layouts/template'); ?>


<?= $this->section('content'); ?>
    <div class="container pt-5">
        <div class="row">
            <div class="text-center">
            <div class="col">
                <h1>Edit Book</h1>
                <p class='lead'>20190801262</p>  
            </div>
            </div>
        </div>
        <form action="/home/update/<?= $books['id']; ?>" method="post">
        <?= csrf_field(); ?>
            <div class="card mt-5 col-md-8 m-auto">
                <div class="card-body col-md-8 m-auto">
                    <div class="row mb-3">
                        <label for="bookname" class="col-sm-4 col-form-label">Name of book</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="bookname" name="bookname" value="<?= $books['bookname']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="author" class="col-sm-4 col-form-label">Author</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="author" name="author" value="<?= $books['author']; ?>">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-end">
                        <a href="/" type="button" class="btn btn-sm btn-link">Kembali</a>

                        <button type="submit" class="btn btn-primary btn-sm px-4 gap-3">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?= $this->endSection(); ?>