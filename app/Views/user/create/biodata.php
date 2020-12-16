<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Biodata</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Tambah Data</a>
                        </li>
                        <li class="breadcrumb-item active">Biodata</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <form action="<?= base_url('user/storeBiodata'); ?>" method="post">
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

                                
                                
                                <div class="form-group">
                                    <label>NPK</label>
                                    <input type="text" name="npk" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-8 float-left">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" autocomplete="off">
                                </div>                                
                                <div class="form-group col-md-4 float-right">
                                    <label>Nama Panggilan</label>
                                    <input type="text" name="nama_panggilan" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-4 float-left">
                                    <label>Departemen</label>
                                    <!-- <select name="departemen"class="form-control">
                                        <option value="EDP">EDP</option>
                                        <option value="EDP">EDP</option>
                                    </select> -->
                                    <input type="text" name="departemen" class="form-control">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Bagian</label>
                                    <!-- <select name="bagian"class="form-control">
                                        <option value="">hardware</option>
                                        <option value="">hardware</option>
                                    </select> -->
                                    <input type="text" name="bagian" class="form-control">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Jabatan</label>
                                    <select name="jabatan"class="form-control">
                                        <option value="">anggota</option>
                                        <option value="">anggota</option>
                                    </select>
                                    <!-- <input type="text" name="jabatan" class="form-control"> -->
                                </div>

                                <div class="form-group col-md-6 text-center mx-auto">
                                    <label>Tanggal Masuk</label>
                                    <input type="date" name="tgl_masuk" class="form-control text-center">
                                </div>
                                
                                <div class="form-group col-md-4 float-left">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin"class="form-control">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    <!-- <input type="text" name="jenis_kelamin" class="form-control"> -->
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Agama</label>
                                    <select name="agama"class="form-control">
                                        <option value="">Islam</option>
                                        <option value="">kristen</option>
                                    </select>
                                    <!-- <input type="text" name="agama" class="form-control"> -->
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Kewarganegaraan</label>
                                    <select name="kewarganegaraan"class="form-control" autocomplete="off">
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                    <!-- <input type="text" name="kewarganegaraan" class="form-control"> -->
                                </div>

                                <div class="form-group col-md-4 float-left">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmp_lahir" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-8 float-left">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control">
                                </div>

                                <div class="form-group col-md-4 float-left">
                                    <label>Status Perkawinan</label>
                                    <select name="status_kawin"class="form-control">
                                        <option value="">Kawin</option>
                                        <option value="">Belum Kawin</option>
                                    </select>
                                    <!-- <input type="text" name="status_kawin" class="form-control"> -->
                                </div>
                                <div class="form-group col-md-8 float-left">
                                    <label>Hobi</label>
                                    <input type="text" name="hobi" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-4 float-left">
                                    <label>Tinggi Badan</label>
                                    <input type="number" name="tinggi_badan" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Berat Badan</label>
                                    <input type="number" name="berat_badan" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Gol Darah</label>
                                    <select name="gol_darah"class="form-control">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="AB">AB</option>
                                        <option value="O">O</option>
                                    </select>
                                    <!-- <input type="text" name="gol_darah" class="form-control"> -->
                                </div>

                                <div class="form-group col-md-4 float-left">
                                    <label>Ukuran Kemeja</label>
                                    <select name="ukuran_kemeja"class="form-control">
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                    </select>
                                    <!-- <input type="text" name="ukuran_kemeja" class="form-control"> -->
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Ukuran Celana</label>
                                    <select name="ukuran_celana"class="form-control">
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                    <!-- <input type="text" name="ukuran_celana" class="form-control"> -->
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <label>Ukuran Sepatu</label>
                                    <select name="ukuran_sepatu"class="form-control">
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                    <!-- <input type="text" name="ukuran_sepatu" class="form-control"> -->
                                </div>

                                <div class="form-group">
                                    <label>Alamat Asal</label>
                                    <input type="text" name="alamat_asal" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Domisili</label>
                                    <input type="text" name="domisili" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-6 float-left">
                                    <label>No Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-6 float-left">
                                    <label>E-mail Pribadi</label>
                                    <input type="text" name="email" class="form-control" autocomplete="off">
                                </div>

                                <div class="form-group col-md-6 float-left">
                                    <label>Facebook</label>
                                    <input type="text" name="sosmed" class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group col-md-6 float-left">
                                    <label>Instagram</label>
                                    <input type="text" name="sosmed2" class="form-control" autocomplete="off">
                                </div>
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