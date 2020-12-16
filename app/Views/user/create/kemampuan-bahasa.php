<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Kemampuan Bahasa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Tambah Data</a>
                        </li>
                        <li class="breadcrumb-item active">Kemampuan Bahasa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <form action="<?= base_url('user/storeKemampuanBhs'); ?>" method="post">
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
                                
                                <div class="form-group col-md-4 float-left mb-0">
                                    <label>Bahasa</label>
                                </div>
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Pendengaran</label>
                                </div>
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Membaca</label>
                                </div>
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Lisan</label>
                                </div>
                                <div class="form-group col-md-2 float-left mb-0">
                                    <label>Tulisan</label>
                                </div>

                                <?php for($i=1; $i<4; $i++): ?>
                                <div class="form-group col-md-4 float-left input-group">
                                    <b class="mr-1"><?= $i; ?></b><input type="text" name="jenis_bahasa<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 float-left">
                                    <input type="text" name="pendengaran<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 float-left">
                                    <input type="text" name="membaca<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 float-left">
                                    <input type="text" name="lisan<?= $i; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 float-left">
                                    <input type="text" name="tulisan<?= $i; ?>" class="form-control" autocomplete="off">
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