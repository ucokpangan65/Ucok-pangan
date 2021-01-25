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
    <h3><small>Table Pelanggan</small><br /></h3>
</div>
<div class="x_content">
    <div class="x_panel">
        <div class="x_title">
            <h2>Table Pelanggan<small></small></h2>


        </div>
        <?php if ($persons) : ?>
            <table border="1px" id="datatable-buttons" class="table table-striped table-bordered" align="center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">No.Handphone</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Longitude</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($persons as $person) : ?>
                        <tr>
                            <td><?= ++$i ?></td>
                            <td><?= $person->nama ?></td>
                            <td><?= $person->email ?></td>
                            <td><?= $person->password ?></td>
                            <td><?= $person->telepon ?></td>
                            <td><?= $person->alamat ?></td>
                            <td><?= $person->longitude ?></td>
                            <td><?= $person->latitude ?></td>
                            <td>
                                <?= form_open("person/delete"); ?>
                                <?= form_hidden("id", $person->id) ?>
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