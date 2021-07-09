  $(document).ready(function() {
            $.noConflict();
            var table = $('#tableresep')
            $.ajax({
              url : 'http://localhost:3000/resep/',
              type : 'GET',
              dataType : 'JSON',
              success : function(data){
                let reseps = data.data;
                $.each(reseps, (i, resep) =>{

                if(resep.is_active==0){
                  var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
                }else if(resep.is_active==1){
                  var html = `<a href="javascript:;" onclick="statOn(${resep.id_resep})"><span class="badge bg-success">Aktif</span></a>`
                }else if(resep.is_active==2){
                  var html = `<a href="javascript:;" onclick="statOff(${resep.id_resep})"><span class="badge bg-danger">Tidak Aktif</span></a>`
                }

                var max_char = 100;
                var length = resep.deskripsi_resep.length;

                if(length>max_char){
                  var link = `<span class="badge rounded-pill bg-info text-dark">Klik detail</span>`;
                  var des = resep.deskripsi_resep.substr(0, max_char);
                  var deskripsi = des+`...`+link;
                }else{
                  var deskripsi = resep.deskripsi_resep;
                }

                  $('.valuetableresep').append(`
                   <tr>
                      <th scope="row">${i+1}</th>
                      <td>${resep.nama_resep}</td>
                      <td>`+deskripsi+`</td>
                      <td>${resep.kalori}</td>
                      <td>`+html+`</td>
                      <td>
                      <div class="d-grid gap-2 d-md-block">
                          <a href="javascript:;" onclick="detailResep(${resep.id_resep})"><span class="badge bg-secondary"><i class="fa fa-info"></i></span></a>
                          <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                          <a href="javascript:;"><span class="badge bg-danger" onclick="deleteResep(${resep.id_resep})"><i class="fa fa-trash-alt"></i></span></a>
                      </div>
                      </td>
                  </tr>                 
                  `)
                })
                $('#tableresep').DataTable({
                  responsive: true,
                  scrollX : true
                });
              }
            })
  });

function detailResep(id){
  var myModal = new bootstrap.Modal(document.getElementById('detailResep'))
  myModal.show()

  $.ajax({
    url:'http://localhost:3000/resep/'+id,
    type : 'GET',
    dataType : 'JSON',
    success : function(data){
      let resep = data.data;
      $('.d_namaResep').text(resep.nama_resep);
      $('.d_deskripsiResep').text(resep.deskripsi_resep);
      $('.d_kalori').text(resep.kalori);
      $('.image').html(`<img src="http://localhost:3000/${resep.gambar_resep}" width="250" height="250" alt=""></img>`)

      let date = new Date(resep.created_at);


      var day = date.getDate();
      var month = date.getMonth();
      var year = date.getFullYear();

      $('.created_at').text(`${day} - ${month} - ${year}`)
    }
  })
}

$('#submit_resep').on('click', function(e){
  e.preventDefault();
  var formData = new FormData($('#formResep')[0]);
  $.ajax({
    url : 'http://localhost:3000/resep/',
    type : 'POST',
    data : formData,
    processData: false,
    contentType: false,
    success : function(data){
      if(data.success){
        success('Data Resep Berhasil Ditambahkan !!');
      }
    }
  })
})

function statOn(id){
  const data = 2;
  $.ajax({
    url : 'http://localhost:3000/resep/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Resep Tidak Ditampilkan !!');
      }
    }
  })
}


function statOff(id){
  const data = 1;
  $.ajax({
    url : 'http://localhost:3000/resep/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Resep Ditampilkan !!');
      }
    }
  })
}

function deleteResep(id){
  Swal.fire({
  title: 'Yakin Menghapus Resep?',
  text: "Data bahan dari resep akan ikut terhapus",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus',
  cancelButtonText : 'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url : 'http://localhost:3000/resep/b/'+id,
      type : 'DELETE',
      dataType : 'JSON',
      success : function(data){
    Swal.fire(
      'Dihapus !!',
      'Data resep dan bahan berhasil dihapus',
      'success'
    ).then(function(){
      window.location = 'ManajemenResep';
    })
      }
    })
    
  }
})
}

function success(alert){
  Swal.fire({
            icon: 'success',
            title: ''+alert,
            text: '',
            time: 1000
        }).then(function() {
            window.location = 'ManajemenResep';
        });
}