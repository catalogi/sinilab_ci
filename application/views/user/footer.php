<footer>
	<div class="row">
		<img id="logo" src="<?php echo base_url('/assets/img/logo-foot.svg');?>">
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="grup-1">
					<h3>Quick Links</h3>
					<div class="child-grup"></div>
					<h5>Signup</h5>
					<h5>About Us</h5>
				</div>
			</div>	
			<div class="col">
				<div class="grup-1">
					<h3>Other</h3>
					<div class="child-grup"></div>
					<h5>User FAQs</h5>
					<h5>Contact Us</h5>
					<h5>Legal</h5>
					<h5>Privay Policy</h5>
					<h5>Terms and Conditions</h5>
				</div>
			</div>
			<div class="col">
				<div class="grup-1">
					<h3>Products</h3>
					<div class="child-grup"></div>
					<h5>Buy</h5>
					<h5>Patnership</h5>
					<h5>Test-kit</h5>
				</div>
			</div>
			<!-- <div class="col">
				<div class="grup-1">
					<h3 class="grup-2">Subscribe to our newsletter and be the first to know about our updates</h3>
				</div>
			</div> -->
		</div>		
	</div>
</footer>

<!-- <script src="<?php echo base_url();?>assets/js/script.js"></script> -->
<script>
	$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->

</body>
</html>
