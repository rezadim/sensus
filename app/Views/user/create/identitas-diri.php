<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Identitas Diri</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Tambah Data</a>
                        </li>
                        <li class="breadcrumb-item active">Identitas Diri</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <form action="<?= base_url('user/storeIdentitas'); ?>" method="post">
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
                                
                                <div class="form-group col-md-4 float-left">
                                    <label>Jenis Identitas</label>
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>No Identitas</label>
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Masa Berlaku</label>
                                </div>
                                <!-- <div class="form-group col-md-4 float-left">
                                    <label>Lampiran</label>
                                </div> -->

                                <?php for($i=1; $i<4; $i++): ?>
                                <div class="form-group col-md-4 float-left input-group">
                                    <b class="mr-1"><?= $i; ?></b><input type="text" name="jenis_identitas<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <input type="text" name="no_identitas<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <input type="date" name="masa_berlaku_identitas<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <!-- <div class="form-group col-md-4 float-left">
                                    <input type="file" name="lampiran<?= $i; ?>" class="form-control">
                                </div> -->
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