<?php

$perPage = 10;
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
    <h3><small>Table Pembelian</small><br /></h3>
</div>
<div class="x_content">
    <div class="x_panel">
        <div class="x_title">
            <h2>Table Pembelian<small></small></h2>


        </div>
        <?php if ($pembelians) : ?>
            <table border="1px" id="datatable-buttons" class="table table-striped table-bordered" align="center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Bahan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pembelians as $pembelian) : ?>
                        <tr>
                            <td><?= ++$i ?></td>
                            <td><?= $pembelian->nama ?></td>
                            <td><?= $pembelian->bahan ?></td>
                            <td><?= $pembelian->jumlah ?></td>
                            <td><?= $pembelian->total ?></td>
                            <td><?= $pembelian->status ?></td>
                            <td>
                                <?= form_open("pembelian/delete"); ?>
                                <?= form_hidden("id", $pembelian->id) ?>
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