<?= $this->extend('layouts/template'); ?>


<?= $this->section('content'); ?>
    <div class="container pt-5">
        <div class="text-center">
            <div class="row">
                <div class="col">
                    <?php if(session()->getFlashData('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Selamat ! </strong>Data berhasil ditambahkan.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <?php if(session()->getFlashData('perbarui')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Selamat ! </strong>Data berhasil diperbarui.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <h1 class="display-5 fw-bold">Bin's Store</h1>
                    <p class='lead'>20190801262</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <button type="button" class="btn btn-primary btn-sm px-4 gap-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>
                    </div>
                </div>
            </div>
            <div class="mt-5 mb-5 row row-cols-1 row-cols-md-4 g-4">

                <?php foreach($books as $b) : ?>
                <!-- card -->
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['bookname'] ?></h5>
                            <p class="card-text"><?= $b['author'] ?></p>
                            <div class="mt-5 d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <form action="/<?= $b['id']; ?>" method="post">
                                <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-sm btn-link" onClick="return confirm('Apakah kamu yakin ingin menghapus buku <?= $b['bookname'] ?> ?');">Remove</button>
                                </form>
                                <a type="button" class="btn btn-success btn-sm px-4 gap-3" href="/home/edit/<?= $b['id']; ?>">Update</a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Last updated <?= $b['created_at'] ?></small>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
                <?php endforeach;?>
            </div>

            <!-- Modal -->
            <?= $this->include('layouts/modal'); ?>


        </div>
    </div>
<?= $this->endSection(); ?>