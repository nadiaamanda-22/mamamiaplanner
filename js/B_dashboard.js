$(document).ready(function(){
    $.ajax({
        url : 'http://localhost:3000/resep/',
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            $('.total_menu').html(data.total_data+` Menu Tersedia`);
        }
    })

    $.ajax({
        url : 'http://localhost:3000/user/',
        type : 'GET',
        dataType : 'JSON',
        success : function(data){
            $('.total_user').html(data.total_data+` Akun Terdaftar`);
        }
    })
})