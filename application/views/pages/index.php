<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>application/css/index.css">

    <title>Login</title>


  </head>
  <body style="background:#05212A;">

  <div class="maincontainer">
      <h3 class="font-weight-bold text-center p-3">Login</h3>
      
      <?php echo validation_errors() ?>
      <?php echo form_open('pages/login_validation'); ?>

              <div class="input-group p-3">
                  <input type="text" class="form-control" placeholder="Username" name="username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group p-3">
                  <input type="password" class="form-control" placeholder="Password" name="password" aria-label="Username" aria-describedby="basic-addon1">
              </div>

              <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-success btn-lg btn-block m-3">Login</button>
              </div>

                <?php echo $this->session->flashdata('error') ?>

      </form> 



  </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>