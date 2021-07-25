$(document).ready(function(){
    let date = new Date()
	let hari = date.getDate()
	let bulan = date.getMonth()
	let tahun = date.getFullYear();
    let val = [];
    let kotak = [];
    let fulldate = [];


    bulan = bulan

    let total_loop = daysInMonth(bulan, tahun)


        var isi_kotak = `<div class="col-md-4">
                        <div class="card kotak">
                        <form action=""><input type="text" name="loop_tanggal[]" data-tanggal="" class="loop_tanggal"></form>
                        <div class="card-body kotak2 center">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                    <img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
                                    <h5>1 Juli 2021</h5>
                                    <h6>Ayam Woku</h6>
                                    <h6>Sulawesi</h6>
                                    <p>400 Kalori/Porsi</p>

                                    <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                                    <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                                    </div>

                                    <div class="swiper-slide"><img class="materialboxed center" src="<?php echo base_url() ?>assets/img/slider/2.png">
                                    <h5>1 Juli 2021</h5>
                                    <h6>Ayam Woku</h6>
                                    <h6>Sulawesi</h6>
                                    <p>400 Kalori/Porsi</p>

                                    <a class="btn edit" href="#" role="button"><i class="bi bi-pencil-square text-white"></i></a>
                                    <a class="btn hapus" href="#" role="button"><i class="bi bi-trash text-white"></i></a>
                                    </div>

                                </div>
                                <div class="swiper-button-next" style="margin-top:20px;"></div>
                                <div class="swiper-button-prev" style="margin-top:20px;"></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>`

        var kotak_kosong = `<div class="col-md-4">
                        <div class="card kotak text-center">
                        <form action=""><input type="text" name="loop_tanggal[]" value="" class="loop_tanggal"></form>
                        <div class="card-body">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                <h3 class="card-title mb-3">Tambah Masakan</h3>
                                <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>`

        // for (let j = 1; j <= total_loop; j++) {
        //     tanggal[j]=j
		//     fulldate[j]=tanggal[j]+`/`+bulan+`/`+tahun;
        //      var kotak = `<div class="col-md-4">
        //                 <div class="card kotak text-center">
        //                 <form action=""><input type="text" name="loop_tanggal[]" value="${fulldate[j]}" class="loop_tanggal"></form>
        //                 <div class="card-body">
        //                     <div class="container">
        //                     <div class="row">
        //                         <div class="col-md-12">
        //                         <h3 class="card-title mb-3">Tambah Masakan</h3>
        //                         <a href="#modal1" class="modal-trigger"> <span><i class="bi bi-plus-circle plus"></i></span></a>
        //                         </div>
        //                     </div>
        //                     </div>
        //                 </div>
        //                 </div>
        //             </div>`
        // }

        $.ajax({
            url : 'http://localhost:3000/jadwal/u/'+id,
            Type: 'GET',
            dataType : 'JSON',
            success : function (data){
                let jadwals = data.data

                console.log(jadwals)

                // let tanggals = $(".loop_tanggal").map(function(){return $(this).val();}).get();
                // let kotaks = $(".kotaks").map(function(){return $(this).html();}).get();

                // $.each(jadwals, function(i, jadwal){

                // for (let index = 0; index < total_loop; index++) {
                //     tanggal[index] = tanggals[index]
                //     kotak[index] = kotaks[index]
                //     if(jadwal.for_date==tanggal[index]){
                //     }
                // }

                //     $.each(jadwal, function(i,jdwl){
                            
                //     })
                // })

                // for (let index = 1; index <= total_loop; index++) {
                //         tanggal[index] = tahun+`-`+bulan+`-`+index

                //         // $('.loop_tanggal').val(tanggal[index]);

                // }

                // $.each(jadwals, function(i, jadwal){

                // })

            }
        })


    // for (var i = 1; i <= total_loop; i++) {
	// 	// tanggal[i]=i
	// 	// fulldate[i]=tanggal[i]+`/`+bulan+`/`+tahun;

	// if(i>(total_loop-6)){
	// 		// console.log('minggu 1')
    //         $('.page1').each(function(){
    //         $('.page1').append(kotak);
    //         })
	// 	}else if(i>19){
	// 		// console.log('minggu 2')
	// 		$('.page2').each(function(){
    //             $('.page2').append(kotak);
    //         })
	// 	}else if(i>13){
	// 			// console.log('minggu 3')
    //             $('.page3').each(function(){
    //             $('.page3').append(kotak);
    //         })
	// 	}else if(i>7){
	// 			// console.log('minggu 4')
    //             $('.page4').each(function(){
    //             $('.page4').append(kotak);
    //         })
	// 	}else if(i>1){
	// 		// console.log('sisa hari')
    //         $('.page5').each(function(){
    //             $('.page5').append(kotak);
    //         })
	// 	}else if(i>0){
    //         $('.page6').each(function(){
    //             $('.page6').append(kotak);
    //         })
    //     }



	// }

    // for (let index = 1; index <= total_loop; index++) {
    //     tanggal[index]=index
	// 	fulldate[index]=tanggal[index]+`/`+bulan+`/`+tahun;

    //     $("input[name='loop_tanggal[index]']").val(fulldate[index])

    //     // $("input[name='loop_tanggal[]']").each(function(){
    //     //     console.log('ok')
    //     // })
    // }
        // for (let index = 1; index <= total_loop; index++){
        //     tanggal[index]=index
        //     if(index=>1&&index<=6){
        //         for(let j=1; j<=6;j++){
        //         fulldate[j] = tahun+`-`+bulan+`-`+tanggal[index]
        //         console.log(fulldate[j])
        //         }
        //     }
        // }
        // let step = 6
        // for (let i = 1; i <= total_loop; i+=step){
        //         $('.page1').append(kotak)
        //         $('.page2').append(isi_kotak)
        //         $('.page3').append(kotak)
        //         $('.page4').append(isi_kotak)
        //         $('.page5').append(kotak)
        //         $('.page6').append(kotak)
        //         $('.page7').append(kotak)
        // }

        

// var swiper = new Swiper(".mySwiper", {
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev",
//     },
// });

})

$('.modal-trigger').on('click', function(){
   let tanggal = $(this).data('tanggal')
})

function daysInMonth (month, year) { // Use 1 for January, 2 for February, etc.
  		return new Date(year, month, 0).getDate();
}

