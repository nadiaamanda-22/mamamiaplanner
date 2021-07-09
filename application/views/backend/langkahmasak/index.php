<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?= $title ?></h4>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <div class="row mb-4">
                        <div class="col-md-4 mb-3">
                            <button type="button" class="btn btn-primary fas-fa-fw-fas-plus" data-bs-toggle="modal" data-bs-target="#langkahmasakModal"><i class="fas fa-plus"></i> Tambah Data Langkah Memasak</button>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-hover  mt-4" id="tablelangkahmasak" width="100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Langkah Memasak</th>
                                            <th scope="col">Nama Resep</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="valuetablelangkahmasak">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>

<!-- Modal -->
<div class="modal fade" id="langkahmasakModal" tabindex="-1" aria-labelledby="langkahmasakModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="langkahmasakModalLabel">Tambah Data Langkah Memasak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="formlangkahmasak">
                    <div class="row">
                        <div class="mb-3">
                            <input class="form-control" list="datalistOptions" id="key_resep" name="key_resep" placeholder="Masukan keyword resep...." autocomplete="off">
                            <div id="resep_notfound" class="form-text text-danger"></div>
                            <datalist id="datalistOptions">
                            </datalist>
                            <input type="hidden" class="form-control" id="id_resep" name="id_resep">
                        </div>
                        <div class="mb-3">
                            <label for="langkahmasak" class="form-label">Langkah Masak</label>
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="text" class="form-control langkahmasak" name="langkahmasak[]" autocomplete="off">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-secondary btn-sm" onclick="pluslangkahmasak()"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                            <div class="multiplelangkahmasak"><br></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel_langkahmasak" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_langkahmasak" class="btn btn-primary">Tambah Langkah Masak</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>js/B_langkahmasak.js"></script>