<?php
	$this->load->view('user/header2');
?>
<div class="space "></div>
<div class="container d-flex justify-content-center ">
	<div class="row main">
		 <div class="input-group">
			<input type="text" class="form-control rounded-left" placeholder="Tes Darah Jakarta">
			<div class="input-group-append">
				<button class="btn btn-secondary rounded-right" type="button">
					<i class="fa fa-search"></i>
			</button>
			</div>
    	</div>
  </div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h6 class="kategori">Kategori Tes</h6>
			<div class="card-items ket">
				<div class="row">
					<button class="btnk">all</button>
					<button class="btnk">Blood</button>
					<button class="btnk">Urine</button>
					<button class="btnk">Stool</button>
					<button class="btnk">Saliva</button>
				</div>
			</div>
			<!-- <div class="row margin-left"> -->
			<h6 class="kategori margin-left"> <i class="fas fa-home"></i> Alamat Pengiriman</h6>
			<textarea class="form-control kets"></textarea>
			<h6 class="kategori margin-left"> <i class="fas fa-map-marker-alt"></i> Lokasi Test</h6>
			
			<div class="card-items kets">
				<h6 class="h6"><i class="fa fa-dot-circle"></i>Terdekat</h6>

				<div class="scroll d-flex flex-column bd-highlight mb-3" >
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">aceh</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">Padang</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">Jakarta</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
						<label class="form-check-label" for="inlineRadio1">Bnten</label>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="space"></div> -->
		<div class="col-8">
			<div class="card-items ketst">
				<div class="row ">
					<div class="col-auto">
						<img class="log-rs" src="<?php echo base_url(); ?>assets/img/rshm.jpg" alt="">
					</div>
					<div class="col">
						<h4 class="head-lok">Rumah Sakit Harum Sisma Medika</h4>
						<h6 class="alamat-lok">Jl. S. Kalimalang Tarum Barat, RT.1/RW.13</h6>
						<h6 class="alamat-lok"> (021) 8617212</h6>
						<div class="row">
							<div class="col-sm">
								<i class="fas fa-map-marker-alt"><i class="fas fa-chevron-left"></i>8km</i>
								<span><i class="fas fa-star" style="color:#9df510"></i>4.5</span>
							</div>
						</div>
					</div>
					<div class="col-auto center"><a href="" class="btnd sa">Pesan Sekarang</a></div>
				</div>
			</div>
			<div class="card-items ketst">
				<div class="row ">
					<div class="col-auto">
						<img class="log-rs" src="<?php echo base_url(); ?>assets/img/rshm.jpg" alt="">
					</div>
					<div class="col">
						<h4 class="head-lok">Rumah Sakit Harum Sisma Medika</h4>
						<h6 class="alamat-lok">Jl. S. Kalimalang Tarum Barat, RT.1/RW.13</h6>
						<h6 class="alamat-lok"> (021) 8617212</h6>
						<div class="row">
							<div class="col-sm">
								<i class="fas fa-map-marker-alt"><i class="fas fa-chevron-left"></i>8km</i>
								<span><i class="fas fa-star" style="color:#9df510"></i>4.5</span>
							</div>
						</div>
					</div>
					<div class="col-auto center"><a href="" class="btnd sa">Pesan Sekarang</a></div>
				</div>
			</div>
			<div class="card-items ketst">
				<div class="row ">
					<div class="col-auto">
						<img class="log-rs" src="<?php echo base_url(); ?>assets/img/rshm.jpg" alt="">
					</div>
					<div class="col">
						<h4 class="head-lok">Rumah Sakit Harum Sisma Medika</h4>
						<h6 class="alamat-lok">Jl. S. Kalimalang Tarum Barat, RT.1/RW.13</h6>
						<h6 class="alamat-lok"> (021) 8617212</h6>
						<div class="row">
							<div class="col-sm">
								<i class="fas fa-map-marker-alt"><i class="fas fa-chevron-left"></i>8km</i>
								<span><i class="fas fa-star" style="color:#9df510"></i>4.5</span>
							</div>
						</div>
					</div>
					<div class="col-auto center"><a href="" class="btnd sa">Pesan Sekarang</a></div>
				</div>
			</div>
			<div class="ketstt ">
				<nav aria-label="Page navigation ">
				<ul class="pagination">
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
					</li>
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
					</li>
				</ul>
			</nav>
			</div>
		</div>
	</div>
</div>
<div class="space"></div>
<?php $this->load->view('user/footer'); ?>)
