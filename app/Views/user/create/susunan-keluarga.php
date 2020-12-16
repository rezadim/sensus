<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Susunan Keluarga</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Tambah Data</a>
                        </li>
                        <li class="breadcrumb-item active">Susunan Keluarga</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <form action="<?= base_url('user/storeKeluarga'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">

                                <?php
                                    $errors = session()->getFlashdata('errors');
                                ?>

                                <?php if(!empty($errors)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <?php foreach($errors as $error): ?>
                                        <li><?= esc($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <?php for($i=1; $i<6; $i++): ?>
                                <div class="form-group col-md-2 float-left mt-o mb-0">
                                    <label>Hubungan</label>
                                    <select name="hubungan<?= $i; ?>"class="form-control">
                                        <option value="">Ayah</option>
                                        <option value="">Ibu</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 float-left mb-0">
                                    <label>Nama Keluarga</label>
                                    <input type="text" name="nama_keluarga<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>                                
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Jenis Kelamin</label>
                                    <select name="jk_keluarga<?= $i; ?>"class="form-control">
                                        <option value="">Laki-Laki</option>
                                        <option value="">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 float-left pr-0  mb-0">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir_keluarga<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 float-left pl-0  mb-0">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir_keluarga<?= $i; ?>" class="form-control">
                                </div>

                                <div class="form-group col-md-3 float-right mt-o mb-0">
                                    <label>No Handphone</label>
                                    <input type="text" name="no_hp_keluarga<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-right mt-o mb-0">
                                    <label>Pekerjaan</label>
                                    <input type="text" name="pekerjaan<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-3 float-right mt-o mb-0">
                                    <label>Pendidikan</label>
                                    <select name="pendidikan_terakhir<?= $i; ?>"class="form-control">
                                        <option value="">SD(Sederajat)</option>
                                        <option value="">SMP</option>
                                    </select>
                                </div>
                         
                                <div class="form-group col-md-11 float-right mt-0">
                                    <label>Alamat Asal</label>
                                    <!-- <input type="text" name="rtrw" class="form-control"> -->
                                    <textarea name="alamat_keluarga<?= $i; ?>" cols="30" rows="3" class="form-control"></textarea>
                                    <hr>
                                </div>
                                <!-- <div class="form-group col-md-5 float-right">
                                    <label>Kota/Kabupaten</label>
                                    <input type="text" name="kota-kab" class="form-control">
                                </div>
                                <div class="form-group col-md-5 float-right">
                                    <label>Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control">
                                </div>
                                <div class="form-group col-md-5 float-right">
                                    <label>Kelurahan</label>
                                    <input type="text" name="kelurahan" class="form-control">
                                </div>
                                <div class="form-group col-md-5 float-right">
                                    <label>Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control">
                                </div> -->
                                
                                <?php endfor;?>
                            </div>
                                

                            <div class="card-footer">
                                <!-- <a href="<?= base_url('category'); ?>" class="btn btnoutline-info">Back</a> -->
                                <button type="submit" class="btn btn-primary float-right">Next</button>
                            </div>

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?= view('templates/footer'); ?>