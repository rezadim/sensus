<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Riwayat Pendidikan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Tambah Data</a>
                        </li>
                        <li class="breadcrumb-item active">Riwayat Pendidikan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <form action="<?= base_url('user/storePendidikan'); ?>" method="post">
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
                                
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Jenjang</label>
                                </div>
                                <div class="form-group col-md-3 float-left mb-0">
                                    <label>Jurusan</label>
                                </div>
                                <div class="form-group col-md-4 float-left mb-0">
                                    <label>Instansi</label>
                                </div>
                                <div class="form-group col-md-1 float-left pr-0 mb-0">
                                    <label>Dari</label>
                                </div>
                                <div class="form-group col-md-1 float-left pl-0 mb-0">
                                    <label>Sampai</label>
                                </div>
                                <div class="form-group col-md-1 float-left pr-0 mb-0">
                                    <label>Nilai</label>
                                </div>

                                <?php for($i=1; $i<4; $i++): ?>
                                <div class="form-group col-md-2 float-left">
                                    <select name="jenjang<?= $i; ?>" class="form-control">
                                        <option value="SD(Sederajat)">SD(Sederajat)</option>
                                        <option value="SMP(Sederajat)">SMP(Sederajat)</option>
                                        <option value="SMA(Sederajat)">SMA(Sederajat)</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 float-left">
                                    <input type="text" name="jurusan<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <input type="text" name="instansi<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-1 float-left pr-0">
                                    <input type="text" name="dari<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-1 float-left pl-0">
                                    <input type="text" name="sampai<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-1 float-left pr-0">
                                    <input type="text" name="nilai<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <?php endfor; ?>

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