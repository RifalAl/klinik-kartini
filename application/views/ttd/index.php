<!-- edit ttd -->
<div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Pengaturan Tanda Tangan Dokter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>Ttd/update_ttd" method="POST" enctype="multipart/form-data">
                    <?php foreach ($ttd as $t) { ?>
                        <div class="mb-3 row">
                            <input type="text" name="id_ttd" value="<?= $t->id_ttd; ?>" hidden>
                            <label class="col-3 col-form-label">Nama</label>
                            <div class="col">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Dokter" value="<?= $t->nama; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-3 col-form-label">Foto Tanda Tangan</label>
                            <div class="col">
                                <input type="file" class="form-control" name="ttd" placeholder="<?= $t->ttd ?>">
                            </div>
                        </div>
                    <?php } ?>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary ms-auto">Edit Tanda Tangan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
