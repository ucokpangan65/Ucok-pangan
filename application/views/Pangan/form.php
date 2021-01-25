<div class="title_left" align="center">
    <h3><small><br />Form Bahan Pangan</h3></small>
</div>
<div class="x_content">
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Bahan Pangan<small></small></h2>
        </div>
        <div class="x_content">
            <?php $add = ["id" => "demo-form2", "data-parsley-validate class" => "form-horizontal form-label-left"]; ?>
            <?= form_open_multipart($form_action, $add) ?>

            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_hidden('id', isset($input->id) ? $input->id : '', ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Jenis Bahan', 'first-name', ["class" => "control-label col-md-3 col-sm-3 col-xs-12"]) ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_input('jenis_bahan', $input->jenis_bahan, ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
                <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                    <?= form_error('jenis_bahan') ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Nama', 'first-name', ["class" => "control-label col-md-3 col-sm-3 col-xs-12"]) ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_input('nama', $input->nama, ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
                <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                    <?= form_error('nama') ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Harga', 'first-name', ["class" => "control-label col-md-3 col-sm-3 col-xs-12"]) ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_input('harga', $input->harga, ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
                <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                    <?= form_error('harga') ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Satuan', 'first-name', ["class" => "control-label col-md-3 col-sm-3 col-xs-12"]) ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_input('satuan', $input->satuan, ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
                <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                    <?= form_error('satuan') ?>
                </div>
            </div>

             <div class="form-group">
                <?= form_label('Gambar', 'first-name', ["class" => "control-label col-md-3 col-sm-3 col-xs-12"]) ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?= form_input('image', $input->image, ["id" => "first-name", "required" => "required", "class" => "form-control col-md-7 col-xs-12"]) ?>
                </div>
                <div class="fa-hover col-md-3 col-sm-4 col-xs-12">
                </div>
            </div>

            <div class="form-group">
      

                <?php if (!empty($input->image)) : ?>

                    <img src='<?php echo base_url("uploads/$input->image") ?>' alt="<?= $input->jenis_bahan ?>" height="150">

                <?php endif ?>
                <br />

                <?= form_button(['type' => 'submit', 'content' => 'Simpan', 'class' => 'btn btn-success']) ?>

                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>