<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title"><?= $title ?></h5>
        <div class="text-right">
            <p>
                <button type="submit" class="btn btn-slate-700"><a href="<?= site_url('Backend/register_hotel') ?>">Tambah Data <i class="icon-arrow-right14 position-right"></i></a></button>
            </p>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="bg-blue">
                        <th>Nama Hotel</th>
                        <th>Jenis</th>
                        <th>Gambar</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php foreach ($tb_hotel as $val) { ?>
                    <tr>
                        <td><?= $val['nama_hotel']; ?></td>
                        <td><?= $val['nama_jenis']; ?></td>
                        <td><img width='130' src="<?= base_url('media/images/' . $val['gambar']); ?>"></td>
                        <td class="text-center"><a href="<?= site_url('Backend/update_register_hotel/' . md5($val['id_hotel'])) ?>">
                                <div class="btn btn-sm btn-primary"><i class="icon-pencil"></i></div>
                            </a></td>
                        <td class="text-center"><a href="<?= site_url('Backend/delete_hotel/' . ($val['id_hotel'])); ?>" onclick="return confirm('Anda yakin akan menghapus data ini ?');">
                                <div class="btn btn-sm btn-danger"><i class="icon-trash"></i></div>
                            </a></td>
                    </tr>
                <?php } ?>
            </table>
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>