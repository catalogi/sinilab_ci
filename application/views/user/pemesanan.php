<?php
	$this->load->view('user/header');
?>

<div class="space"></div>
	<div class="container">
		<div class="row d-flex justify-content-center ">
			<div class="card-items">
				<div class="card-body">
					<h6 style="margin-bottom :10px;">Order ID :03049705</h6>
					<div class="border-bottom border-info"></div>
					<h6 style="margin :10px 0;">Order Details</h6>
					<div class="container">
						<div class="row">
						<div class="col-sm">
							<div class="row">
								<div class="col-md">
									<h6>Lokasi Tes : </h6>
								</div>
								<div class="col-md">
									<h6>Rumah Sakit Harum Sisma Medika</h6>
								</div>
								<div class="row">
									<div class="col-md">
										<h6>Lokasi Pengiriman</h6>
										<textarea class="form-control ketst" readonly="readonly"></textarea>
									</div>
								</div>
								<div class="row" style="margin-top:20px">
									<div class="col-sm">
										<h6>Nama </h6>
									</div>
									<div class="col-md">
										<h6>kategori</h6>
									</div>
								</div>
								<div class="row ketst">
									<div class="table table-lg">
										<table class="table ketst " style="margin:10px 75px">
											<thead>
												<tr>
												<th scope="col"></th>
												<th scope="col">blood <br><h6>300000</h6></th>
												<th scope="col">urine <br><h6>250000</h6></th>
												<th scope="col">stool <br><h6>200000</h6></th>
												<th scope="col">saliva <br><h6>125000</h6></th>
												</tr>	
											</thead>
											<tbody>
												<tr>
													<th>maria</th>
													<th><i  class="fa fa-check"></i></th>
												</tr>
											</tbody>
											<tfoo>
												<tr>
												<th scope="col">Jumlah</th>
												<th scope="col"><h6>300000</h6></th>
												<th scope="col"><h6>0</h6></th>
												<th scope="col"><h6>0</h6></th>
												<th scope="col"><h6>0</h6></th>
												</tr>	
											</tfoo>
										</table>
									</div>
								</div>
								<div class="row"style="margin: 10px 0 10px 345px">
									<h6>Jumlah Tes yang Dilakukan : 1</h6></div>
								</div>
								<div class="border-bottom border-info"></div>
						</div>
						<div class="row ketst">
							<div class="col" style="margin-top:15px">
								<h6>Metode Pembayaran</h6>
								<div class=" d-flex flex-column bd-highlight mb-3" >
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<img src="<?php echo base_url();?>assets/img/qris.png" alt="">
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<img src="<?php echo base_url();?>assets/img/indomaret.png" alt="">
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<img src="<?php echo base_url();?>assets/img/alfamaret.png" alt="">
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<img src="<?php echo base_url();?>assets/img/gopay.png" alt="">
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
										<img src="<?php echo base_url();?>assets/img/ovo.png" alt="">
									</div>									
								</div>
							</div>
						</div>
						<div class="row justify-content-end margin-right">
							<div class="row col-lg-5 flex-column">
								<h6>Subtotal untuk pembayaran </h6> 
								<h6>Total Ongkos Kirim </br> </h6>
								<h6>Biaya Test-kit </h6> 
								<h6>Biaya Komisi</h6> 
								<h6>Total Pembayaran </h6> 
							</div>
							<div class="row align-self-center col-sm-2">
								<h6>1 x 5000</h6>
							</div>
							<div class="row col-sm-3 flex-column justify-content-center">
								<h6>300000 </h6> 
								<h6>20000 </br> </h6>
								<h6>5000 </h6> 
								<h6>10000</h6> 
								<h2>335000 </h2> 
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space">s</div>

	<?php
	$this->load->view('user/footer');
	?>

