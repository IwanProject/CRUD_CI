<div class="container">
    <h1><?= $title ?></h1>

    <div class="row mt-3 mb-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Barang
            </button>
        </div>
    </div>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Barcode</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">stock</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <?php
        $i = 1;
        ?>
        <tbody>



            <?php foreach ($barang as $brg) : ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $brg['no_barcode'] ?></td>
                    <td><?= $brg['nama_obat'] ?></td>
                    <td><?= $brg['harga'] ?></td>
                    <td><?= $brg['stock'] ?></td>
                    <td><img src="<?= base_url() ?>assets/img/<?= $brg['gambar'] ?>"></td>

                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url() ?>BarangController/upload" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="no_barcode">No Barcode</label>
                        <input type="text" class="form-control" id="no_barcode" name="no_barcode" required>
                    </div>

                    <div class="form-group">
                        <label for="nama_obat">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control" id="stock" name="stock" required>
                    </div>

                    <div class="form-group">
                        <label for="gambar">Foto</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
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