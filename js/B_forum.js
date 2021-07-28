 $(document).ready(function() {
            $.noConflict();
            var table = $('#tableforum')
            $.ajax({
              url : 'http://localhost:3000/post/',
              type : 'GET',
              dataType : 'JSON',
              success : function(data){
                let forums = data.data;
                console.log(forums)
                $.each(forums, (i, forum) => {

                if(forum.is_active==0){
                  var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
                }else if(forum.is_active==1){
                  var html = `<a href="javascript:;" onclick="statOn(${forum.id_post_user})"><span class="badge bg-success">Aktif</span></a>`
                }else if(forum.is_active==2){
                  var html = `<a href="javascript:;" onclick="statOff(${forum.id_post_user})"><span class="badge bg-danger">Tidak Aktif</span></a>`
                }

                let tbl_user = forum.tbl_user

                console.log(tbl_user);

                  $('.valuetableforum').append(`
                   <tr>
                      <th scope="row">${i+1}</th>
                      <td>${tbl_user.username}</td>
                      <td>${forum.deskripsi}</td>
                      <td>${forum.tanggal_upload}</td>
                      <td class="text-center">`+html+`</td>
                      <td class="text-center">
                       <div class="d-grid gap-2 d-md-block">
                          <a href="javascript:;" onclick="detailUser(${forum.id_post_user})"><span class="badge bg-secondary"><i class="fa fa-info"></i></span></a>
                          <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                          <a href="javascript:;"><span class="badge bg-danger" onclick="deleteForum(${forum.id_post_user})"><i class="fa fa-trash-alt"></i></span></a>
                      </div>
                      </td>
                  </tr>                 
                  `)
                })
                $('#tableforum').DataTable({
                  responsive: true,
                  scrollX : true
                });
              }
            })
  });


  function statOn(id){
  const data = 2;
  $.ajax({
    url : 'http://localhost:3000/post/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data post Tidak Ditampilkan !!');
      }
    }
  })
}


function statOff(id){
  const data = 1;
  $.ajax({
    url : 'http://localhost:3000/post/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data post Ditampilkan !!');
      }
    }
  })
}

function deleteForum(id){
  console.log(id);
  Swal.fire({
  title: 'Yakin Menghapus Post?',
  text: "Data post user akan dihapus permanen",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus',
  cancelButtonText : 'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url : 'http://localhost:3000/post/'+id,
      type : 'DELETE',
      dataType : 'JSON',
      success : function(data){
    Swal.fire(
      'Dihapus !!',
      'Data post user berhasil dihapus',
      'success'
    ).then(function(){
      window.location = 'ManajemenForum';
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
            window.location = 'ManajemenForum';
        });
}