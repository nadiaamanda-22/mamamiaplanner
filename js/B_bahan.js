$(document).ready(function() {
         $.noConflict();
            var table = $('#tablebahan')
            $.ajax({
              url : 'http://localhost:3000/bahan/',
              type : 'GET',
              dataType : 'JSON',
              success : function(data){
                let bahans = data.data;
                $.each(bahans, (i, bahan) =>{

                if(bahan.is_active==0){
                  var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
                }else if(bahan.is_active==1){
                  var html = `<a href="javascript:;" onclick="statOn(${bahan.id_bahan})"><span class="badge bg-success">Aktif</span></a>`
                }else if(bahan.is_active==2){
                  var html = `<a href="javascript:;" onclick="statOff(${bahan.id_bahan})"><span class="badge bg-danger">Tidak Aktif</span></a>`
                }

                let tbl_resep = bahan.tbl_resep;
                  $('.valuetablebahan').append(`
                   <tr>
                      <th scope="row">${i+1}</th>
                      <td>${bahan.bahan}</td>
                      <td>${tbl_resep.nama_resep}</td>
                      <td>`+html+`</td>
                      <td>
                      <div class="d-grid gap-2 d-md-block">
                          <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                          <a href="javascript:;"><span class="badge bg-danger" onclick="deleteBahan(${bahan.id_bahan})"><i class="fa fa-trash-alt"></i></span></a>
                      </div>
                      </td>
                  </tr>                 
                  `)
                })
                $('#tablebahan').DataTable({
                  responsive: true,
                  scrollX : true
                });
              }
            })
});

$('#key_resep').on('keyup', function(){
    let keyword = $('#key_resep').val();
    $.ajax({
        url : 'http://localhost:3000/resep/search/'+keyword,
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            console.log(data);

            if(data.total_data>=1){
                $('#resep_notfound').html('');
            }else if(data.total_data==0){
                 $('#resep_notfound').html('Data Resep tidak ditemukan !!');
            }

            $('#datalistOptions').html('');
            let reseps = data.data;
            $.each(reseps, (i, resep)=>{
                $('#datalistOptions').append(`
                <option value="${resep.nama_resep}">`);
                $('#id_resep').val(resep.id_resep);
            })
        }
    })
})

$('#submit_bahan').on('click', function(e){
    e.preventDefault();
    let bahans = $(".bahan").map(function(){return $(this).val();}).get();
    let id_resep = $('#id_resep').val();
    let bahan = [];
    let data = [];

    for (let index = 0; index < bahans.length; index++) {
      bahan[index] = bahans[index];

      data[index]={
        id_resep : id_resep,
        bahan : bahan[index],
        is_active : 1
      }
      $.ajax({
      url : 'http://localhost:3000/bahan/',
      type : 'POST',
      data : data[index],
      dataType : 'JSON',
      success : function(data){
        success('Data Bahan Berhasil Ditambahkan !!');
      }
      })
    }
})

function plusBahan(){
  let html = `
  <div class="mb-3" id="tambah_bahan">
   <div class="row">
                  <div class="col-md-10">
                    <input type="text" class="form-control bahan" name="bahan[]" autocomplete="off">
                  </div>
                    <div class="col-md-2">
                    <div class="row">
                    </div>
                      <button type="button" class="btn btn-secondary btn-sm" onclick="removeBahan()"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                <div id="bahan_error" class="form-text" style="color:red;">
                </div>
  </div>
               `
  $('.multipleBahan').append(html);
}

function removeBahan(){
  $('#tambah_bahan').remove();
}

function statOn(id){
  const data = 2;
  $.ajax({
    url : 'http://localhost:3000/bahan/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Bahan Tidak Ditampilkan !!');
      }
    }
  })
}


function statOff(id){
  const data = 1;
  $.ajax({
    url : 'http://localhost:3000/bahan/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Bahan Ditampilkan !!');
      }
    }
  })
}

function deleteBahan(id){
  Swal.fire({
  title: 'Yakin Menghapus Bahan?',
  text: "Data bahan akan dihapus permanen",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus',
  cancelButtonText : 'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url : 'http://localhost:3000/bahan/'+id,
      type : 'DELETE',
      dataType : 'JSON',
      success : function(data){
    Swal.fire(
      'Dihapus !!',
      'Data bahan berhasil dihapus',
      'success'
    ).then(function(){
      window.location = 'ManajemenBahan';
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
            window.location = 'ManajemenBahan';
        });
}