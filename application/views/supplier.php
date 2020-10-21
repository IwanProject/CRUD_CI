<div class="container">
    <h1><?= $title ?><br></h1>

    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Supplier
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Supplier</th>
                <th scope="col">Nama Supplier</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($supplier as $spr) : ?>
                <tr>
                    <th scope="row"><?= $spr['id'] ?></th>
                    <td><?= $spr['no_supplier'] ?></td>
                    <td><?= $spr['nama_supplier'] ?></td>
                    <td><?= $spr['alamat'] ?></td>
                    <td><?= $spr['no_hp']  ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>SupplierController/tambah" method="post">

                    <div class="form-group">
                        <label for="no_supplier">ID Supplier</label>
                        <input type="text" class="form-control " id="no_supplier" name="no_supplier" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>