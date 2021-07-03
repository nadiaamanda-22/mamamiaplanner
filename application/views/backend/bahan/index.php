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
                         <div class="col-md-4">
                             <button type="button" class="btn btn-primary fas-fa-fw-fas-plus" data-bs-toggle="modal" data-bs-target="#bahanModal"><i class="fas fa-plus"></i> Tambah Data Bahan</button>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <table class="table table-hover  mt-4" id="tablebahan">
                                     <thead class="thead-light">
                                         <tr>
                                             <th scope="col">No</th>
                                             <th scope="col">Nama Bahan</th>
                                             <th scope="col">Nama Resep</th>
                                             <th scope="col">Status</th>
                                             <th scope="col">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     <?php $i = 1; ?>
                                         <?php foreach ($bahans as $bhn) : ?>
                                             <tr>
                                                 <th scope="row"><?= $i; ?></th>
                                                 <td><?= $bhn['bahan'] ?></td>
                                                 <td><?= $bhn['tbl_resep']['nama_resep']?></td>
                                                 <td><?= $bhn['is_active'] ?></td>
                                                 <td>
                                                 </td>
                                             </tr>
                                             <?php $i++; ?>
                                         <?php endforeach; ?>
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
     <footer class="footer text-left"> Copyright © Mamamia Planner 2021 <a href="https://www.wrappixel.com/"></a>
     </footer>
     <!-- ============================================================== -->
     <!-- End footer -->
     <!-- ============================================================== -->
 </div>

 <!-- Modal -->
 <div class="modal fade" id="bahanModal" tabindex="-1" aria-labelledby="bahanModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="bahanModalLabel">Tambah Data Bahan</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 ...
             </div>
             <div class="modal-footer">
                 <button type="button" id="cancel_bahan" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                 <button type="submit" id="submit_bahan"class="btn btn-primary">Tambah Bahan</button>
             </div>
         </div>
     </div>
 </div>