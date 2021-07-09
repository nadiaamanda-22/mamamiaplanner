 $(document).ready(function() {
            $.noConflict();
            var table = $('#tableuser')
            $.ajax({
              url : 'http://localhost:3000/user/',
              type : 'GET',
              dataType : 'JSON',
              success : function(data){
                let users = data.data;
                $.each(users, (i, user) => {

                if(user.is_active==0){
                  var html = `<span class="badge bg-success text-center mb-4">Aktif</span><span class="badge bg-danger">Tidak Aktif</span>`
                }else if(user.is_active==1){
                  var html = `<a href="javascript:;" onclick="statOn(${user.id_user})"><span class="badge bg-success">Aktif</span></a>`
                }else if(user.is_active==2){
                  var html = `<a href="javascript:;" onclick="statOff(${user.id_user})"><span class="badge bg-danger">Tidak Aktif</span></a>`
                }
                  $('.valuetableuser').append(`
                   <tr>
                      <th scope="row">${i+1}</th>
                      <td>${user.username}</td>
                      <td>${user.full_name}</td>
                      <td>${user.email_user}</td>
                      <td class="text-center">`+html+`</td>
                      <td class="text-center">
                       <div class="d-grid gap-2 d-md-block">
                          <a href="javascript:;" onclick="detailUser(${user.id_user})"><span class="badge bg-secondary"><i class="fa fa-info"></i></span></a>
                          <a href=""><span class="badge bg-warning "><i class="fa fa-edit"></i></span></a>
                          <a href="javascript:;"><span class="badge bg-danger" onclick="deleteUser(${user.id_user})"><i class="fa fa-trash-alt"></i></span></a>
                      </div>
                      </td>
                  </tr>                 
                  `)
                })
                $('#tableuser').DataTable({
                  responsive: true,
                  scrollX : true
                });
              }
            })
  });

  $('#submit_user').on('click', function(e){
  e.preventDefault();
  var formData = new FormData($('#formUser')[0]);
  $.ajax({
    url : 'http://localhost:3000/user/',
    type : 'POST',
    data : formData,
    processData: false,
    contentType: false,
    success : function(data){
      if(data.success){
        success('Data User Berhasil Ditambahkan !!');
      }
    }
  })
})

function statOn(id){
  const data = 2;
  $.ajax({
    url : 'http://localhost:3000/user/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data user Tidak Ditampilkan !!');
      }
    }
  })
}


function statOff(id){
  const data = 1;
  $.ajax({
    url : 'http://localhost:3000/user/stat/'+id,
    type : 'PUT',
    data : {is_active:data},
    dataType : 'JSON',
    success : function(data){
      if(data.success){
        success('Data user Ditampilkan !!');
      }
    }
  })
}

function deleteUser(id){
  console.log(id);
  Swal.fire({
  title: 'Yakin Menghapus User?',
  text: "Data user akan dihapus permanen",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Hapus',
  cancelButtonText : 'Batal'
}).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
      url : 'http://localhost:3000/user/'+id,
      type : 'DELETE',
      dataType : 'JSON',
      success : function(data){
    Swal.fire(
      'Dihapus !!',
      'Data user berhasil dihapus',
      'success'
    ).then(function(){
      window.location = 'ManajemenUser';
    })
      }
    })
    
  }
})
}

function detailUser(id){
  var myModal = new bootstrap.Modal(document.getElementById('detailUser'))
  myModal.show()
  $.ajax({
    url:'http://localhost:3000/user/'+id,
    type : 'GET',
    dataType : 'JSON',
    success : function(data){
      let user = data.data;
      $('.d_username').text(user.username);
      $('.d_full_name').text(user.full_name);
      $('.d_email').text(user.email_user);
      $('.image').html(`<img src="http://localhost:3000/${user.foto_user}" width="250" height="250" alt=""></img>`)

      if(user.is_active==1){
        var html = `<span class="badge bg-success">Aktif</span>`
      }else if(user.is_active==2){
        var html = `<span class="badge bg-danger">Tidak Aktif</span>`
      }

      if(user.role_id==11){
        var role = `<span class="badge bg-secondary">Admin</span>`
      }else if(user.role_id==12){
         var role = `<span class="badge bg-secondary">User</span>`
      }

      $('.d_is_active').html(html);
      $('.d_role_id').html(role);


      let date = new Date(user.created_at);


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
            window.location = 'ManajemenUser';
        });
}