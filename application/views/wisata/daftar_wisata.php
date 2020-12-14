<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title"><?= $title ?></h5>
        <div class="text-right">
            <p>
                <button type="submit" class="btn btn-slate-700"><a href="<?= site_url('Backend/register_wisata') ?>">Tambah Data <i class="icon-arrow-right14 position-right"></i></a></button>
            </p>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-blue">
                        <th>Nama Wisata</th>
                        <th>Jenis</th>
                        <th>Harga Tiket</th>
                        <th>Jam Buka</th>
                        <th>Jam Tutup</th>
                        <th>Keterangan</th>
                        <th>Foto</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php foreach ($tb_wisata as $val) { ?>
                    <tr>
                        <td><?= $val['nama_wisata']; ?></td>
                        <td><?= $val['nama_jenis']; ?></td>
                        <td><?= $val['harga_tiket']; ?></td>
                        <td><?= $val['jam_buka']; ?></td>
                        <td><?= $val['jam_tutup']; ?></td>
                        <td><?= $val['keterangan']; ?></td>
                        <td><img width='130' src="<?= base_url('media/images/' . $val['gambar']); ?>"></td>
                        <td class="text-center"><a href="<?= site_url('Backend/update_register_wisata/' . md5($val['id_wisata'])) ?>">
                                <div class="btn btn-sm btn-primary"><i class="icon-pencil"></i></div>
                            </a></td>
                        <td class="text-center"><a href="<?= site_url('Backend/delete_wisata/' . ($val['id_wisata'])); ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?');">
                                <div class="btn btn-sm btn-danger"><i class="icon-trash"></i></div>
                            </a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>