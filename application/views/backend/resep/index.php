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
                            <button type="button" class="btn btn-primary fas-fa-fw-fas-plus btn_resep" data-bs-toggle="modal" data-bs-target="#resepModal"><i class="fas fa-plus"></i> Tambah Data Resep</button>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-hover mt-4 tableresep" id="tableresep" width="100%">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="text-center">No</th>
                                            <th scope="col" class="text-center">Nama Resep</th>
                                            <th scope="col" class="text-center">Deskripsi</th>
                                            <th scope="col" class="text-center">Kalori</th>
                                            <th scope="col" class="text-center">Status</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="valuetableresep">
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
<div class="modal fade" id="resepModal" tabindex="-1" aria-labelledby="resepModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resepModalLabel">Tambah Data Resep</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data" id="formResep">
                    <div class="mb-3">
                        <label for="nama_resep" class="form-label">Nama Resep</label>
                        <input type="text" class="form-control" name="nama_resep" id="nama_resep">
                        <div id="nama_resep_error" class="form-text" style="color:red;"></div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_resep" class="form-label">Deskripsi</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="deskripsi_resep" id="deskripsi_resep" style="height: 100px"></textarea>
                            <div id="deskripsi_resep_error" class="form-text" style="color:red;"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="link_youtube" class="form-label">Link Youtube</label>
                        <input type="text" class="form-control" name="link_youtube" id="link_youtube">
                        <div id="link_youtube_error" class="form-text" style="color:red;"></div>
                    </div>
                    <div class="mb-3">
                        <label for="kalori" class="form-label">Kalori per porsi</label>
                        <input type="text" class="form-control" name="kalori" id="kalori">
                        <div id="kalori_error" class="form-text" style="color:red;"></div>
                    </div>
                    <div class="mb-3">
                        <label for="asal_masakan" class="form-label">Asal Masakan</label>
                        <input type="text" class="form-control" name="asal_masakan" id="asal_masakan">
                        <div id="asal_masakan_error" class="form-text" style="color:red;"></div>
                    </div>
                    <div class="mb-3">
                        <label for="gambar_resep" class="form-label">Gambar resep <sup style="color: red">*format yang didukung .png, .jpeg, .jpg</sup></label>
                        <input type="file" class="form-control" name="gambar_resep" id="gambar_resep">
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel_resep" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="submit_resep" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Detail -->
<div class="modal fade" id="detailResep" tabindex="-1" aria-labelledby="detailResepLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailResepLabel">Details Resep</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row detailResep">
                    <div class="col-md-4">
                        <div class="image">
                        </div>
                        <br>
                        <h4 class="fw-bold">Ditambahkan pada</h4>
                        <h5 class="fw-normal created_at"></h5>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h4 class="fw-bold">Nama Resep</h4>
                        <h5 class="fw-normal d_namaResep"></h5>
                        <br>
                        <h4 class="fw-bold">Deskripsi Resep</h4>
                        <p class="lh-1 d_deskripsiResep"></p>
                        <br>
                        <h4 class="fw-bold">Kalori / Porsi</h4>
                        <h5 class="fw-normal d_kalori"></h5>
                        <br>
                        <iframe width="186" height="105" src="https://www.youtube.com/embed/H2v1gzhKgOw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel_resep" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>


<script src="<?= base_url() ?>js/B_resep.js"></script>

<!-- <script src="<?= base_url() ?>js/B_resep.js"></script>
<script src="<?= base_url() ?>js/jquery-3.6.0.js"></script> -->