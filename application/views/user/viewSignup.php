<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SINILAB || <?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="bgk">
  <!-- header -->
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="<?php echo base_url('assets/img/logo-sinilab.png');?>">
        </div>
      </div>
    </header>
    <!-- end header -->
    
    <div class="space"></div>
    <div class="cotainer">
      <div class="wraper justify-content-around">
        <div class="d-flex justify-content-around">
          <div class="col-md-4 nopad">
              <div class="login-box">
                <div class="boox">
                  <img src="<?php echo base_url('assets/img/logo-sinilab.png');?>">
                </div>
                  <form method="POST" action="<?= base_url(); ?>index.php/users/Login" class="needs-validation" novalidate="">
                    <div class="form-group mb-3">
                      <input type="email" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama lengkap">
                    </div>
                    <div class="form-group mb-3">
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Kata Sandi" name="password">
                    </div>
                    <div class="d-grid gap-2">
                        <input class="btn btn-primary" type="submit" value="Daftar">
                      </div>
                      <div class="switch">Sudah Memiliki Akun? <a href="<?php echo base_url();?>index.php/users/Login">Masuk</a></div>
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
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
