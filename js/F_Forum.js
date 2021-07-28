$('.addpost').on('click', function(){
    $('#form_post_user')[0].reset();
})

$('.simpan2').on('click', function(e){
    e.preventDefault()

    let formData = new FormData($('#form_post_user')[0]);

    $.ajax({
        url : 'http://localhost:3000/post/',
        type : 'POST',
        data : formData,
        processData: false,
        contentType: false,
        dataType : 'JSON',
        success : function(data){
            if(data.success){
                success('Berhasil membagikan masakan !!');
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