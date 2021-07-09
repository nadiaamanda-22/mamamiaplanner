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
                             <button type="button" class="btn btn-primary fas-fa-fw-fas-plus mb-3" data-bs-toggle="modal" data-bs-target="#userModal"><i class="fas fa-plus"></i> Tambah Data User</button>
                         </div>
                         <div class="row">
                             <div class="col">
                                 <table class="table table-hover mt-4" id="tableuser" width="100%">
                                     <thead class="thead-light">
                                         <tr>
                                             <th scope="col" class="text-center">No</th>
                                             <th scope="col" class="text-center">Username</th>
                                             <th scope="col" class="text-center">Fullname</th>
                                             <th scope="col" class="text-center">Email</th>
                                             <th scope="col" class="text-center">Status</th>
                                             <th scope="col" class="text-center">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody class="valuetableuser">
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
 <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="userModalLabel">Tambah Data User</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form action="" method="post" enctype="multipart/form-data" id="formUser">
                     <div class="mb-3">
                         <label for="username" class="form-label">Username</label>
                         <input type="text" class="form-control" name="username" id="username">
                         <div id="username_error" class="form-text" style="color:red;"></div>
                     </div>
                     <div class="mb-3">
                         <label for="full_name" class="form-label">Fullname</label>
                         <input type="text" class="form-control" name="full_name" id="full_name">
                         <div id="full_name_error" class="form-text" style="color:red;"></div>
                     </div>
                     <div class="mb-3">
                         <label for="email_user" class="form-label">Email</label>
                         <input type="text" class="form-control" name="email_user" id="email_user">
                         <div id="email_user_error" class="form-text" style="color:red;"></div>
                     </div>
                     <div class="mb-3">
                         <label for="password_user" class="form-label">Password</label>
                         <input type="text" class="form-control" name="password_user" id="password_user">
                         <div id="password_user_error" class="form-text" style="color:red;"></div>
                     </div>
                     <div class="mb-3">
                         <label for="password_user2" class="form-label">Ulangi Password</label>
                         <input type="text" class="form-control" name="password_user2" id="password_user2">
                         <div id="password_user2_error" class="form-text" style="color:red;"></div>
                     </div>
                     <div class="mb-3">
                         <label for="role_id" class="form-label">Role</label>
                         <select class="form-select" name="role_id" id="role_id" aria-label="Default select example">
                             <option value="12">User</option>
                             <option value="11">Admin</option>
                         </select>
                     </div>
                     <div class="mb-3">
                         <label for="gambar_resep" class="form-label">Foto User <sup style="color: red">*format yang didukung .png, .jpeg, .jpg</sup></label>
                         <input type="file" class="form-control" name="gambar_resep" id="gambar_resep">
                     </div>
                     <div class="modal-footer">
                         <button type="button" id="cancel_user" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                         <button type="submit" id="submit_user" class="btn btn-primary">Tambah Data</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>


 <!-- Modal Detail -->
 <div class="modal fade" id="detailUser" tabindex="-1" aria-labelledby="detailUserLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="detailUserLabel">Details User</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <div class="row detailUser">
                     <div class="col-md-4">
                         <div class="image">
                         </div>
                         <br>
                         <h4 class="fw-bold">Bergabung sejak</h4>
                         <h5 class="fw-normal created_at"></h5>
                     </div>
                     <div class="col-md-1"></div>
                     <div class="col-md-7">
                         <h4 class="fw-bold">Username</h4>
                         <h5 class="fw-normal d_username"></h5>
                         <br>
                         <h4 class="fw-bold">Fullname</h4>
                         <p class="lh-1 d_full_name"></p>
                         <br>
                         <h4 class="fw-bold">Email</h4>
                         <h5 class="fw-normal d_email"></h5>
                         <br>
                         <h4 class="fw-bold">Status</h4>
                         <h5 class="fw-normal d_is_active"></h5>
                         <br>
                         <h4 class="fw-bold">role</h4>
                         <h5 class="fw-normal d_role_id"></h5>
                         <br>
                     </div>
                 </div>
             </div>
             <div class="modal-footer">
                 <button type="button" id="cancel_resep" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
             </div>
         </div>
     </div>
 </div>
 <script src="<?= base_url() ?>js/B_user.js"></script>