 <html>
 <head>
	 <title>
		 ::OKE::
	 </title>
	 
	 <link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	 <link href="<?php echo base_url('/assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />


		<link href="<?php echo base_url('assets/css/jquery-ui.css')?>" rel="stylesheet">

      <!-- jquery -->
			<script src="<?php echo base_url('assets/js/jquery.min.js')?>" type="text/javascript"></script>
      <script src="<?php echo base_url('assets/js/jquery-ui.js')?>" type="text/javascript"></script>



 </head>
 <body>
	  <div class="form-group">
		 <label> Nama Siswa : </label>
		 <input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
		</div>

		<div class="form-group">
		 <label> Alamat : </label>
		 <textarea name="alamat" id="alamat" class="form-control"> </textarea>
	  </div>

		<div class="form-group">
		 <button type="submit" name="simpan" id="simpan"> Save </button>
		 <button type="button" name="clear" id="clear"> Clear </button>
		</div>

		<br>
		<br>
		<hr style="border:2px solid #000;">
		<h3 align="center"> Pencarian Data </h3>
		<br>

		<div class="form-group">
		 <label> Pencarian Nama : </label>
		 <input type="text" name="pencarian_nama" id="pencarian_nama" class="form-control">
		</div>

		<br>


		<div class="form-group">
		 <label> Nama Siswa : </label>
		 <input type="text" name="res_nama" id="res_nama" class="form-control">
		</div>

		<div class="form-group">
		 <label> Alamat : </label>
		 <input type="text" name="res_alamat" id="res_alamat" class="form-control">
		</div>


	<script>


		$("#simpan").on("click",function(){

			var nama_siswa = $("#nama_siswa").val();
			var alamat = $("#alamat").val();

			$.ajax({
				url:"<?php echo base_url('test1/posting'); ?>",
				data:{nama:nama_siswa,alamat:alamat},
				type:"POST",
				success:function(result){
					console.log(result);
					alert("Simpan Berhasil");
				}
			})

		});

		$("#clear").on("click",function(){

		 $("#nama_siswa").val('');
		 $("#alamat").val('');


		});


		     $(function () {
		        $("#pencarian_nama").autocomplete({    //id kode sebagai key autocomplete yang akan dibawa ke source url
		            minLength:0,
		            delay:0,
		            source:'<?php echo base_url('test1/search'); ?>',   //nama source kita ambil langsung memangil fungsi get_allkota
		            select:function(event, ui){

		                $('#res_nama').val(ui.item.nama);
		                $('#res_alamat').val(ui.item.alamat);

		                }
		            });
		        });

  </script>
 </body>

 </html>
