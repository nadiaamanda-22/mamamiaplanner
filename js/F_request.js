$('#submit_request').on('click', function(e){
    e.preventDefault();

    let date = new Date()

    let hari = date.getDate()
	let bulan = date.getMonth()
	let tahun = date.getFullYear();

    let tanggal = tahun+'-'+bulan+'-'+hari;

    // let data = {
    //     nama_request_resep : $('#nama_request_menu').val(),
    //     pesan : $('#pesan').val(),
    //     id_user : id_user,
    //     status : 1,
    //     tanggal_request : tanggal,
    // }
    let formData = new FormData($('#formRequest')[0])

    $.ajax({
        url : 'http://localhost:3000/request/u',
        type : 'POST',
        data : formData,
        processData: false,
        contentType: false,
        success : function(data){
            if(data.success){
                success('Request berhasil dikirim !!!');
            }
        }
    })
})


function success(alert){
  Swal.fire({
            icon: 'success',
            title: ''+alert,
            text: '',
            time: 1000
        }).then(function() {
            window.location = 'Forum';
        });
}