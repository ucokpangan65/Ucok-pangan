<?php

$perPage = 20;
$keywords = $this->input->get('keywords');

if (isset($keywords)) {
    $page = $this->uri->segment(3);
} else {
    $page = $this->uri->segment(2);
}

// No urut data tabel.
$i = isset($page) ? $page * $perPage - $perPage : 0;
?>

<div id="ini">
    <?php $this->load->view('_partial/flash_message') ?>
</div>
<!-- Table -->
<div class="title_left" align="center">
    <h3><small>Table pangan</small><br /></h3>
</div>

<div class="x_panel">

    <div class="x_content">
        <div class="x_panel">
            <div class="x_title">
                <h2>Bahan Pangan<small></small></h2>
            </div>
            <?php if ($pangans) : ?>
                <table border="1px" id="datatable-buttons" class="table table-striped table-bordered" align="center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Jenis Bahan</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Satuan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pangans as $pangan) : ?>
                            <tr>
                                <td><?= ++$i ?></td>
                                <td><?= $pangan->jenis_bahan ?></td>
                                <td><?= $pangan->nama ?></td>
                                <td><img src="<?= $pangan->image ?>" height="100" alt="<?= $pangan->image ?>" class="avatar"></td>
                                <td><?= $pangan->harga ?></td>
                                <td><?= $pangan->satuan ?></td>
                                <td>
                                    <?= anchor("pangan/edit/" . $pangan->id, "Edit", ["class" => "btn btn-primary btn-xs", "content" => "Edit"]) ?>

                                    </br>
                                    </br>
                                    <?= form_open("pangan/delete"); ?>
                                    <?= form_hidden("id", $pangan->id) ?>
                                    <?= form_hidden("image", $pangan->image) ?>
                                    <?= form_button(["type" => "submit", "class" => "btn btn-danger btn-xs", "content" => "Hapus", "onclick" => "return confirm('apakah anda yakin akan mengahapus nya')"]); ?>
                                    <?= form_close(); ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="13">Total <?= $jumlah ?></td>
                        </tr>
                    </tfoot>

                <?php else : ?>
                    Tidak ada data
                    <?php echo $this->session->userdata("is_ada") ?>

                <?php endif; ?>
                </table>

                <div class="">
                    <?= $pagination ?>

                </div>
                <div align="right" class="but_list">
                    <?= anchor("pangan/create", 'Tambah', ['class' => 'btn btn-success']) ?>
                </div>
        </div>
    </div>
</div>
</div>
<script>
    var notif = document.getElementById("ini");

    function ini() {
        notif.innerHTML = null;
    }

    setTimeout(ini, 3000);
</script>