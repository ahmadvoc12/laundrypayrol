 <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<style>
  .drop-box{  
	border: 7px solid rgb(34, 45, 50);  
	cursor: pointer;
	margin: 5px auto 30px auto;
	position: relative;
	text-align: center;
	width: 300px;
	background-color: rgb(34, 45, 50);
	z-index: 1;
}
.drop-box p{
	width: 90%;
	display: block;
	color: #fff;
	margin: 3.3rem auto;
}

.drop-box:before {
	content: " ";
	position: absolute;
	z-index: 2;
	top: 1px;
	left: 1px;
	right: 1px;
	bottom: 1px;
	border: 2px dashed rgba(243, 237, 237, 0.32); 
}
#upl{
	display: none;
}
</style>
<script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
   

    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          

          <section class="col-lg-6 connectedSortable">

            <!-- Map card -->
            <div class="card"> 
              <div class="card-header"> Notifikasi </h3>
              </div>
         
               <div class="card-body">
                  <?php if ($waktu != 'dilarang')
                   { 
                    
                    ?>
                  <p class="text-center">Hai, <?=$this->session->userdata('nama')?> anda hari ini belum melakukan presensi. Silahkan lakukan presensi pada tombol presensi berikut 
                  

                  <h1>Presensi dengan Selfie Real-Time dan Lokasi</h1>
    <div>
     

    <form action="<?php echo base_url('pegawai/proses_absen');?>" method="post" enctype="multipart/form-data">
	
	<center>

	<div id="camera" style="height:auto;width:auto; text-align:center;"></div>
    <button class="btn btn-success id="capture">Selfie</button>
    <input  class="btn btn-success"type="hidden" name="image_data" id="image-data">

<!--FOR THE SNAPSHOT-->



    </center>
   

</form>

<script>
    Webcam.set({
        width: 300,
        height: 300,
        image_format: 'png',
        png_quality: 100
    });

    Webcam.attach('#camera');

    var captureButton = document.getElementById('capture');
    var imageDataInput = document.getElementById('image-data');

    captureButton.addEventListener('click', function() {
        Webcam.snap(function(data_uri) {
            imageDataInput.value = data_uri;
        });
    });
</script>


                  <?php }
                  
                  
                  
                  else{ ?>


    
                 
                 
                 
                  <?php }  ?>

                </div>
                </form>
            </div>
          </section>

          

        </div>
      </div>
    </section>
  