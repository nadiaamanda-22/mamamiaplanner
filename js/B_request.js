  $(document).ready(function() {
            $.noConflict();
            var table = $('#tablerequest')
            $.ajax({
              url : 'http://localhost:3000/request/',
              type : 'GET',
              dataType : 'JSON',
              success : function(data){
                let requests = data.data;

                console.log(requests);

                $.each(requests, (i, req) =>{

                if(req.status==0){
                  var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
                }else if(req.status==1){
                  var html = `<a href="javascript:;" onclick="statOn(${req.id_request_resep})"><span class="badge bg-success">Aktif</span></a>`
                }else if(req.status==2){
                  var html = `<a href="javascript:;" onclick="statOff(${req.id_request_resep})"><span class="badge bg-danger">Diajukan</span></a>`
                }

                // var max_char = 100;
                // var length = resep.deskripsi_resep.length;

                // if(length>max_char){
                //   var link = `<span class="badge rounded-pill bg-info text-dark">Klik detail</span>`;
                //   var des = resep.deskripsi_resep.substr(0, max_char);
                //   var deskripsi = des+`...`+link;
                // }else{
                //   var deskripsi = resep.deskripsi_resep;
                // }

                let tbl_user = req.tbl_user
                  $('.valuetablerequest').append(`
                   <tr>
                      <th scope="row">${i+1}</th>
                      <td>${tbl_user.username}</td>
                      <td>${req.nama_request_resep}</td>
                      <td>${req.tanggal_request}</td>
                      <td>`+html+`</td>
                      <td>
                      <div class="d-grid gap-2 d-md-block">
                          <a href="javascript:;" onclick="detailResep(${req.id_request_resep})"><span class="badge bg-secondary"><i class="fa fa-info"></i></span></a>
                          <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                          <a href="javascript:;"><span class="badge bg-danger" onclick="deleteResep(${req.id_request_resep})"><i class="fa fa-trash-alt"></i></span></a>
                      </div>
                      </td>
                  </tr>                 
                  `)
                })
                $('#tablerequest').DataTable({
                  responsive: true,
                  scrollX : true
                });
              }
            })
  });