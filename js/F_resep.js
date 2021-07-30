$('.key_resep_menu').on('keyup', function(){
        let keyword = $('.key_resep_menu').val();
        $('.judul-menu').text('');
        $('.box_menu').html('')

        $.ajax({
        url : 'http://localhost:3000/resep/search/'+keyword,
        type : 'GET',
        dataType : 'JSON',
        success : function(data){

            if(data.total_data>=1){
                $('.judul-menu').text(`Hasil pencarian : ${data.total_data} Menu tesedia`);
            }else if(data.total_data==null){
                
            }else if(data.total_data==0){
                $('.judul-menu').text('Data Resep tidak ditemukan !!');
            }

            let result_searchs = data.data;
            $.each(result_searchs, (i,res)=>{

                let html = [];



                $('.box_menu').append(`<div class="col-sm-4">
               <div class="card menu"  style="max-height: 350px;">
                  <div class="card-image waves-effect waves-block waves-light">
                     <img class="activator responsive-img" src="http://localhost:3000/${res.gambar_resep}">
                  </div>
                  <div class="card-content">
                     <span class="card-title activator" style="font-weight: bold;">${res.nama_resep}
                        <i class="material-icons right">more_vert</i>
                     </span>
                     <hr style="width: 90%;">
                     <p style="text-align: left;"><button><a href="${base_url}Menu/details/${res.id_resep}" style="color:#aa5806;">Detail</a></button></p>
                  </div>
                  <div class="card-reveal">
                     <span class="card-title grey-text text-darken-4">${res.nama_resep}<i class="material-icons right">close</i></span>
                     <p>Bahan :</p>
                        <ul type="cirle" class="bahan">
                        `+res.tbl_bahans.forEach(element => {
                            ('<li></li>')
                        })+`
                        </ul>
                  </div>
               </div>
            </div>`)
            })
        }
    })
})