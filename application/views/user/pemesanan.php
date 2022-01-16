<?php
	$this->load->view('user/header');
?>

<div class="space"></div>
	<div class="container">
		<div class="row d-flex justify-content-center ">
			<div class="card-items">
				<div class="card-body">
					<h2 class="text-center">PEMESANAN</h2>
					<form>
						<div class="form-group">
							<label for="exampleInputEmail1">Jenis Test</label>
							<select class="form-control" id="exampleFormControlSelect1" name="test">
								<option>Pilih Salah Satu</option>
								<option>Blood Test</option>
								<option>Urine Test</option>
								<option>Stool Test</option>
								<option>Saliva Test</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Pilih Laboratorium RS</label>
							<select class="form-control" id="exampleFormControlSelect1" name="test">
								<option>Pilih Salah Satu</option>
								<option>RSUP Fatmawati</option>
								<option>RSUP AD Gatot Soesbroto</option>
								<option>RSUP Cipto Mangkusumo Kencana</option>
								<option>RS Pondok Indah</option>
							</select>
							
						</div>
					</form>
				</div>
			<div class="px-2"></div>
				<div class="card-body">
					<h2 class="text-center">Alamat Pengiriman</h2>
					<form>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Alamat</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Provinsi</label>
							<input type="text" class="form-control" id="exampleCheck1" name="provinsi" value="Jakarta" readonly>
						</div>
						
						<div class="form-group">
							<label for="exampleInputPassword1">Kota</label>
							<select class="form-control" id="exampleFormControlSelect1" name="kota">
								<option>Pilih Salah Satu</option>
								<option>Jakarta Pusat</option>
								<option>Jakarta Barat</option>
								<option>Jakarta Utara</option>
								<option>Jakarta Timur</option>
							</select>
						</div>
						<div class=" justify-content-end">

							<button type="submit" class="btns position btn-primary">Pesan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="space">s</div>

	<?php
	$this->load->view('user/footer');
	?>

