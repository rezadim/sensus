<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Karyawan</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Administrator</a></li>
                <li class="breadcrumb-item active">Data Karyawan</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Category
                            <a href="<?= base_url('user/createBiodata'); ?>" class="btn btn-primary float-right">Tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NPK</th>
                                            <th>Nama Lengkap</th>
                                            <th>Departemen</th>
                                            <th>jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($karyawan as $key=>$row): ?>
                                    <tr>
                                        <td><?= $key+1; ?></td>
                                        <td><?= $row['npk']; ?></td>
                                        <td><?= $row['nama_lengkap']; ?></td>
                                        <td><?= $row['departemen']; ?></td>
                                        <td><?= $row['jabatan']; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/deleteKaryawan/'.$row['id_employe']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin?ingin menghapus-nya???')">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row mt-3 float-left">
                                <div class="col-md-12">
                                    <?= $pager->links('karyawan', 'bootstrap_pagination'); ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= view('templates/footer'); ?>