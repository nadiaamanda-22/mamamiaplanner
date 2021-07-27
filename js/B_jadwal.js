$(document).ready(function() {
    $.noConflict();
    var table = $('#tablejadwal')
    $.ajax({
      url : 'http://localhost:3000/jadwal/',
      type : 'GET',
      dataType : 'JSON',
      success : function(data){
        let jadwals = data.data;
        $.each(jadwals, (i, jadwal) => {

        if(jadwal.is_active==0){
          var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
        }else if(jadwal.is_active==1){
          var html = `<a href="javascript:;" onclick="statOn(${jadwal.id_jadwal})"><span class="badge bg-success">Aktif</span></a>`
        }else if(jadwal.is_active==2){
          var html = `<a href="javascript:;" onclick="statOff(${jadwal.id_jadwal})"><span class="badge bg-danger">Tidak Aktif</span></a>`
        }
        let tbl_resep = jadwal.tbl_resep;
        let tbl_user  = jadwal.tbl_user
          $('.valuetablejadwal').append(`
           <tr>
              <th scope="row">${i+1}</th>
              <td>${tbl_user.username}</td>
              <td>${tbl_resep.nama_resep}</td>
              <td>${jadwal.catatan}</td>
              <td>${jadwal.for_date}</td>
              <td class="text-center">`+html+`</td>
              <td class="text-center">
               <div class="d-grid gap-2 d-md-block">
                  <a href="javascript:;" onclick="detailJadwal(${jadwal.id_jadwal})"><span class="badge bg-secondary"><i class="fa fa-info"></i></span></a>
                  <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                  <a href="javascript:;"><span class="badge bg-danger" onclick="deleteJadwal(${jadwal.id_jadwal})"><i class="fa fa-trash-alt"></i></span></a>
              </div>
              </td>
          </tr>                 
          `)
        })
        $('#tablejadwal').DataTable({
          responsive: true,
          scrollX : true
        });
      }
    })
});

  $('#submit_jadwal').on('click', function(e){
  e.preventDefault();
  var formData = new FormData($('#formJadwal')[0]);
  $.ajax({
  url : 'http://localhost:3000/jadwal/',
  type : 'POST',
  data : formData,
  processData: false,
  contentType: false,
  success : function(data){
  if(data.success){
    success('Data Jadwal Berhasil Ditambahkan !!');
}
}
})
})

function statOn(id){
const data = 2;
$.ajax({
url : 'http://localhost:3000/jadwal/stat'+id,
type : 'PUT',
data : {is_active:data},
dataType : 'JSON',
success : function(data){
if(data.success){
success('Data jadwal Tidak Ditampilkan !!');
}
}
})
}


function statOff(id){
const data = 1;
$.ajax({
url : 'http://localhost:3000/jadwal/stat'+id,
type : 'PUT',
data : {is_active:data},
dataType : 'JSON',
success : function(data){
if(data.success){
success('Data jadwal Ditampilkan !!');
}
}
})
}

function deleteJadwal(id){
console.log(id);
Swal.fire({
title: 'Yakin Menghapus Jadwal?',
text: "Data jadwal akan dihapus permanen",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Hapus',
cancelButtonText : 'Batal'
}).then((result) => {
if (result.isConfirmed) {
$.ajax({
url : 'http://localhost:3000/jadwal/'+id,
type : 'DELETE',
dataType : 'JSON',
success : function(data){
Swal.fire(
'Dihapus !!',
'Data jadwal berhasil dihapus',
'success'
).then(function(){
window.location = 'ManajemenJadwal';
})
}
})

}
})
}

function detailJadwal(id){
var myModal = new bootstrap.Modal(document.getElementById('detailJadwal'))
myModal.show()
$.ajax({
url:'http://localhost:3000/jadwal/'+id,
type : 'GET',
dataType : 'JSON',
success : function(data){
let jadwal = data.data;
$('.d_nama_resep').text(jadwal.nama_resep);
$('.d_id_user').text(jadwal.id_user);
$('.d_catatan').text(jadwal.catatan);
$('.d_for_date').text(jadwal.for_date);

if(jadwal.is_active==1){
var html = `<span class="badge bg-success">Aktif</span>`
}else if(jadwal.is_active==2){
var html = `<span class="badge bg-danger">Tidak Aktif</span>`
}

if(jadwal.role_id==11){
var role = `<span class="badge bg-secondary">Admin</span>`
}else if(jadwal.role_id==12){
 var role = `<span class="badge bg-secondary">User</span>`
}

$('.d_is_active').html(html);
$('.d_role_id').html(role);


let date = new Date(jadwal.created_at);


var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();

$('.created_at').text(`${day} - ${month} - ${year}`)
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
    window.location = 'ManajemenJadwal';
});
}