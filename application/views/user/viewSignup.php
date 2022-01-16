<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('css/login.css');?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <!-- header -->
    <!-- <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="<?php echo base_url('img/logo-sinilab.png');?>">
        </div>
      </div>
    </header> -->
    <!-- end header -->
		<?php
			$this->load->view('user/header');
		?>
    
    <div class="space"></div>
    <div class="cotainer">
      <div class="wraper justify-content-around">
        <div class="d-flex justify-content-around">
          <div class="col-md-4 nopad">
              <div class="login-box">
                <div class="boox">
                  <img src="<?php echo base_url('img/logo-sinilab.png');?>">
                </div>
                  <form>
                    <div class="form-group mb-3">
                      <input type="text" class="form-control" id="exampleInputNama" aria-describedby="nama" name="nama" placeholder="Nama">
                    </div>
                    <!-- <div class="form-group mb-3">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div> -->
                    <div class="form-group mb-3">
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                    <div class="switch">Sudah Memiliki Akun? <a href="">Masuk</a></div>
                  </form>
                  
              </div>  
        </div>
        <div class=" col-md-4 nopad">
            <!-- <img class="logos" src="<?php echo base_url('img/logo-sinilab.png');?>" alt=""> -->
          </div>
        </div>
        
      </div>
    </div>
    <footer>
          <p>Copyright @ 2022 sinilab</p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
