<?= view('templates/header'); ?>
<?= view('templates/sidebar'); ?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Administrator</a>
                        </li>
                        <li class="breadcrumb-item active">Report</li>
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
                        <div class="card-body">
                            <h5>File Excel</h5>
                            <a href="<?= base_url('admin/reportExcel'); ?>" class="btn btn-success btn-md ml-4">Export</a>
                        </div>
                        <div class="card-footer">
                            <!-- <a href="<?= base_url('transaction'); ?>" class="btn btn-outline-info">Back</a> -->
                            <!-- <button type="submit" class="btn btn-primary float-right">Import</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?= view('templates/footer'); ?>