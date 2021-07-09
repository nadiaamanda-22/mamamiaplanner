$(document).ready(function() {
        $.noConflict();
        var table = $('#tablelangkahmasak')
        $.ajax({
            url : 'http://localhost:3000/masak/',
            type : 'GET',
            dataType : 'JSON',
            success : function(data){

            let langkahmasaks = data.data;
            $.each(langkahmasaks, (i, langkahmasak) =>{

            if(langkahmasak.is_active==0){
                var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
            }else if(langkahmasak.is_active==1){
                var html = `<a href="javascript:;" onclick="statOn(${langkahmasak.id_langkah_masak})"><span class="badge bg-success">Aktif</span></a>`
            }else if(langkahmasak.is_active==2){
                var html = `<a href="javascript:;" onclick="statOff(${langkahmasak.id_langkah_masak})"><span class="badge bg-danger">Tidak Aktif</span></a>`
            }

            let tbl_resep = langkahmasak.tbl_resep;
                $('.valuetablelangkahmasak').append(`
                <tr>
                    <th scope="row">${i+1}</th>
                    <td>${langkahmasak.langkah_masak}</td>
                    <td>${tbl_resep.nama_resep}</td>
                    <td>`+html+`</td>
                    <td>
                    <div class="d-grid gap-2 d-md-block">
                        <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                        <a href="javascript:;"><span class="badge bg-danger" onclick="deletelangkahmasak(${langkahmasak.id_langkah_masak})"><i class="fa fa-trash-alt"></i></span></a>
                    </div>
                    </td>
                </tr>                 
                `)
            })
            $('#tablelangkahmasak').DataTable({
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

function pluslangkahmasak(){
  let html = `
  <div class="mb-3" id="tambah_langkahmasak">
   <div class="row">
                  <div class="col-md-10">
                    <input type="text" class="form-control langkahmasak" name="langkahmasak[]" autocomplete="off">
                  </div>
                    <div class="col-md-2">
                    <div class="row">
                    </div>
                      <button type="button" class="btn btn-secondary btn-sm" onclick="removelangkahmasak()"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                <div id="bahan_error" class="form-text" style="color:red;">
                </div>
  </div>
               `
  $('.multiplelangkahmasak').append(html);
}

$('#submit_langkahmasak').on('click', function(e){
    e.preventDefault();
    let masaks = $(".langkahmasak").map(function(){return $(this).val();}).get();
    let id_resep = $('#id_resep').val();
    let masak = [];
    let data = [];



    for (let index = 0; index < masaks.length; index++) {
      masak[index] = masaks[index];

      data[index]={
        id_resep : id_resep,
        langkah_masak : masak[index],
        is_active : 1
      }

      $.ajax({
      url : 'http://localhost:3000/masak/',
      type : 'POST',
      data : data[index],
      dataType : 'JSON',
      success : function(data){
        success('Data Langkah Memasak Berhasil Ditambahkan !!');
      }
      })
    }
})

function removelangkahmasak(){
  $('#tambah_langkahmasak').remove();
}


function statOn(id){
  const data = 2;
  console.log(id)
  $.ajax({
    url : 'http://localhost:3000/masak/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Langkah Masak Tidak Ditampilkan !!');
      }
    }
  })
}


function statOff(id){
  const data = 1;
  $.ajax({
    url : 'http://localhost:3000/masak/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data Langkah Masak Ditampilkan !!');
      }
    }
  })
}

function deletelangkahmasak(id){
  Swal.fire({
  title: 'Yakin Menghapus Langkah Memasak?',
  text: "Data langkah memasak akan dihapus permanen",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus',
  cancelButtonText : 'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url : 'http://localhost:3000/masak/'+id,
      type : 'DELETE',
      dataType : 'JSON',
      success : function(data){
    Swal.fire(
      'Dihapus !!',
      'Data langkah memasak berhasil dihapus',
      'success'
    ).then(function(){
      window.location = 'ManajemenLangkahMasak';
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
            window.location = 'ManajemenLangkahMasak';
        });
}